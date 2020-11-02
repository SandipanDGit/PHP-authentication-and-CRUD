<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    
    <div class="main-table">
        <table>
            <thead>
                <tr>
                    <td><b>User ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Password</b></td>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $row_count; $i++):
                    $record = mysqli_fetch_array($result, MYSQLI_NUM); ?>
                    <tr>
                        <td><?php echo $record[0]; ?></td>
                        <td><?php echo $record[1]; ?></td>
                        <td><?php echo $record[2]; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

<!-- </body>
</html> -->