<?php

		//mail variables
		$full_Name = $_REQUEST['full_Name'];
		$age = $_REQUEST['age'];
		$contactEmail = $_REQUEST['contactEmail'];
		$phone = $_REQUEST['phone'];

		//email send information

		//subject line
		$subject = "New Registration Submission From " .$full_Name;

		//email headers
		$headers = "From: ".$full_Name." <".$contactEmail.">\r\n";

		//email body
		$mailBody = "

		Name: ".$full_Name."
		Age: ".$age."
		Phone: ".$phone."
		Email: ".$contactEmail;

		//send to
		$mailTo = "zmazu755@mail.endicott.edu";
		$mailTo_2 = "rolsson2717@gmail.com"

		//send the email
		mail($mailTo, $subject, $mailBody, $headers);
		mail($mailTo_2, $subject, $mailBody, $headers);

		//show thank you page
		print "<META http-equiv='REFRESH' content='0;URL=thanks.html'>";
		

?>