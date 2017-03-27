<?php
/* Quiz 2
 * Steven Roomberg
 * 27 March 2017
 * */

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz 2</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<h1>Quiz 2</h1>
		<h3>Steven Roomberg</h3>
		<div class="container fluid">
			<div class="row">
				<div class="col-md-8">
					<?php
					if (isset($_COOKIE['user'])) {
						$user_info = json_decode($_COOKIE['user'], true);
						$first_name = $user_info['first-name'];
						$last_name = $user_info['last_name'];
						$email = $user_info['email'];
						?><p>Hi, <?php echo $first_name; ?>, you recently signed up with the email address: <?php echo $email; ?>, thank you!</p><?php
					} else {
						include 'welcome.php';
					}
					?>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/bootstrap.min.css"></script>
</html>