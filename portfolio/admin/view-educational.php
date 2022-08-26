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
                    <h1 class="h3 mb-4 text-gray-800">View Edcational Details</h1>

                    <div class="row">

                        <div class="col-lg-12 d d-block mr-auto">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4 border-bottom-info">
                                <div class="card-header py-3 bg-info text-white">
                                    <h6 class="m-0 font-weight-bold text-primary">View Add Data  </h6>
                                </div>
                                <div class="card-body">
                                   <table class="table">
                                              <thead>
                                                <tr class="bg-secondary text-white">
                                                  <th scope="col">id</th>
                                                  <th scope="col">Instituate Name</th>
                                                  <th>Course</th>
                                                  <th scope="col">From</th>
                                                  <th scope="col">End</th>
                                                  <th>Action</th>
                                                  
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                 <?php 

                                                  include('db/db.php');
                                                   $sql="SELECT * FROM `education`";
                                                   $res=mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                    {
                                                while($row=mysqli_fetch_assoc($res))
                                                       {
                                                        ?>

                                                         <tr>
                                                        <th scope="row"><?php echo $row['id']; ?></th>
                                                        <td><?php echo $row['instituate_name']; ?></td>
                                                          <td><?php echo $row['cousename']; ?></td>
                                                          <td><?php echo $row['syr']; ?></td>
                                                          <td><?php echo $row['eyr']; ?></td>
                                                          
                                                          <th>
                                                              <a href="edu-del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger m-1">delete</a>

                                                              <a href="edu-update.php?id=<?php echo $row['id']; ?>" class="btn btn-success m-1">Update</a>
                                                          </th>
                                                          
                                                        </tr>

                                                        <?php
                                                        

                                                        }

                                                    }
                                                 ?>
                                                </tr>
                                                
                                              </tbody>
                                            </table>
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                         
                        </div>

                    

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


          
                 
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