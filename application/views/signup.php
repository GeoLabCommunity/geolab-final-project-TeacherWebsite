<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
<?php echo validation_errors('<div class="error">', '</div>')  ?>
<form action="" method="POST">
	<p>
		<input type="text" name="first_name" placeholder="სახელი" value="">
	</p>
	<p>
		<input type="text" name="last_name" placeholder="გვარი" value="">
	</p>
	<p>
		<input type="email" name="email" placeholder="ელექტრონული ფოსტა" value="">
	</p>
	<p>
		<input type="password" name="password1" placeholder="პაროლი" value="">
	</p>
	<p>
		<input type="password" name="password2" placeholder="გაიმეორეთ პაროლი" value="">
	</p>
	<p>
		<input type="textarea" name="address" placeholder="შეიყვანეთ მისამართი" value="">
	</p>
	<p>
		<input type="text" name="phone" placeholder="ტელეფონის ნომერი" value="">
	</p>
	<p>
		<input type="textarea" name="aboutme" placeholder="ჩემს შესახებ" value="">
	</p>
	<p>
		დაბადების დღე <input type="date" name="bday">
	</p>
	<p>
		სქესი 
		<select>
			<option name="female" value="female">Female</option>
			<option name="male" value="male">Male</option>
		</select>
	</p>
	<p>
		ფოტო <input type="file" name="picture" accept="image/*">
	</p>
	<p>
		ქალაქი
		<select name="citys">
			<option value="choose">აირჩიეთ</option>
			<option value="tbilisi">თბილისი</option>
			<option value="rustai">რუსთავი</option>
			<option value="batumi">ბათუმი</option>
			<option value="telavi">თელავი</option>
		</select>
	</p>
	<button type="submit">რეგისტრაცია</button>
</form>
</body>
</html>