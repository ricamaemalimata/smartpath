<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="Logo">
        <div class="container2">
            <div class="title">
                 <h1>Admin Login</h1>
                <hr>
                <form method="post" action="process.php">

                    <div class="form-group">
                        <i class="fas fa-user user-icon"></i>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login">
                    </div>
                    <div class="checkbox">
                     <input type="checkbox" id="remember-me" name="remember">
                     <label for="remember-me">Remember Me</label>
                    </div>
                    <a href="forgot_password.php" class="pass">Forgot Password?</a>


                </form>
            </div>
        </div>
    </div>
</body>
</html>