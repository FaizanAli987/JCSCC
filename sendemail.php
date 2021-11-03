<?php
/**************************************
NAME: [PUT YOUR NAME HERE]
DATE: [PUT DATE HERE]
DESC: [WRITE WHAT THIS FILE DOES HERE]
***************************************/

//IMPORTANT - change this to the email you made from cPanel
$emailFrom = $_POST['txtEmail']; //Email will show that it's from this address

//IMPORTANT - CHANGE THIS TO the correct email corresponding to your class block before submiting
// 11AM   - 11am@lingoqueen.ca
// 1PM  - 1pm@lingoqueen.ca

//IMPORTANT - Use your email for testing purposes
$emailTo = "jcsccfana@yahoo.com";

//POST variables
$subject = Trim(stripslashes($_POST['txtSubject'])); //checks the HTTP request body for something named 'txtSubject' and stores the value inside the PHP vairable
$name = Trim(stripslashes($_POST['txtName']));
$phone = Trim(stripslashes($_POST['txtPhone'])); //if you didn't include an input for a phone number you can delete all references to it
$email = Trim(stripslashes($_POST['txtEmail']));
$message = Trim(stripslashes($_POST['txtMessage']));

//create the email body
// .= means add on to the current value of the varaible. a single = will overwrite the value.
// .  means add text values together (concatenation)
// \r\n referred to as escape characters \r signifies a carriage return, while \n signifies a new line.
// when used together it actually does something else, called an End of Line Character, moves cursor down and to the beginning of the next line.
$emailBody = "Name: " . $name;
$emailBody .= "\n";
$emailBody .= "Email: " . $email;
$emailBody .= "\n";
$emailBody .= "Message: " . wordwrap($message, 70, "\n"); //word wrap means
                                                          //that any message
                                                           //longer than 70
                                                           //characters will
                                                           //be seperated in
                                                           //new lines. It
                                                           //looks like this!
                                                           //Feel free to adjust the size or remove the wordwrap entirely.


$headers = "From: " . $emailFrom . "\r\n";                //The email address that shows when it comes into your inbox.
$headers .= "Reply-To: " . $email . "\r\n";               //Set the reply email to the email that the user entered, so you can easily reply to them.


//attempt to send the email
$success = mail($emailTo, $subject, $emailBody, $headers);
//$success will now either be set to true or false depending on if the email was accepted for delivery
//echo $success;
//exit();
// redirect to success page
if ($success == true){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
//or else redirect to an error page
  print "<meta http-equiv=\"refresh\" content=\"0;URL=emailerror.html\">";
}
?>
