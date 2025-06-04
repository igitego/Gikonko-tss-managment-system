<?php
include("conn.php")?>
<form action=""method="post">
    FirstName:<input type="text"name="fname"placeholder="enter fname"><br><br>
    LastName:<input type="text"name="lname"placeholder="enter lname"><br><br>
     trade_id:<input type="text"name="tradeId"placeholder="enter trade id"><br><br>
    
    </select><br><br>
   
    <button name="save">insert</button>
</form>
<?php
if (isset($_POST['save'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tradeId=$_POST['tradeId'];
    
    $insert="INSERT INTO  Trainees (fname,lname,gender,tradeId)
    VALUES($fname,$lname,$tradeId)";

    $sql=mysqli_query($conn,$insert);

    if(!$sql)
    {
        echo "fail";

    }
    else
    {
        echo"success";
    }
};

?>