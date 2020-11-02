<?php include("functions.php");?>
<?php 
    list($validity, $con) = update();
    if($validity === 0){
        $result = $con; //error
    }
    else{
        $result = mysqli_affected_rows($con) . " row(s) affected";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update record</title>
    
    <!-- Added css files here -->

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/update-form.css">
    <link rel="stylesheet" href="css/message-area.css">
</head>
<body>

    <!-- included the partials of the page here -->
    
    <?php include("partials/header.php"); ?>
    <?php include("partials/update-form.php"); ?>

    <?php include("partials/message-area-top.php"); ?> 
    <?php
        echo $result;
    ?>
    <?php include("partials/message-area-bottom.php"); ?> 

</body>
</html>