<html>
	<head>
		<title>đăng ký thành viên</title>
		<link href="Style.css" rel="stylesheet">
	</head>
	<body>
	<?php include "xuly.php" ?>
	<div class="form">

	<h1>Đăng ký thành viên</h1>
	<form action="register.php" method="post">
			<input type="text" name="username" placeholder="Tên đăng nhập" required />
			<input type="password"  name="pass" placeholder="Password" required />
			<input type="text"  name="name" placeholder="Họ và Tên" required />
			<input type="text"  name="email" placeholder="Email" required />
			<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng ký"></td>
			<td colspan="2" align="center"><input type="reset" value="Nhập lại" />
			<p>Already have an account? <a href="login.php">Login here</a>.
	</form>
	</body>
	</html>