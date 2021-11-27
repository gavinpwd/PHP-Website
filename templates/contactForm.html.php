<h2>If you have any questions, we would love to hear from you.</h2>
		
<form action="contactUs.php" method="post">
<fieldset>
	<legend>Please complete the following information.</legend>
	<p>
	<label for="firstName">First name *</label>
	<input type="text" name="firstName" id="firstName" value="">
	</p>

	<p>
	<label for="lastName">Last name *</label>
	<input type="text" name="lastName" id="lastName" value="">
	</p>

	<p>
	<label for="phone">Contact Number</label>
	<input type="text" name="phone" id="phone" value="">
	</p>

	<p>
	<label for="email">Email *</label>
	<input type="email" name="email" id="email" value="">
	</p>

	<p>
	<label for="comments">Questions?</label>
	<textarea name="comments" id="comments" rows="4" cols="50"></textarea>
	</p>

</fieldset>

	<p>
	<input type="reset" name="resetButton" id="resetButton" value="Reset Form">
	<input type="submit" name="submitButton" id="submitButton" value="Submit">
	
	</p>

</form>