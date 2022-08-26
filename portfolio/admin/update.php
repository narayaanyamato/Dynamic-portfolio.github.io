

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
                    <h1 class="h3 mb-4 text-gray-800">Update Abou Us Details</h1>

                    <div class="row">

                        <div class="col-lg-10 d d-block mr-auto">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Data  </h6>
                                </div>


                                <?php 
                                $id=$_GET['id'];
								   echo $id;
								   include('db/db.php');
								    $resultt = mysqli_query($con,"SELECT * FROM `about` WHERE  id='$id'");
                                      $row=mysqli_fetch_array($resultt);



                                ?>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                      <div class="card card-outline card-info">
                                        
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Name </label>
                                             <input name="title" value="<?php echo $row['name']; ?>" type="text" class="form-control"  placeholder="Enter Name...">
                                            </div>
                                        </div>
                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Designation</label>
                                             <input name="designation" value="<?php echo $row['Designation']; ?>"  type="text" class="form-control" placeholder="Enter  Designation ...">
                                            </div>
                                        </div>

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Email</label>
                                             <input name="email" value="<?php echo $row['email']; ?>"  type="text" class="form-control" placeholder="Enter  Email...">
                                            </div>
                                        </div>

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Phone</label>
                                             <input name="phone" value="<?php echo $row['phone']; ?>"  type="text" class="form-control" placeholder="Enter  Phone...">
                                            </div>
                                        </div>

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Dob</label>
                                             <input name="doj" value="<?php echo $row['dob']; ?>"  type="date" class="form-control" placeholder="Enter  Phone...">
                                            </div>
                                        </div>
                                        
                                        <div class="card-body pad">
                                        <label>Description</label>
                                          <div class="mb-3">
                                            <textarea class="form-group" name="comments" value="<?php echo $row['description']; ?>" style="width: 100%;" rows="5" cols="23">
                                                
                                                <?php echo $row['description']; ?>
                                            </textarea>
                                          </div>
                                        </div>
                                        
                                        <div class="card-header">
                                        <div class="form-group">
                                                <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
                                                <p style="color:red;">img size 70px x 70px</p>
                                                    <input name="lis_img"  value="<?php echo $row['img']; ?>" type="file"   accept=".jpg,.jpeg,.png,.svg">

                                                    <img src="upload/about/<?php echo $row['img']; ?>" alt="John" style="width:70px; height: 70px;">
                                                    <?php echo $row['img']; ?>
                                                </div>
                                        </div>
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                  <!-- text input -->
                                                  <div class="form-group">
                                            <button type="submit" name="publise" class="btn btn-primary btn-lg">Upadate </button>
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
               $name=$_POST['title'];
               $name= str_replace("'","\'", $name);
               $deg=$_POST['designation'];
               $phone=$_POST['phone'];
               $email=$_POST['email'];
               $dob=$_POST['doj'];
               $desc=$_POST['comments'];
               $desc = str_replace("'","\'", $desc);
               
                $fname=0;
                  if(is_uploaded_file($_FILES['lis_img']['tmp_name']))
                   {
                     $fname=$_FILES['lis_img']['name'];
                    
                     if(move_uploaded_file($_FILES["lis_img"]["tmp_name"],"upload/about/$fname"))
                     echo "file is moved";
                     else
                     echo "file is not moved";
                    }

                    $sql="UPDATE `about` SET `id`='$id', `name`='$name',`Designation`='$deg',`email`='$email',`phone`='$phone',`description`='$desc',`img`='$fname',`dob`='$dob' WHERE id='$id'";
                    
                    if(mysqli_query($con,$sql))
                    {
                   echo "<script>alert('Upadate Successfull'); window.open('view-about.php','_self');</script>";
                      
                    }

                    else
                    {
                        echo "<script>alert('Some thing wrong try again');window.open('view-about.php');</script>";
                        
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

  

   <?php 

}
   include('footer.php'); 
   ?>