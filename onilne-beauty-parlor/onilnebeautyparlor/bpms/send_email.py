# '''import smtplib
# #SERVER = "localhost"

# FROM = 'layaofficial412@gmail.com'

# TO = ["kokkullaya@gmail.com"] # must be a list

# SUBJECT = "Hello!"

# TEXT = "This message was sent with Python's smtplib."

# # Prepare actual message

# message = """\
# From: %s
# To: %s
# Subject: %s

# %s
# """ % (FROM, ", ".join(TO), SUBJECT, TEXT)

# # Send the mail

# server = smtplib.SMTP('smtp.elasticemail.com')
# server.sendmail(FROM, TO, message)
# server.quit()


# '''
# import smtplib
# from email.mime.text import MIMEText
# import sys

# smtp_server = 'smtp.elasticemail.com'
# smtp_port = 2525
# smtp_username = 'layaofficial412@gmail.com'
# smtp_password = '129E751B3D4916526273DF3F1587DEB9899C'

# # Create a secure SSL/TLS connection to the SMTP server
# smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
# smtp_conn.starttls()

# # Log in to your email account
# smtp_conn.login(smtp_username, smtp_password)
# from_email = 'layaofficial412@gmail.com'
# bodyad="New appointment number is",sys.argv[3]," on Time:",sys.argv[4]," Plz confirm the appointment"
# to_email = sys.argv[1]
# subject = sys.argv[2]
# body = "Your new appointment number is: " ,sys.argv[3],"on Time:",sys.argv[4],"We'll contact you soon for confirmation  address is", "<a href='https://www.google.com/maps/place/Ankita+Beauty+Parlour/@17.655625,75.944923,16z/data=!4m6!3m5!1s0x3bc5db8602f8a28b:0x1c4b68a7e0dab131!8m2!3d17.6556248!4d75.9449234!16s%2Fg%2F11h4bd4g2p?hl=en-US'>Location</a>"
# # """
# # <html>
# #   <body>
# #     <p>This is an <b>HTML</b> email sent from Python using the Gmail SMTP server.</p>
# #     <<div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;'><iframe style='height:100%;width:100%;border:0;' frameborder='0' src='https://www.google.com/maps/embed/v1/place?q=Ankita+Beauty+Parlour,+Sunil+Nagar,+Solapur,+Maharashtra,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8'></iframe></div><a class='our-googlemap-code' href='https://www.bootstrapskins.com/themes' id='grab-map-info'>premium bootstrap themes</a><style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
# #   </body>
# # </html>
# # """
# msg = f"From: {from_email}\nTo: {to_email}\nSubject: {subject}\n\n{body}"
# # html_message = MIMEText(body, 'html')
# msg1=f"From: {from_email}\nTo: {from_email}\nSubject: {subject}\n\n{bodyad}"
# #to user
# smtp_conn.sendmail(from_email, to_email, msg)
# #to admin
# smtp_conn.sendmail(from_email, from_email,  msg1)

# smtp_conn.quit()
import smtplib
from email.mime.text import MIMEText
import sys

smtp_server = 'smtp.elasticemail.com'
smtp_port = 2525
smtp_username = 'layaofficial412@gmail.com'
smtp_password = '129E751B3D4916526273DF3F1587DEB9899C'

# Create a secure SSL/TLS connection to the SMTP server
smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
smtp_conn.starttls()

# Log in to your email account
smtp_conn.login(smtp_username, smtp_password)
from_email = 'Beauty Blush  <layaofficial412@gmail.com>'
to_email = sys.argv[1]
subject = "Appointment Confirmation"
appointment_number = sys.argv[2]
appointment_time = sys.argv[3]
service=sys.argv[4]
Cost=sys.argv[5]
bodyad = f"<html><body><h4>Hello,<br><br><b>A new appointment</b> has been booked with the following details:<br><br><b>Appointment Number: <strong>{appointment_number}</strong><br>Appointment Time: <strong>{appointment_time}</strong></b><br>Customer Email: <strong>{to_email}<br>For the service:{service}</strong><br><br>Please follow up with the customer to confirm the appointment.<br><br>Best regards,<br>Beauty Blush!!</body></html>"
map_link = 'https://www.google.com/maps/place/Ankita+Beauty+Parlour/@17.655625,75.944923,16z/data=!4m6!3m5!1s0x3bc5db8602f8a28b:0x1c4b68a7e0dab131!8m2!3d17.6556248!4d75.9449234!16s%2Fg%2F11h4bd4g2p?hl=en-US'

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


# import smtplib
# from email.mime.text import MIMEText
# import sys

# smtp_server = 'smtp.elasticemail.com'
# smtp_port = 2525
# smtp_username = 'layaofficial412@gmail.com'
# smtp_password = '129E751B3D4916526273DF3F1587DEB9899C'

# # Create a secure SSL/TLS connection to the SMTP server
# smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
# smtp_conn.starttls()

# # Log in to your email account
# smtp_conn.login(smtp_username, smtp_password)

# from_email = 'layaofficial412@gmail.com'
# to_email = sys.argv[1]
# # subject = 
# #
# subject = "The Mail is to check dual message"

# if to_email == 'layaofficial412@gmail.com':
#     body = "This is the message for the admin."
# else:
#     



# smtp_conn.quit()

# import smtplib
# from email.mime.text import MIMEText
# import sys

# smtp_server = 'smtp.elasticemail.com'
# smtp_port = 2525
# smtp_username = 'layaofficial412@gmail.com'
# smtp_password = '129E751B3D4916526273DF3F1587DEB9899C'

# # Create a secure SSL/TLS connection to the SMTP server
# smtp_conn = smtplib.SMTP(smtp_server, smtp_port)
# smtp_conn.starttls()

# # Log in to your email account
# smtp_conn.login(smtp_username, smtp_password)

# from_email = 'layaofficial412@gmail.com'
# to_email = sys.argv[1]
# subject = sys.argv[2]
# body = "Your new appointment number is: " ,sys.argv[3],"on Time:",sys.argv[4],"We'll contact you soon for confirmation"

# html = '''
# <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
#     <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;">
#         <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Ankita+Beauty+Parlour,+Sunil+Nagar,+Solapur,+Maharashtra,+India&key=<API_KEY>"></iframe>
#     </div>
#     <a class="our-googlemap-code" href="https://www.bootstrapskins.com/themes" id="grab-map-info">premium bootstrap themes</a>
#     <style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style>
# </div>
# '''

# msg = MIMEText(html, 'html')
# msg['From'] = from_email
# msg['To'] = to_email
# msg['Subject'] = subject

# #to user
# smtp_conn.sendmail(from_email, to_email, msg.as_string())

# #to admin
# msg['To'] = from_email
# smtp_conn.sendmail(from_email, from_email, msg.as_string())

# smtp_conn.quit()
