import mysql.connector
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
import sys

# Connect to the MySQL database
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="bpmsdb"
)

# Get the email addresses from the database
mycursor = mydb.cursor()
mycursor.execute("SELECT email FROM tblappointment WHERE 1")
emails = [email[0] for email in mycursor.fetchall()]

# Compose the email message
msg = MIMEMultipart()
msg['Subject'] = 'BB Appointment Confirmation'
msg['From'] = 'Beauty Blush <senderemail@gmail.com>'
msg['To'] = sys.argv[1]
body = 'Dear emailCustomer appointment request has been rejected '
msg.attach(MIMEText(body, 'plain'))

# Send the email using an SMTP server
smtp_server = 'smtp.elasticemail.com'
smtp_port = 2525
smtp_username = 'yourelasticemail@gmail.com'
smtp_password = 'your elastic email password'

with smtplib.SMTP(smtp_server, smtp_port) as server:
    server.starttls()
    server.login(smtp_username, smtp_password)
    server.sendmail(smtp_username, emails, msg.as_string())
