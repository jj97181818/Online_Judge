<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OnlineJudge</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="header">
			<h2>OnlineJudge</h2>
		</div>
		<div id="navi">
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="problems.php">Problems</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div id="container" style="height: 600px">
			<div id="member">
				<h3>Login</h3>
				<br>
				<div id="article" style="background-color: silver;">
					<form action="#" method="post">
						<div style="width: 75%;margin: 0px auto;text-align: left;">
							<p>E-mail</p><input type="text" name="account_l" size="35">
							<p>Password</p><input type="password" name="password_l" size="35">
						</div>
						<br><br>
						<input type="submit" name="login" value="登入">
						<br><br>
					</form>
					<div style="width: 90%;margin: 0px auto">
						<div id="password_forgot"><a href="#">Forgot?</a></div>
						<div id="new_account"><a href="register.html">Register</a></div>
					</div>
					<div id="clear"></div>
				</div>
			</div>
		</div>
		<br>
		<div id="footer">
			<p style="padding: 0px 15px">&copy; 2018. All rights reserved.</p>
		</div>
	</body>
</html>