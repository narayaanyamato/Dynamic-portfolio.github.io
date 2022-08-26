

<?php 
  
  include('header.php');
?>


<div id="index-banner" class="parallax-container" style="height:300px">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Contact Us  </h1>
        <div class="row center">
          
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/bg-contact.jpg" style="transform: translate3d(-50%, 209.063px, 0px); opacity: 1;"></div>
  </div>

  

  <div class="container" style="padding:10px;margin-top: 70px;margin-bottom: 70px ;background:linear-gradient(to top left, #6666ff 0%, #3399ff 97%);border-radius: 10px;">
    
      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1871.7508038087926!2d85.74920130797152!3d20.238021363229027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a86711664c99%3A0xc85af92386aacf42!2sTamando%20Bazar%2C%20Tamando%2C%20Bhubaneswar%2C%20Odisha%20752054!5e0!3m2!1sen!2sin!4v1660059478748!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
  </div>
  <div class="container">
  	<div class="contact_info">

  		                <?php 
                             
                             include('db.php');
                      $sql="SELECT * FROM `about`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {

                    	?>


                            <div class="info_item">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <h6><a href="#">+91 <?php echo $row['phone'] ?></a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                               <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h6><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>


                    	<?php
                    }
                }


  		         ?>
                           
  	
  </div>



<?php 
  
  include('footer.php');
?>