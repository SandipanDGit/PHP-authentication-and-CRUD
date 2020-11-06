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
    <div id="signup-error"></div>
    <div id="form-title">
        <b>Registration</b>
    </div>
    <form id="form" action="signup.php" method="post">
        
        <br><input id="username" type="text" name="username" placeholder="Username" autocomplete=off required>
        <div class="error-message invalid-username">Username must be 4 characters long and<br>should contain only underscore, letters or digits</div>
        
        <br><input id="email" type="text" name="email" placeholder="Email ID" autocomplete=off required>
        <div class="error-message invalid-email">Invalid email format</div>
        
        <br><input id="password" type="password" name="password" placeholder="Password" autocomplete=off required>
        <div class="error-message invalid-password">Password must contain an uppercase,<br> a lowercase, a digit and a symbol</div>
        
        <br><input id="confirm-password" type="password" name="confirm-password" placeholder="Confirm password" autocomplete=off required>
        <div class="error-message invalid-confirm-password">Password did not match</div>

        <br><input id="submit-button" type="submit" name="submit_form" value="Sign up">

        <div class="login">
            Have an account? <a href="login.php">Login</a>
        </div>
    </form>
</div>


    
<!-- </body>
</html> -->