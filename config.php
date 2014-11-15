<?php

define('DB_NAME', 'Test123');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Pass@123');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!db_selected) {
	die('Cannot use ' . DB_NAME . ': ' . mysql_error());
}

echo 'Connected Successfully';

$nameValue = $_POST['Name'];
$emailValue = $_POST['Email'];

$sql = "INSERT INTO Test123 (Name, Email) VALUES ('$nameValue', '$emailValue')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

?>