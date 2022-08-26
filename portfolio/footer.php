

        <footer class="page-footer #212121 grey darken-4">
          <div class="container">
            <div class="row">


              <div class="col l4 s12">
                <h5 class="gray-text">About Me</h5>
                 <?php
               include('db.php');
                      $sql="SELECT * FROM `about`";
                       $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                    while($row=mysqli_fetch_assoc($res))
                    {
                      ?>

                        <p class="grey-text"><?php echo $row['description'] ?></p>

                      <?php
                      
                    }
                  }
               ?>
              
              </div>
              <div class="col l4 s6 center-align">
                <h5 class="gray-text">Usefull Links</h5>

                <ul>
                  <li><a class="grey-text " href="#!">Home</a></li>
                  <li><a class="grey-text " href="#!">About</a></li>
                  <li><a class="grey-text " href="#!">Service</a></li>
                  <li><a class="grey-text " href="#!">Contact</a></li>
                  <li><a class="grey-text " href="#!">Education</a></li>
                  <li><a class="grey-text " href="#!">Portfolio</a></li>
                </ul>

              </div>

              <div class="col l4  s6 left-align">
                <h5 class="gray-text">Connect me</h5>
                <ul class="socil-icon">
            <li><i class="fa fa-facebook"></i><a class="grey-text" href="https://www.facebook.com/narayan.swain.372019/">&nbsp;Facebook</a></li>
            <li><i class="fa fa-instagram"></i> <a class="grey-text" href="https://www.instagram.com/narayan_swayn/">&nbsp;Instgram</a></li>
            <li><i class="fa fa-linkedin"></i><a class="grey-text" href="https://www.linkedin.com/in/narayan-swain-0a8290208/">&nbsp;Linkedin</a></li>
            <li><i class="fa fa-google"></i> <a class="grey-text" href="#!">&nbsp;Google</a></li>
            <li><i class="fa fa-twitter"></i> <a class="grey-text" href="https://twitter.com/NarayanYamato">Twiiter</a></li>
            
          </ul>
                
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="background: linear-gradient(to top left, #6666ff 0%, #3399ff 87%);">
            <div class="container">
            © 2022 Copyright My-Portfolio
            <a class="grey-text text-lighten-4 right" href="https://nswain.netlify.app/">Design By Niku</a>
            </div>
          </div>
        </footer>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
<script type="text/javascript">

    function display()
     {
        //alert();
        document.getElementById('preloader').style.display="none";
    }
        
 $(document).ready(function(){
    $('.sidenav').sidenav();
      $('.parallax').parallax();
  });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    autoplay:true,
    dots:false,
     nav:true,
     animateIn: 'slideInLeft',
     animateOut: 'slideInLeft',
     responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        },
        1280:{
            items:3
        }
    }
});


if ($(".owl-carousel .items").length() < 2) {
    //hide buttons
    $(".owl-carousel .btn.next").hide();
    $(".owl-carousel .btn.prev").hide();
}



</script>
