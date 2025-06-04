<?php
   include("conn.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Marks</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Trainee id</label>
        <input type="number" name="Trainee_id" > <br>
        <label for="">Module id</label>
        <input type="number" name="Module_id" > <br>
        <label for="">Summative /50</label>
        <input type="number" name="summative_assessment" > <br>
        <label for="">Formative /50</label>
        <input type="number" name="Formative_assessment" > <br>

    </form>
</body>
</html>