<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/test-form.css">
</head>
<body> -->

<div id="form-wrap">
    <div class="login-error">
        quasi provident nesciunt ut adipisci atque.!
    </div>
    <div id="form-title">
        <b>Login</b>
    </div>
    <form id="form" action="login.php" method="post">
        
        <br><input type="text" name="username" placeholder="Username" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        
        <br><input type="password" name="password" placeholder="Password" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        
        <br><input type="submit" id="submit" name="submit" value="Login">

        <div class="forgot-password">
            <a href="recover.php">Forgot password</a>
        </div>

        <div class="signup">
            Do not have an account? <a href="signup.php">Register</a>
        </div>
    </form>
</div>
    
<!-- </body>
</html> -->