		<?php include 'validate.php'; ?>

			<form class="cd-form floating-labels" id="contact" name="contactform" method="post" action="index.php">
				<fieldset>
					<input class="user input" type="text" name="name" id="cd-name" placeholder="Your name" maxlength="80" value="">
					<?php echo $error_name; ?> 
				</fieldset>

				<fieldset>
					<input class="email error input" type="text" name="email" id="cd-email" placeholder="Your email" maxlength="80" value="">
					<?php echo $error_email; ?>
				</fieldset>

				<fieldset>
      				<textarea class="message input" name="message" id="cd-textarea" placeholder="Message" value=""></textarea>
      				<?php echo $error_msg; ?>
				</fieldset>

				<fieldset>
		      		<input type="submit" value="Send" name="submit">
				</fieldset>
			</form>