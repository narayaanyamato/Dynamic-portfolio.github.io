


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>demo test</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container" >
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






<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</script>  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
</script>
</body>
</html>