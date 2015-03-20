<?php

$url = 'index.php';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$url .= '?firstname=' . htmlspecialchars($_POST['firstname']) . '&lastname=' . htmlspecialchars($_POST['lastname']);
}

header('location: ' . $url);


