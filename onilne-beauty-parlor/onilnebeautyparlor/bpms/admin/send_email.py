'''import smtplib
#SERVER = "localhost"

FROM = 'layaofficial412@gmail.com'

TO = ["kokkullaya@gmail.com"] # must be a list

SUBJECT = "Hello!"

TEXT = "This message was sent with Python's smtplib."

# Prepare actual message

message = """\
From: %s
To: %s
Subject: %s

%s
""" % (FROM, ", ".join(TO), SUBJECT, TEXT)

# Send the mail

server = smtplib.SMTP('smtp.elasticemail.com')
server.sendmail(FROM, TO, message)
server.quit()


'''
import smtplib
from email.mime.text import MIMEText
import sys
import mysql.connector

db = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="bpmsdb"
)

# Retrieve the appointment details from the database
slt=1
cursor = db.cursor()
cursor.execute("select email FROM tblappointment WHERE status=%s",(slt))
appointment = cursor.fetchone()

# appointment_id = 2  # Replace with the ID of the appointment that was cancelled or selected
# cursor = db.cursor()
# cursor.execute("SELECT * FROM tblappointment WHERE id=%s", (appointment_id))
# appointment = cursor.fetchone()

smtp_server = 'smtp.elasticemail.com'
smtp_port = 2525
smtp_username = 'layaofficial412@gmail.com'
smtp_password = '129E751B3D4916526273DF3F1587DEB9899C'

# Create a secure SSL/TLS connection to the SMTP server
smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
smtp_conn.starttls()

# Log in to your email account
smtp_conn.login(smtp_username, smtp_password)
from_email = 'layaofficial412@gmail.com'
#bodyad="New appointment number is",sys.argv[3]," on Time:",sys.argv[4]," Plz confirm the appointment"
to_email =sys.argv[1]
subject ="Appointment Confirmation"
body =f"""\
Subject: Appointment Updates {appointment_id} {appointment[4]}

Dear Customer {appointment[2]},

Your appointment  has been selected for appointment 
# {'selected' if appointment[4] else 'cancelled'}.

Thank you for using our service.

Best regards,
Your Appointments Team
"""
msg = f"From: {from_email}\nTo: {to_email}\nSubject: {subject}\n\n{body}"

#to user
smtp_conn.sendmail(from_email, to_email, msg)
#to admin
#smtp_conn.sendmail(from_email, from_email,  msg1)

smtp_conn.quit()
