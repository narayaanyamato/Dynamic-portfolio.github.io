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
                    <h1 class="h3 mb-4 text-gray-800">View Abou Us Details</h1>

                    <div class="row">

                        <div class="col-lg-12 d d-block mr-auto">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 bg-info text-white">
                                    <h6 class="m-0 font-weight-bold text-primary">View Add Data  </h6>
                                </div>
                                <div class="card-body">
                                   <table class="table">
                                              <thead>
                                                <tr class="bg-secondary text-white">
                                                  <th scope="col">id</th>
                                                  <th scope="col">Name</th>
                                                  <th>degination</th>
                                                  <th scope="col">email</th>
                                                  <th scope="col">phone</th>
                                                  <th>Description</th>
                                                  <th>Dob</th>
                                                  <th>img</th>
                                                  <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                 <?php 

                                                  include('db/db.php');
                                                   $sql="SELECT * FROM `about`";
                                                   $res=mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                    {
                                                while($row=mysqli_fetch_assoc($res))
                                                       {
                                                        ?>

                                                         <tr>
                                                        <th scope="row"><?php echo $row['id']; ?></th>
                                                        <td><?php echo $row['name']; ?></td>
                                                          <td><?php echo $row['Designation']; ?></td>
                                                          <td><?php echo $row['email']; ?></td>
                                                          <td><?php echo $row['phone']; ?></td>
                                                          <td><?php echo $row['description']; ?></td>

                                                          <td><?php echo $row['dob']; ?></td>

                                                          <td> <img src="upload/about/<?php echo $row['img']; ?>" alt="John" style="width:100%"></td>
                                                          <td>
                                                              <a href="about-del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger m-1">delete</a>

                                                              <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success m-1">Update</a>
                                                          </td>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <?php 
}
   include('footer.php'); 
   ?>