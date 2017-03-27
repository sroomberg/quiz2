<?php
$cookie_name = 'user';
if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['email'])) {
	$cookie_value = array(
		'first-name' => $_POST['first-name'], 
		'last-name' => $_POST['last-name'],
		'email' => $_POST['email']
	);
	setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
}
header('Location: index.php');
?>