<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if ($name == "" OR $email == "" OR $message == "") {
		echo "You must enter a name, email and message.";
		exit;
	}

	// prevent email injection attacks by looking for malicious values
	foreach($_POST as $ $value) {
		if (stripos($value, 'Content-Type:') !== FALSE){
			echo "There was a problem with the infomation you entered.";
			exit;
		}
	}

	if ($_POST["address"] != "") {
		echo "There was a problem with the infomation you entered.";
	}

	require_once("include/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	if (!$mail->ValidateAddress($email)){
		echo "You must enter a valid email address";
		exit;
	}

	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message;
	$mail->SetFrom($email, $name);
	$address = "craig.kuriger@icloud.com";
	$mail->AddAddress($address, "Leapfrog");

	$mail->Subject    = "Hello From Leapfrog | " . $name;
	$mail->MsgHTML($email_body);

	if(!$mail->Send()) {
	  echo "Error: Mail not sent" . $mail->ErrorInfo;
	  exit;
	}

	header("Location: contact.php?status=thanks");
	exit;
}
?><?php 

$pageTitle = "Contact LeapFrog";
$section = "contact";

include('include/header.php'); 

?>

	<div class="container">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<h1>Contact</h1>
				<?php if(isset($_GET["status"]) AND $_GET["status"] == thanks) {?>
					<p>Thanks, We'll be in touch</p>
				<?php } else { ?>
					<p>Complete the form to contact us</p>
					<form method="post" action="contact.php">
						<table>
							<tr>
								<th>
									<label for="name">Name</label>
								</th>
								<td>
									<input type="text" name="name" id="name">
								</td>
							</tr>
							<tr>
								<th>
									<label for="email">Email</label>
								</th>
								<td>
									<input type="text" name="email" id="email">
								</td>
							</tr>
							<tr>
								<th>
									<label for="message">Message</label>
								</th>
								<td>
									<textarea type="text" name="message" id="message"></textarea>
								</td>
							</tr>
							<!-- Check for robots -->
							<tr style="display: none;">
								<th>
									<label for="address">Address</label>
								</th>
								<td>
									<input type="text" name="address" id="address">
									<p>Humans leave this field blank</p>
								</td>
							</tr>
							<tr>
						</table>
						<input class="btn btn-success" type="submit" value="Send">
					</form>
				<?php } ?>
				</div>
				<div class="col-md-6">
					<img class="product-image" src="img/froggreen.png">
				</div>
			</div>
		</div>

<?php include('include/footer.php'); ?>