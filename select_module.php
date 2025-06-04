
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
            <th>Module_Id</th>
            <th>Module_Name</th>
            <th>Trade_Id</th>
        
        </tr>
        <?php
        include("conn.php");
        $slct="SELECT * FROM modules";
        $query=mysqli_query($conn,$slct);
        
        if (mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                echo 
                  "
                  <tr>
                     <td>{$row['Module_Id']}</td>
                     <td>{$row['Module_Name']}</td>
                     <td>{$row['Trade_Id']}</td>
                  </tr>
                  ";
            }
        }



?>
        ?>
    </table>
</body>
</html>
<?php

