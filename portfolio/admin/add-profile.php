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
                              <h1 class="h3 mb-4 text-gray-800">Add Portfolio Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="view-profile.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View Portfolio</a>
                        </div>
                        
                    </div>

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
                                              <label>Enter Title</label>
                                             <input name="title" value="" type="text" class="form-control" placeholder="Enter Name...">
                                            </div>
                                        </div>
                                        

                                        <div class="card-header">
                                         <div class="form-group">
                                              <label>Enter Url of work</label>
                                             <input name="url" value="" type="text" class="form-control" placeholder="Enter  Work url..">
                                            </div>
                                        </div>

                                        <div class="form-group p-3">
                                                <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
                                                <p style="color:red;">img size 70px x 70px</p>
                                                    <input name="lis_img" type="file" required="" accept=".jpg,.jpeg,.png,svg">
                                                                   </div>
                                        </div>
                                         
                                        <div class="card-header">
                                         <div class="form-group">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                  <!-- text input -->
                                                  <div class="form-group">
                                            <button type="submit" name="publise" class="btn btn-primary btn-lg">Publish</button>
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
               $name=$_POST['title'];
               $name= str_replace("'","\'", $name);
               $url=$_POST['url'];
               
               
                $fname=0;
                  if(is_uploaded_file($_FILES['lis_img']['tmp_name']))
                   {
                     $fname=$_FILES['lis_img']['name'];
                    
                     if(move_uploaded_file($_FILES["lis_img"]["tmp_name"],"upload/profile/$fname"))
                     echo "file is moved";
                     else
                     echo "file is not moved";
                    }

                    $sql=" INSERT INTO `portfolio`( `img`, `title`, `url`) VALUES ('$fname','$name','$url')";
                    
                    if(mysqli_query($con,$sql))
                    {
                   echo "<script>alert('Published Successfull');</script>";
                    }

                    else
                    {
                        echo "<script>alert('Some thing wrong try again');</script>";
                    }


           }


            ?>

          