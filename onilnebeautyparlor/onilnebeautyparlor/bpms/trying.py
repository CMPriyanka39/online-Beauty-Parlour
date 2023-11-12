import smtplib
from email.mime.text import MIMEText

sender_email = "layaofficial412@gmail.com"
sender_password = "129E751B3D4916526273DF3F1587DEB9899C"
recipient_email = "kokkullaya@gmail.com"
subject = "location is "
body = """
<html>
  <body>
    <p>This is an <b>HTML</b> email sent from Python using the Gmail SMTP server.</p>
    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Ankita+Beauty+Parlour,+Sunil+Nagar,+Solapur,+Maharashtra,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="our-googlemap-code" href="https://www.bootstrapskins.com/themes" id="grab-map-info">premium bootstrap themes</a><style>#g-mapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
  </body>
</html>
"""
html_message = MIMEText(body, 'html')
html_message['Subject'] = subject
html_message['From'] = sender_email
html_message['To'] = recipient_email

server = smtplib.SMTP_SSL('smtp.elasticemail.com', 2525)
server.login(sender_email, sender_password)
server.sendmail(sender_email, recipient_email, html_message.as_string())
server.quit()