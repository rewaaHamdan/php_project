<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpDate Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
        <div class="box">
            <h2>UpDate</h2>
            <form action="#">

                <div class="input_box">
                    <input type="text" class="name" required>
                    <label>Username</label>
                </div>

                <div class="input_box">
                    <input type="text" class="password" required>
                    <label>Password</label>
                    <div class="password_checkbox"><input type="checkbox"><p>Show Password</p></div>
                </div>

                <div class="input_box">
                    <input type="text" class="email" required>
                    <label>Email</label>
                </div><br>
        <div class="role">
       <label for="role" >Role : </label>
		<input type="radio" id="male" name="gender" value="user" required>
		<label for="admin">admin</label>
		<input type="radio" id="female" name="gender" value="user">
		<label for="user">user</label>
</div>
             
                <button class="signup_button" type="submit">Up Date</button>
                <button class="signup_button" type="submit"><a href="display.php" style="text-decoration: none;"> Back</a></button>
                <!-- <div class="login_link"><a href="login.php">Already have an Account ?</a></div> -->
            </form>
        </div>
    </div>
</body>
</html>