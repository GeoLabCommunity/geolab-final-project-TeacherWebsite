<!DOCTYPE html>
<html>
<head>
	<title>ავტორიზაცია | <?php echo $title;  ?></title>
</head>
<body>
<form action="profile.php" method="POST">
	<p>
		<input type="text" name="username" placeholder="მომხმარებლის სახელი">
	</p>
	<p>
		<input type="password" name="password" placeholder="პაროლი">
	</p>
	<p>
		<button type="subbmit">ავტორიზაცია</button>
	</p>
</form>
</body>
</html>