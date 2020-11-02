<?php include("functions.php") ?>
<?php
    list($validity, $result, $con) = show();
    if($validity === 0){
        //print the error
    }
    else{
        $row_count = mysqli_num_rows($result);
        $column_count = mysqli_field_count($con);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/show-table.css">
    <link rel="stylesheet" href="css/message-area.css"> <!-- include this if you include message area -->

    <title>Show all records</title>
</head>
<body>
    
    <?php include("partials/header.php"); ?>
    
    <!-- include this and partials/message-area-bottom.php to have a message area to print system info -->
    <?php include("partials/message-area-top.php"); ?> 
    <?php
        if($validity === 0){
            echo $result; //print the error
        }
        else{
            echo "rows : " . $row_count . "<br>";
            echo "columns : " . $column_count . "<br><br>";
    
            // for($i = 0; $i < $row_count; $i++){
            //     $record = mysqli_fetch_array($result, MYSQLI_NUM);
            //     echo $record[0] . " --- " . $record[1] . " --- " . $record[2] . "<br>";
            // }
            // mysqli_free_result($result);
        }
    ?>
    <?php include("partials/message-area-bottom.php"); ?> <!-- message area bottom -->
    <?php include('partials/show-table.php'); ?>

</body>
</html>