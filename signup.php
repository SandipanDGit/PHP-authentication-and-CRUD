<?php include("functions.php") ?>
<?php 
    list($validity, $error) = register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="resources/favicon.png" type="image/png">
    
    <!-- Added css files here -->

    <link rel="stylesheet" href="css/outer-header.css">
    <link rel="stylesheet" href="css/signup-form.css">
    <link rel="stylesheet" href="css/message-area.css">
</head>
<body>

    <!-- included the partials of the page here -->
    
    <?php include("partials/outer-header.php") ?>

    <?php include("partials/signup-form.php") ?>

    <?php include("partials/message-area-top.php"); ?> 
    <?php
        if($validity == 0){
            echo $error;
        }
        else if($validity === 1){
            echo "user registered";
        }
    ?>
    <?php include("partials/message-area-bottom.php"); ?>




<!-- js/cdn goes here -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/signup-validation.js"></script>
</body>
</html>





