

<?php 

   $id=$_GET['id'];
   //echo $id;
    include('db/db.php');
    $sql="DELETE FROM `education` WHERE id='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Data Deleted Successfull');</script>";
        header("location:view-educational.php");
    }
    else
    {
    	echo "<script>alert('Some thing wrong tryagain');</script>";
    	header("location:view-educational.php");
    }


?>