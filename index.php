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
            <input type="text" name="username" value="" placeholder ="Lebron Raymone">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="email" value="" placeholder ="James">
        </div>
        <div>
        <INPUT TYPE="Radio" Name="Gender" Value="Male">Male
            <INPUT TYPE="Radio" Name="Gender" Value="Female">Female
            </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="" placeholder ="lebronjames@gmail.com">
        </div>
		 <div class="input-group">
            <label>Cellphone Number</label>
            <input type="text" name="cell number" placeholder ="09001002921" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
        </div>
        <div class="input-group">
            <label>ID Number</label>
            <input type="text" name="id number"placeholder ="19-2191-639" maxlength="11" oninput ="this.value = this.value.replace(/[^0-9-]/g,'').replace(/(\..*)\./g,'$1');">
        </div>
        <div>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
         </div>
         <div class="input-group">
            <label>Address</label>
            <input type="text" name="Address">
        </div>
     <form action="/action_page.php">
  <label for="cars">Choose a Course:</label>
  <select name="courses" id="course">
    <option value="BSIT">Bachelor of Science In Information Technology</option>
    <option value="BSCS">Bachelor of Science In Computer Science</option>
    <option value="BAPS">Bachelor of Arts in Political Science</option>
    <option value="BSCPE">Bachelor of Science in Computer Engineering</option>
	<option value="BSAcc">Bachelor of Science in Accountancy</option>
	<option value="BSArchi">Bachelor of Science in Architecture</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">

 
</body>
</html>