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
                              <h1 class="h3 mb-4 text-gray-800">Add Skill Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="view-skill.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View Skill</a>
                        </div>
                        
                    </div>

                      <?php 
                                $id=$_GET['id'];
                                   echo $id;
                                   include('db/db.php');
                                    $resultt = mysqli_query($con,"SELECT * FROM `skill` WHERE  id='$id'");
                                      $row=mysqli_fetch_array($resultt);



                                ?>

                    <div class="row">

                        <div class="col-lg-12 d d-block mr-auto border-top-primary">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4 border-top-red">
                                <div class="card-header bg-info py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Add Data  </h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                      <div class="card card-outline card-info">
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Skill Name</label>
                                             <input name="title" value="<?php echo $row['sname'] ;?>" type="text" class="form-control" placeholder="Enter  Skill Name...">
                                            </div>
                                        </div>


                                        <div class="card-header">
                                         <div class="form-group">
                                              <label> Skill percentage</label>
                                             <input name="skillp" value="<?php echo $row['spercentage'] ?>" type="text" class="form-control" placeholder="Enter kill percentage..">
                                            </div>
                                        </div>
                                        
                                        

                                        

                                        
                                        </div>
                                         
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


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

   <?php 
}
   include('footer.php'); 
   ?>

    <?php 

           include('db/db.php');

           if (isset($_POST['publise']))
            {

                $id=$_GET['id'];
               $name=$_POST['title'];
               $name= str_replace("'","\'", $name);
               $skillp=$_POST['skillp'];
               
               
                    $sql="UPDATE `skill` SET `id`='$id',`sname`='$name',`spercentage`='$skillp' WHERE id='$id' ";
                    
                    if(mysqli_query($con,$sql))
                    {
                   echo "<script>alert('Published Successfull'); window.open('view-skill.php','_self');</script>";
                    }

                    else
                    {
                        echo "<script>alert('Some thing wrong try again'); window.open('view-skill.php','_self');</script>";
                    }


           }


            ?>

          