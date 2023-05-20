<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Signup Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header>
        <div class="inner">
            <div class="logo">
                <div>
                   
                    <h2 class="h">Portal</h2>
                    
                </div>
            </div>

            <nav>
                
            <li><span><a href="">Home</a></span></li>
            <li><span><a href="">About</a></span></li>
            <li><span><a href="">Contact</a></span></li>
            <li><span><a href="">Blog</a></span></li>
                
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="box">
            <h2>Signup</h2>
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
             
                <button class="signup_button" type="submit">Create Account</button>
                <div class="login_link"><a href="login.php">Already have an Account ?</a></div>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <h3>user management</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic modi quod exercitationem aliquam dolore animi sunt molestiae sequi repellat eligendi sint amet, nobis quis, quae placeat minima obcaecati adipisci delectus.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">user mangement</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Blog</a></li>
                      </ul>
                    </div>
        </div>

    </footer>
</body>
</html>