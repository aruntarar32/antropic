<?php include('inc/header-link.php');?>

<style>
 @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
.email-signup-thankyou {
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  background: #333;
  padding: 10%;
}
.email-signup-thankyou .content {
  margin: auto;
  /* Magic! */
  max-width: 700px;
  color: #333;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.55), 0 3px 6px rgba(0, 0, 0, 0.23);
  /* background: url("https://www.crafta.co.il/images/paper-plane.gif") no-repeat #fff; */
  background-position: right 5px bottom 5px;
  background-size: 10em;
  text-align: center;
  position: relative;
  padding: 10%;
  border-radius: 5px;
  background: #fff;
}
.email-signup-thankyou .content .left-hole,
.email-signup-thankyou .content .right-hole {
  position: absolute;
  width: 20px;
  height: 20px;
  background: #333;
  border-radius: 50%;
  top: 15px;
}
.email-signup-thankyou .content .left-hole {
  left: 15px;
  top: 10px;
}
.email-signup-thankyou .content .right-hole {
  right: 15px;
  top: 10px;
}
.email-signup-thankyou .content h2,
.email-signup-thankyou .content h3 {
  text-align: left;
  padding: 5% 5% 0% 3%;
  color: #333;
  font-weight: 900;
}
.email-signup-thankyou .content .main-content > h1 {
  color: #333;
  text-transform: uppercase;
  margin-top: -2%;
  font-size: 2.5em;
  font-weight: 900;
}
</style>


<?php include('inc/navigation.php');?>



    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/breadcrumb-img.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <h2>Thank You</h2>
                </div>
                <!-- <div class="col-lg-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">About</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->



    <!-- Start Works About 
    ============================================= -->
    <div class="works-about-area overflow-hidden">
        <div class="" style="border-top:2px solid #fff;border-bottom:2px solid #fff;">
            <div class="header-custom email-signup-thankyou">
                <div class="content">
                    <div class="left-hole"></div>
                    <div class="right-hole"></div>
                    <div class="main-content">
                        <h4>Success! You are signed-up.</h4>
                        <p>Thanks for reaching out. Your application has been submitted to us, and one of our executives will contact you shortly. Have a great day!</p>
                       

                  
                    </div>
                   
                    <a class="btn circle btn-theme effect pl-4 pr-4" href="index.php">Back to Home</a>

                </div>
            </div>
        </div>
    </div>
    <!-- End Works About Area -->

    <?php include('inc/footer.php');?>