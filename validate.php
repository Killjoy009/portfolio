
<?php
	$name = ""; // Sender Name
	$email = ""; // Sender's Email ID
	$message = ""; // Sender's Message
	$error_name = "";
	$error_email = "";
	$error_msg = "";
	$successMessage = ""; // on submitting form below function will execute.
	if (isset($_POST['submit'])) { // Checking  null values on message.
		if (empty($_POST["name"])) {
			$error_name = "<span class='cd-error-message is-visible'>Name required</span>";
		}
		else {
			$name = test_input($_POST["name"]); // check name  only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$error_name = "<span class='cd-error-message is-visible'>Only letters and whitespace allowed!</span>";
			}
		}
		if (empty($_POST["email"])) {
			$error_email = "<span class='cd-error-message is-visible'>Email required</span>";
		}
		else {
			$email = test_input($_POST["email"]);
		} // Checking null values in email
		if (empty($_POST["message"])) {
			$error_msg = "<span class='cd-error-message is-visible'>Message required</span>";
		}
		else {
			$message = test_input($_POST["message"]);
		} // Checking null values inmessage
		if (!($name == '') && !($email == '') && !($message == "")) {
			if (preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$email)) {
				$header = $name . "<" . $email . ">";
				$headers = "FormGet.com"; /* Let's prepare the message for the e-mail */
				$msg = "Hello ! $name Thank you....! for contacting me
				Name = $name
				E-mail = $email
				Message = $message
				This is a Contact Confirmation mail. We Will contact You as soon as possible.";
				$msg1 = " $name Contacted Us. Hereis some information about $name.
				Name: $name
				E-mail = $email
				Message = $message "; /* Send the message using mail() function */

				if (mail($email, $headers, $msg) && mail("crudajohnrobert@yahoo.com", $header, $msg1)) {
					$successMessage = "Message sent succesfully";
				}
			}
			else {
				$error_email = "<span class='cd-error-message is-visible'>Invalid email</span>";
			}
		}
	} // Function for filtering input values.function test_input($data)
	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
 ?>