<?php include("functions.php") ?>
<?php 
    list($validity, $con) = authenticate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="resources/favicon.png" type="image/png">
    
    <!-- Added css files here -->

    <link rel="stylesheet" href="css/outer-header.css">
    <link rel="stylesheet" href="css/login-form.css">
    <link rel="stylesheet" href="css/message-area.css">
</head>
<body>

    <!-- included the partials of the page here -->
    
    <?php include("partials/outer-header.php") ?>
    <?php include("partials/login-form.php") ?>

    <?php include("partials/message-area-top.php"); ?>
    <?php
        if($validity === 0){
            echo $con;  //print error
        }
        else if($validity === 1){
            echo "user authenticated";
            header("Location: show.php");
        }
    ?>    
    <?php include("partials/message-area-bottom.php"); ?>
</body>
</html>





