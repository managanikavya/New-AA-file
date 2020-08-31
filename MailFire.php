<?php
    ini_set('display_errors', 1);
    $projectCode = $_REQUEST['projectCode'];
    $FirstName = $_REQUEST['FirstName'];
    $Email = $_REQUEST['Email'];
    $paymentLink = $_REQUEST['paymentLink'];
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer(true);
	$mail->isSMTP();                                   			// Set mailer to use SMTP
	$mail->Host = 'smtpout.secureserver.net';                   // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            			// Enable SMTP authentication
	$mail->Username = 'no-reply@authorassists.com';   	        // SMTP username
	$mail->Password = 'A@N02K!9';							    // SMTP password
	$mail->SMTPSecure = 'tls';                         			// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;
	$mail->setFrom('no-reply@authorassists.com');
	$mail->FromName = 'Authorassists Bill';
	$mail->addReplyTo("no-reply@authorassists.com");
	$mail->addAddress("soumee.m@cosmicstrands.com");
	// // $mail->addBCC('ascvasvas@gbfdh.com');
	// $mail->AddAttachment('invoiceFiles/'.$fileName);
	$mail->isHTML(true);
    $mail->Subject = "Invoice Details #".$projectCode;
    $mail->Body = "<p>Hi</p><p>Please find the attachment</p>";
    if(!$mail->send())
	{
		echo "error".$mail->ErrorInfo;
    }
    else
    {
        echo "Mail Send Successfully";
    }
?>