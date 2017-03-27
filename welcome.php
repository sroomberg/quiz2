<?php
if (isset($_COOKIE['user'])) {
	$user_info = json_decode($_COOKIE['user'], true);
	$first_name = $user_info['first-name'];
	$last_name = $user_info['last_name'];
	$email = $user_info['email'];
	?>
	<p>Hi, <?php echo $first_name; ?>, you recently signed up with the email address: <?php echo $email; ?>, thank you!</p>
	<?php
}
else { ?>
	<form name="user-info" role="form" method="post" action="register.php">
		<div class="row">
			<div class="col-md-4">
				First Name:
			</div>
			<div class="col-md-6">
				<input type="text" name="first-name">
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				Last Name:
			</div>
			<div class="col-md-6">
				<input type="text" name="last-name">
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				Email:
			</div>
			<div class="col-md-6">
				<input type="text" name="email">
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<input type="submit" name="submit" value="Submit">
			</div>
		</div>
	</form>
	<?php
} ?>