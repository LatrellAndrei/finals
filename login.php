<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="registration.html">
        <div class="input-group">
            <label>ID Number</label>
            <input type="text" name="id number" maxlength="11">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login">Login</button>
        </div>
        <p>
            Not yet a member? <a href="index.php">Sign up</a>
    </form>
       
</body>
</html>