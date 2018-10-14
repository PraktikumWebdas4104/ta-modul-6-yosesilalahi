<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action=" ">
	<table>
	0<h1>silahkan login</h1>
	<tr>
		<td>username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
</table>
	<br>
		<input type="submit" name="submit" value="sended"><br>
</form>
</body>
</html>
<?php 
		if (isset($_POST['submit'])) {
			# code...
			include 'halaman-awal.php';
		}
	 ?>
