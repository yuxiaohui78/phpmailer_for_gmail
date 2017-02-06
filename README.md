# phpmailer_for_gmail

Send email through gmail with phpmailer


#2.	How to set gmail for phpmailer

###1.	Go to Sign-in & security -> Connected apps & sites

###2.	Enable “Allow less secure apps”

###3.	Go to Sign-in & security -> Signing in to Google

     Enable “2-Step Verification”

###4.	After step 3. You will receive an email for setting the 2-step verification.

###5.	Then go to the following link to generate an app password

>https://security.google.com/settings/security/apppasswords

Then you can use this app password to connect to smtp server of Gmail with phpMailer.
               
The username is your email address, the password is the app password in PHPMailer.

#Reference
>https://github.com/PHPMailer/PHPMailer

>http://stackoverflow.com/questions/16048347/send-email-using-gmail-smtp-server-through-php-mailer
               
