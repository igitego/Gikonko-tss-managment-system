<?php
   include("conn.php");
   if (isset($_GET['Mark_Id'])) {
  
    $Mark_Id = $_GET['Mark_Id'];
    $sql = "SELECT * FROM marks WHERE Mark_Id = '$Mark_Id'";
    $query = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
    } else {
        echo mysqli_error($conn);
    }
   }

   if (isset($_POST['update'])) {
            
        $TraineeID = $_POST['Trainee_id'];
        $ModuleID = $_POST['Module_id'];
        $summative = $_POST['summative_assessment'];
        $Formative = $_POST['Formative_assessment'];

        $sql = "UPDATE marks
      SET    Trainee_id           = '$TraineeID',
             Module_id            = '$ModuleID',
             summative_assessment = '$summative',
             Formative_assessment = '$Formative'
      WHERE  Mark_Id = '$Mark_Id";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("location:select_marks.php");
        } else {
            die(mysqli_error($conn));
        }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Marks</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Trainee id</label>
        <input type="number" name="Trainee_id" value="<?php echo $row['Trainee_id'];?>"> <br>
        <label for="">Module id</label>
        <input type="number" name="Module_id" value="<?php echo $row['Module_id'];?>"> <br>
        <label for="">Summative /50</label>
        <input type="number" name="summative_assessment" value="<?php echo $row['summative_assessment'];?>"> <br>
        <label for="">Formative /50</label>
        <input type="number" name="Formative_assessment" value="<?php echo $row['Formative_assessment'];?>"> <br>

        <button name="update">update</button>

    </form>
</body>
</html>