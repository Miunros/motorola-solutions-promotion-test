<?php  

if (isset($_post['submit'])) {
	# code...
	$name = $_post['name'];
	$companyname = $_post['companyname'];
	$mailFrom = $_post['mail'];
	$companyphone = $_post['companyphone'];
	$mobilephone = $_post['mobile-phone'];
	$agreement = $_post['agreement'];
	$dealer = $_post['dealer'];

	$mailTo = "16g202marketing@chci.com.tw";
	$headers = "From: Motorola Solutions Promotion ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$companyname;


	mail($mailTo, $companyphone, $mobilephone, $dealer, $txt, $headers);
	header("Location: index.php?mailsend");
?>