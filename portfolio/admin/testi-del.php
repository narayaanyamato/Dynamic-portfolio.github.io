

<?php 

   $id=$_GET['id'];
   //echo $id;
    include('db/db.php');
    $sql="DELETE FROM `testimonial` WHERE id='$id'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Data Deleted Successfull'); window.open('view-testimonal.php','_self');</script>";
        
    }
    else
    {
    	echo "<script>alert('Some thing wrong tryagain');window.open('view-testimonal.php','_self');</script>";
    	//header("location:view-tesimonal.php");
    }


?>