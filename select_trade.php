
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" cellpadding="5" cellspacing="2">
        <tr>
            <th>trade_Id</th>
            <th>Trade_name</th>
        </tr>
        <?php
        include("conn.php");
        $slct="SELECT * FROM trades";
        $query=mysqli_query($conn,$slct);
        
        if (mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                echo 
                  "
                  <tr>
                     <td>{$row['trade_Id']}</td>
                     <td>{$row['Trade_name']}</td>
                  </tr>
                  ";
            }
        }



?>
        
    </table>
</body>
</html>
<?php

