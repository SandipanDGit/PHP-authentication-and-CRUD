<?php include("functions.php") ?>
<?php 
    list($validity, $con) = insert(); //if $validity === 1, connection $con can now be used to get additional information about the query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="shortcut icon" href="resources/favicon.png" type="image/png">
    
    <!-- Added css files here -->

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/insert-form.css">
    <link rel="stylesheet" href="css/message-area.css">
</head>
<body>

    <!-- included the partials of the page here -->
    
    <?php include("partials/header.php") ?>
    <?php include("partials/insert-form.php") ?>

    <?php include("partials/message-area-top.php"); ?> 

    <?php
    if($validity === 1){
        echo "insert success";
    }
    else{
        echo $con; //error message
    }
    ?>
    <?php include("partials/message-area-bottom.php"); ?> 

    <script>
        console.log("JS working");
    </script>
</body>
</html>





