<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div id="login-container">
        <form method="post" id="login-form">

		    <div id="logo-container">
                <img src="../Logo/eposte.png" alt="Logo" id="logo">
            </div>

			<div class="all-input-group">
            	<h2 class="h2-login">Log In</h2>
				<div class="input-group">
					<label for="email">Email</label>
					<input id="email" type="text" name="user_name">
				</div>
				<div class="input-group">
					<label for="password">Password</label>
					<input id="password" type="password" name="password">
				</div>
			
			<div>
				<button id="login-btn" type="submit">Get Started</button>
				<p class="signup-link">Don't have account? <a href="signup.php">Sign up</a></p>
			</div>
			</div>
        </form>
    </div>
</body>
</html>
