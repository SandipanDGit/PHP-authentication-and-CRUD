<?php include("functions.php"); ?>
<?php
    list($validity, $con) = delete();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete record</title>
    
    <!-- Added css files here -->

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/delete-form.css">
    <link rel="stylesheet" href="css/message-area.css">
</head>
<body>

    <!-- included the partials of the page here -->
    
    <?php include("partials/header.php") ?>
    <?php include("partials/delete-form.php"); ?> 

    <?php include("partials/message-area-top.php"); ?> 

    <?php
        if($validity === 0){
            echo $con;
        }
        else{
            if(mysqli_affected_rows($con))
                echo "record deleted";
            else
                echo "no record deleted";
        }
    ?>

    <?php include("partials/message-area-bottom.php"); ?> 

</body>
</html>