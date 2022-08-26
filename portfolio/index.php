



<?php 

 include('header.php');
?>



    <div class="card-panel" style="margine-top:50px;background: linear-gradient(to top left, #6666ff 0%, #3399ff 97%);" id="about">
        <div class="container">
            <div class="card #fafafa grey lighten-5" style="padding:15px;border-radius: 15px;">
                <div class="row">
                   <?php

                     include('db.php');
                      $sql="SELECT * FROM `about`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {

                        ?>

                        <div class="col s12 l6">
                           <img src="admin/upload/about/<?php echo $row['img']; ?>" class="z-depth-4 responsive-img">
                        </div>
                        <div class="col s12 l6">
                            <div class="personal_text">
                                    <h6>Hello Everybody, i'm</h6>
                                    <h3><?php echo $row['name']; ?></h3>
                                    <h4><?php echo $row['Designation']; ?></h4>
                                    <p><?php echo $row['description']; ?></p>
                                    <ul class="list basic_info">
                                        <li><a href="#"> <i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $row['dob']; ?></a></li>
                                        <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $row['phone']; ?></a></li>
                                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $row['email']; ?></a></li>
                                    </ul>
                                    <ul class="list personal_social">
                                        <li><a href="https://www.facebook.com/taran.arya.9"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/Tarande32638186?lang=en"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/tarandeep-singh-1a9761128/"><i class="fa fa-linkedin"></i></a></li>
                                       
                                        <li><a href="https://www.instagram.com/tarandeep.07/"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            
                        </div>


                        <?php

                    }
                }
                    ?>
                </div>
                
            </div>
            
        </div>
    </div>

  <div class="container" style="padding-top: 70px;padding-bottom: 70px;" >
    <div class="row">
        <div class="col l6 s12">
            <div class="welcome_text">
                            <h4>HOW I LIVE MY LIFE</h4>
                            <p>I choose to focus on what i can control and what i can do because if i’m able to do something it will worked at the end and if it hasn’t worked yet then it’s not the end.i refuse to give up because i think i haven’t tried all possible ways.Everyday In Every Way I’m Getting Better And Better. i keep going because i believe on myself. My past does not define my future. If yesterday was a bad day it's not mean my life is bad. i will make my today better.</p>
                            <div class="row">
                                <div class="col l4 s12">
                                    <div class="wel_item">
                                        <i class="fa fa-database" aria-hidden="true"></i>
                                        <h4>+10</h4>
                                        <p>Services</p>
                                    </div>
                                </div>
                                <div class="col l4 s12">
                                    <div class="wel_item">
                                       <i class="fa fa-book" aria-hidden="true"></i>
                                        <h4>+25</h4>
                                        <p>Projects</p>
                                    </div>
                                </div>
                                <div class="col l4 s12">
                                    <div class="wel_item">
                                       <i class="fa fa-user" aria-hidden="true"></i>

                                        <h4>+10</h4>
                                        <p>Team Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="col s12 l6">
          <div class="skill_item">
            <?php 

                    include('db.php');
                      $sql="SELECT * FROM `skill`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {

                      ?>

                       <h4><?php echo $row['sname'] ?> <?php echo $row['spercentage']; ?>%</h4>
                       <div class="progress" style="height:7px;">
                          <div class="determinate" style="width:<?php echo $row['spercentage']; ?>% ; height:20px; background:linear-gradient(to top left, #6666ff 40%, #3399ff 100%); ;">
                              
                          </div>
                      </div>
                      <?php

                    }


                }


            ?>
            </div>
        </div>
        
    </div>
      
  </div>

   

   <div  style="padding-top: 70px ; padding-bottom: 70px; background: linear-gradient(to top left, #6666ff 0%, #3399ff 97%);">
    <div class="container">

       <section class="timeline-section">
    <div class="timeline-items">
        
       <?php 
       
         include('db.php');
                      $sql="SELECT * FROM `education`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {

                        ?>
                         <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date text-white"><?php echo $row['syr'] ?> to <?php echo $row['eyr']?></div>
                        <div class="timeline-content">
                            <h3><?php echo $row['cousename'] ?></h3>
                            <p><?php echo $row['instituate_name'] ?></p>
                        </div>
                    </div>
                        <?php

                    }

                }

            

       ?>
      
        
    </div>
</section>
       
      

        
    </div>
       
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
include('footer.php');
?>
      
</body>
</html>

       
