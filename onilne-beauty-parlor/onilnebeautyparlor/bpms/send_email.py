import smtplib
from email.mime.text import MIMEText
import sys

smtp_server = 'smtp.elasticemail.com'
smtp_port = 2525
smtp_username = 'yourelasticemail@gmail.com'
smtp_password = 'elasticemailpassword'

# Create a secure SSL/TLS connection to the SMTP server
smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
smtp_conn.starttls()

# Log in to your email account
smtp_conn.login(smtp_username, smtp_password)
from_email = 'Beauty Blush  <elasticemail@gmailcom>'
to_email = sys.argv[1]
subject = "Appointment Confirmation"
appointment_number = sys.argv[2]
appointment_time = sys.argv[3]
service=sys.argv[4]
Cost=sys.argv[5]
bodyad = f"<html><body><h4>Hello,<br><br><b>A new appointment</b> has been booked with the following details:<br><br><b>Appointment Number: <strong>{appointment_number}</strong><br>Appointment Time: <strong>{appointment_time}</strong></b><br>Customer Email: <strong>{to_email}<br>For the service:{service}</strong><br><br>Please follow up with the customer to confirm the appointment.<br><br>Best regards,<br>Beauty Blush!!</body></html>"
map_link = 'google map link of your beauty parlour'

# Text email body with a more attractive format
body = f"<html><body><h5 style='font-family-sans-serif:Arial;'>Dear Customer,<br>Thank you for scheduling an appointment with Beauty Blush!!!<br><b>Your appointment number is: {appointment_number}<br>Appointment Time: {appointment_time}<br>For the Service:{service} of Price:{Cost}</b><br>We look forward to seeing you soon after Confirmation... Please feel free to contact us if you have any questions or concerns.<br>Address: <a href='{map_link}'>Location</a><br><br>Best Regards,<br>Beauty Blush Team....</body></html>"

msg = MIMEText(body, 'html')
msg['From'] = from_email
msg['To'] = to_email
msg['Subject'] = subject

# Send the email to the user
smtp_conn.sendmail(from_email, to_email, msg.as_string())

# Send the email to the admin
msg1 = MIMEText(bodyad, 'html')
msg1['From'] = from_email
msg1['To'] = from_email
msg1['Subject'] = subject
smtp_conn.sendmail(from_email, from_email, msg1.as_string())

smtp_conn.quit()
