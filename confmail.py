#!C:\Users\Anirudh\AppData\Local\Programs\Python\Python36-32\python.exe

import smtplib
import sys
content ="your confirmation is successfully done now go and visit to www.gjrtravels.tk for loging in "
mail=smtplib.SMTP('smtp.gmail.com',587)
mail.ehlo()
mail.starttls()
mail.login('saikiranreddygangidi@gmail.com','saikiran0074')
mail.sendmail('saikiranreddygangidi@gmail.com',sys.argv[1],content)
mail.close()
print('sent')
print(sys.argv[1])
