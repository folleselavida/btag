<?php

//error_reporting(E_ALL);
//error_reporting(E_STRICT);


//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
class mailer
{
	static function sendMail($m,$subject,$from,$replyTo,$to) {

		$mail             = new PHPMailer();
		
			
		$mail->IsSMTP(); // telling the class to use SMTP
		//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "216.70.93.35"; // sets the SMTP server
		$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "contacto_web@andrescarnederes.co"; // SMTP account username
		$mail->Password   = "Iridian%007";        // SMTP account password
		
		$mail->SetFrom($from, 'Andrés');
		
		$mail->AddReplyTo($replyTo,"Andrés");
		
		$mail->Subject    = $subject;
		
		$mail->AltBody    = ""; // optional, comment out and test
		
		$mail->MsgHTML($m);
		
		$address = $to;
		$mail->AddAddress($address, "");
		
		//$mail->AddAttachment("images/phpmailer.gif");      // attachment
		//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
		
		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  echo "Message sent!";
		}
		
	}
}

?>