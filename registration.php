<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="registration.html">
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="username" value="">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="email" value="">
        </div>
        <div>
        <INPUT TYPE="Radio" Name="Gender" Value="Male">Male
            <INPUT TYPE="Radio" Name="Gender" Value="Female">Female
            </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label>ID Number</label>
            <input type="text" name="id number" maxlength="11">
        </div>
        <div>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
         </div>
         <div class="input-group">
            <label>Address</label>
            <input type="text" name="Address">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        
        <p>
            Already a member? <a href="login.html">Sign in</a>

    </form>
 
</body>
</html>