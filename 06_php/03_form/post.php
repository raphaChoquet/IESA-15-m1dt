<?php

$url = 'index.php';

if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
	$url .= '?firstname=' . htmlspecialchars($_POST['firstname']) . '&lastname=' . htmlspecialchars($_POST['lastname']);
}

header('location: ' . $url);