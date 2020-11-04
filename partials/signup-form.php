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
    <div class="signup-error">
        <div class="validation-error">quasi provident nesciunt ut adipisci atque.!</div>
    </div>
    <div id="form-title">
        <b>Registration</b>
    </div>
    <form id="form" action="signup.php" method="post">
        
        <br><input id="username" type="text" name="username" placeholder="Username" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        
        <br><input type="text" name="email" placeholder="Email ID" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        
        <br><input type="password" name="password" placeholder="Password" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        
        <br><input type="password" name="confirm_password" placeholder="Confirm password" autocomplete=off required>
        <!-- <div class="validation-error">Lorem, ipsum dolor sit amet consectetur adipisicing elit.quo  dolore laborum. Ipsam voluptatibus ipsa repellendus illo, possimus aliquid in quasi provident nesciunt ut adipisci atque. Voluptas!</div> -->
        

        <br><input type="submit" id="submit" name="submit" value="Sign up">

        <div class="login">
            Have an account? <a href="login.php">Login</a>
        </div>
    </form>
</div>


    
<!-- </body>
</html> -->