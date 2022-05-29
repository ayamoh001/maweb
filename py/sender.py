import smtplib
import sys

me = 'ayamoh001@gmail.com'
client = sys.argv[1]
fname=sys.argv[2]
lname=sys.argv[3]
the_order=sys.argv[4]

message = f"""From: From Mohamed Ayaou
To: To {fname} {lname}
Subject: Your order to design a {the_order} was successfully received, and it will be done as fast as possible. If you want to stay connected with the its progress or to give more details or even to edit your order you can just contact me on Whatsapp: +212-608-671-716.

The email was sent by py-bot.
"""

try:     
    server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    server.login('ayamoh001@gmail.com', 'qwertyuiop.369')
    server.sendmail('ayamoh001@gmail.com',client,message)
    
    print("Successfully sent email")
except:
    print("An error happend and the message was not sent.")

