
<?php 
 include('header.php');
?>

<div id="index-banner" class="parallax-container" style="height:300px">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">About Us</h1>
      </div>
    </div>
    <div class="parallax"><img src="img/business-background-picture-wide-hd-cool-wallpaper-85481.jpg" style="transform: translate3d(-50%, 209.063px, 0px); opacity: 1;"></div>
  </div>

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





<?php 
 include('footer.php');
?>