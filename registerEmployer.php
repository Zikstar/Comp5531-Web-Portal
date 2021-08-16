<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Register | Web Portal</title>
    <link rel="stylesheet" href="main.css" type="text/css" >
</head>
<body>
<form class="authForm" action="backend/employer_register_action.php" method="post">
        <h1>Register Employer</h1>
        <label for="username"><b>Username</b></label>
        <input type="text"  name="username" required>

        <label for="email"><b>Email Address</b></label>
        <input type="text" name="email" required>

        <label for="address"><b>Address</b></label>
        <input type="text" name="address" required>

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" name="phone" required>


        <label for="emp_name"><b>Employer Name</b></label>
        <input type="text" name="emp_name" required>


        <label for="desc"><b>Description</b></label>
        <input type="text" name="desc">


        <label for="psw"><b>Password</b></label>
        <input type="password" name="psw" required>


        <label for="con_psw"><b>Confirm Password</b></label>
        <input type="password" name="con_psw" required>

        <b>Select your membership level</b>
        <br>
        <input type="radio" id="html" name="membership" value="prime">
        <label for="html">Prime</label><br>
        <input type="radio" id="css" name="membership" value="gold">
        <label for="css">Gold</label><br>

        <button class="loginBtn" type="submit">Register</button>

</form>

</body>
</html>