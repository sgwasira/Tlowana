<?php
/*
	*	Module/File: 	sendemail.php
	*	Purpose: 		send email page
	*	Developer: 		Shepherd Gwasira
	*	Date created:  	05/04/2014
	*	Comments:
	*/
	


if(isset($_POST['name']))
  {
    $contactname= $_POST['name'];
    $contactemail= $_POST['email'];
    $branch= $_POST['message'];
   	$contactnumber= $_POST['phone'];
   	$contactto = "info@tlowanaengineering.co.za";
    $contactfrom = $_POST['email'];
	$contactsubject = "TLOWANA: website";
   // $clientip = $_SERVER['REMOTE_ADDR'];

    //Use the cookies function to capture and store the following variables so that they may be passed on

    //setcookie("contactto", $contactto, time()+3600);
    //setcookie("contactfrom",  $contactfrom , time()+3600);

    

    $msg= "<h3>From: </h3>$contactfrom\r\n"."<br/>"."<br/>".
	$msg= "<h3> Name: </h3>".$contactname."<br/>".
	$msg= "<h3> Email: </h3>".$contactemail."<br/>".
	$msg= "<h3> Contact Number: </h3>".$contactcontactnumber."<br/>".
	$msg= "<h3> Message: </h3>".$_POST['message']."<br/>"."<br/>"."<br/>".
    $msg= "Please feel free to reply this message."."<br/>"."<br/>"."<br/>".
    $msg= "Thanks,"."<br/>"."<br/>"."Tlowana Consulting and Engineering (PTY) Ltd"."<br/>"."<br/>"."<br/>"."<br/>";

    //Begin of HTML message

    $message = <<<EOF
<html>
  <body>
    <div style='margin-top: 50px; margin-left: auto; margin-right: auto; padding: 0px; width: 700px;'>
        <font face='tahoma' size='2' >

        <p>$msg $contactto </p>

        <font face='tahoma' size='1' color='red'><i>
      </div>
  </body>
</html>
EOF;
   //End of Message
    $headers  = "From: $contactfrom\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]@yahoo.com[/email]";
    //$headers .= "Bcc: [email]@yahoo.com[/email]";
    
    // Now lets send the email and acknowledge that action to the user when it has been successful by   

    // directing them to the thank you page otherwise redirect them back to the contact page.
    
mail($contactto, $contactsubject, $message, $headers);
header('location:contact-us.php?send=1');

}
 else
 {
header('location:home.php');
exit(0);
}

?>