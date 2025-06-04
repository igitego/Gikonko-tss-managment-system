



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
            <th>Mark_Id</th>
            <th>Trainee_Id</th>
            <th>Module_Id</th>
            <th>Formative_Assessment</th>
            <th>Summative_Assessment</th>
            <th>Total_Marks</th>
            <th>Result</th>
    
        </tr>
        <?php
        include("conn.php");
        $slct="SELECT * FROM marks";
        $query=mysqli_query($conn,$slct);
        
        if (mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                echo 
                  "
                  <tr>
                     <td>{$row['Mark_Id']}</td>
                     <td>{$row['Trainee_id']}</td>
                     <td>{$row['Module_id']}</td>
                     <td>{$row['Formative_assessment']}</td>
                     <td>{$row['summative_assessment']}</td>
                     <td>{$row['Total_mark']}</td>
                     <td>{$row['Result']}</td>
                  </tr>
                  ";
            }
        }



?>
        
    </table>
</body>
</html>
<?php

