<?php 

 session_start();

  if(!isset($_SESSION['email']))
  {
     header("location:login.php");
  }
  else
  {

    include('header.php');

?>
    <div id="wrapper">

       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                    <div class="row">
                        <div class="col-sm-6 ">
                              <h1 class="h3 mb-4 text-gray-800">Add Educational Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="view-educational.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View Educational</a>
                        </div>
                        
                    </div>

                    <div class="row">


                        <?php 
                                $id=$_GET['id'];
                                   echo $id;
                                   include('db/db.php');
                                    $resultt = mysqli_query($con,"SELECT * FROM `education` WHERE  id='$id'");
                                      $row=mysqli_fetch_array($resultt);



                                ?>

                        <div class="col-lg-10 d d-block mr-auto">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4 border-top-primary">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Update Data  </h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                      <div class="card card-outline card-info">
                                        
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Instituate Name</label>
                                             <input name="iname" value="<?php echo $row['instituate_name']; ?>" type="text" class="form-control" placeholder="Enter College/ Instituate name">
                                            </div>
                                        </div>
                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Course Name</label>
                                             <input name="course" value="<?php echo $row ['cousename']; ?>" type="text" class="form-control" placeholder="Enter  Course name.">
                                            </div>
                                        </div>

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Start Year</label>
                                             <input name="syr" value="<?php echo $row['syr'] ?>" type="text" class="form-control" placeholder="Enter  Start year.">
                                            </div>
                                        </div>

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Completion Year</label>
                                             <input name="eyr" value="<?php echo $row['eyr'] ?>" type="text" class="form-control" placeholder="Enter  End year.">
                                            </div>
                                        </div>

                                       
                                        <div class="card-header">
                                      
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                  <!-- text input -->
                                                  <div class="form-group">
                                            <button type="submit" name="publise" class="btn btn-primary btn-lg">Update</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      </form>
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                         
                        </div>

                    

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <?php 

           include('db/db.php');

           if (isset($_POST['publise']))
            {
                 $id=$_GET['id'];
               $iname=$_POST['iname'];
               $course=$_POST['course'];
               $syr=$_POST['syr'];
               $eyr=$_POST['eyr'];
              
                    $sql=" UPDATE `education` SET `id`='$id',`instituate_name`='$iname',`cousename`='$course',`syr`='$syr',`eyr`='$eyr' WHERE  id='$id'";
                    
                    if(mysqli_query($con,$sql))
                    {
                   echo "<script>alert('Update Successfull'); window.open('view-educational.php','_self');</script>";
                      
                    }

                    else
                    {
                        echo "<script>alert('Some thing wrong try again');window.open('view-educational.php','_self');</script>";
                        
                    }


           }


            ?>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;my portfolio 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
     <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
   <?php 
}
   include('footer.php'); 
   ?>