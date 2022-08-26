<?php
  include('header.php')
?>


<div id="index-banner" class="parallax-container" style="height:300px">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Services  </h1>
      </div>
    </div>
    <div class="parallax"><img src="img/photo-1517245386807-bb43f82c33c4.jpg" style="transform: translate3d(-50%, 209.063px, 0px); opacity: 1;"></div>
  </div>

<div class="#efebe9 brown lighten-5" style="padding-top:70px;padding-bottom: 70px;" id="tesi">
            <div class="container">
                <div class="main_title">
                    <h2>Have a Look at my Services</h2>
                    <p style="text-align:center;">we are provide best service in your budget</p>


                </div>
                <div class="feature_inner row">

                <?php 
                    include('db.php');
                      $sql="SELECT * FROM `service`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {
                         ?>
                    <div class="col l4 s12 m6">
                     <div class="feature_item z-depth-3">
                        <img src="admin/upload/service/<?php echo $row['icon'] ?>" width="42px" height="42px">
                        <h4><?php echo $row['sname']?></h4>
                        <p><?php echo $row['sdesc'];?></p>
                    </div>
                    </div>

                         <?php
                    }
                  }

            ?>
                        
                   
                   
                   
                </div>
            </div>
        </div>








      <div class="container" style="padding-bottom: 70px;">
                <div class="main_title">
                    <h2>My Portfolio</h2>
                </div>
                 <div class="owl-carousel owl-theme">

                <?php 
                  include('db.php');
                      $sql="SELECT * FROM `portfolio`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {

                   ?>
                    
                        <div class="item">
                            <div class="testi_item">
                            
                        <a href="<?php echo $row['url'] ?>" target="_blank">  <img src="admin/upload/profile/<?php echo $row['img'] ?>" style="height: 168px; width: 100%;">
                            <center>
                                <h4 style="margin-top: 18px;"><?php echo $row['title'] ?></h4></center></a>                
                            
                                 </div>
                                </div>

                   <?php
                    }
                    }
                ?>
                    
                </div>
                <div class="more_btn">
                    <a class="main_btn" href="https://nswain.netlify.app/#/project">Load More Items</a>
                </div>
                
            </div>






<!---s4--*()__--->
           <div class="#e0e0e0 grey lighten-3">
            <div class="container" style="padding-top: 30px; padding-bottom: 70px;">
                <div class="main_title">
                    <h2>Testimonials</h2>
                    <p style="text-align:center;">What our clients say</p>
                </div>


            <div class="owl-carousel owl-theme" id="Testimonials">
                  
                  <?php 
                    include('db.php');
                      $sql="SELECT * FROM `testimonial`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                ?>


                        <div class="item">
                            <div class="testi_item">
                                <p><?php echo $row['descr'] ?></p>
                                <h4><?php echo $row['cname']; ?></h4>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>

                                <?php

                            }
                        }


                  ?>

              
               
                
            </div>
            
            </div>
            </div>





<?php
  include('footer.php')
?>