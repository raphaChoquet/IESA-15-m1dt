

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo date('d/m/Y'); ?>
	<form action="post.php" method="post">
		<input type="text" name="firstname" placeholder="Prénom">
		<input type="text" name="lastname" placeholder="Nom">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
