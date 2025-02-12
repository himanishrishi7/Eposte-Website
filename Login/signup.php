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
            <h2 class="h2-login">Sign Up</h2>
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="text" name="user_name">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
            </div>

			<div class="input-group">
                <label for="re-password">Re-enter Password</label>
                <input id="re-password" type="password" name="re-password">
            </div>
			
            <button id="login-btn" type="submit">Sign up</button>
           <p class="signup-link">Already have an account? <a href="login.php">Log in</a></p>
		   </div>
        </form>
    </div>
</body>
</html>
