<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	echo htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']);
}
?>
</body>
</html>
<?php


