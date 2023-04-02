<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="userId">User ID:</label>
		<input type="text" id="userId" name="userId" pattern="[a-zA-Z0-9]{5,7}" required>
		<small>(5-7 characters, alphanumeric only)</small>
		<br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" pattern=".{7,12}" required>
		<small>(7-12 characters)</small>
		<br><br>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" pattern="[a-zA-Z ]+" required>
		<small>(letters and spaces only)</small>
		<br><br>

		<label for="address">Address:</label>
		<input type="text" id="address" name="address" required>
		<br><br>

		<label for="country">Country:</label>
		<input type="text" id="country" name="country" required>
		<br><br>

		<label for="zipCode">Zip Code:</label>
		<input type="text" id="zipCode" name="zipCode" pattern="[0-9]{4,6}" required>
		<small>(4-6 digits only)</small>
		<br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<br><br>

		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male" required>
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br><br>

		<label for="language">Language:</label>
		<select id="language" name="language" required>
			<option value="">--Please select--</option>
			<option value="english">English</option>
			<option value="french">French</option>
			<option value="german">German</option>
		</select>
		<br><br>

		<label for="about">About:</label>
		<textarea id="about" name="about" rows="4" cols="50" required></textarea>
		<br><br>

		<input type="submit" value="Submit">
	</form>
    </body>
</html>
