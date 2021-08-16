<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>

	<div class="container"; align="center">
		<div class="logo">
			<img src="assets/img/logo/logo.png" alt="Logo">
		</div>
		<br>
		<h1>Welcome Back</h1>
		<p>Don't miss your next opportunity. Our healthy pursuit to a better life. Sin in to stay updated on a market where farmers can sell their harvest at a fair price & customers can deal affordable,natural way...</p>
		<form>
			<div>
				<label for="username" id="lbluser">Email</label>
				<input type="text" name="username" id="username">
			</div>
			<div>
				<label for="password" id="lblpass">Password</label>
				<input type="password" name="password" id="password" minlength="8">
				<span id="show">Show</span>
			</div>
			<div>
				<input type=button onClick="parent.location='customer login.html'"
				value="Sign In Customer">
				<h1> OR </h1>
				<input type=button onClick="parent.location='farmer login.html'"
				value="Sign In Farmer">
			</div>
			<div>
				<a href="#" class="button">Cancel</a>
			</div>
			<div>
				<a href="#">Forgot Password?</a>
			</div>

		</form>
	</div> 
	<script src="js/script.js"></script>
</body>
</html>