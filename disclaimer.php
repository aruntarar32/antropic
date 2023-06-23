<?php include('inc/header-link.php');?>

<style>
  
.page {
  padding: 50px 80px;
  /* margin: 50px; */
  background: white;
  box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, 0.6);

}

#terms-and-conditions {
  font-size: 14px;
}
#terms-and-conditions h1 {
  font-size: 34px;
}
#terms-and-conditions ol {
  counter-reset: item;
}
#terms-and-conditions li {
  display: block;
  margin: 20px 0;
  position: relative;
}
#terms-and-conditions li:before {
  position: absolute;
  top: 0;
  margin-left: -50px;
  color: #00963f;
  content: counters(item, ".") "    ";
  counter-increment: item;
}
</style>


<?php include('inc/navigation.php');?>



    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/breadcrumb-img.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <h2>Disclaimer</h2>
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
        <div class="container" style="">
        <div class="page m-0 m-md-5">

      



<h2>Disclaimers for Antropic Solutions</h2>

<p>All the information on this website <a href="http://antropicsolutions.co.in"> http://antropicsolutions.co.in/ </a> is published in good faith and for general information purpose only. Antropic Solutions does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (Antropic Solutions), is strictly at your own risk. Antropic Solutions will not be liable for any losses and/or damages in connection with the use of our website.</p>

<p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>

<p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

<h2>Update</h2>

<p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>





</div><!--  end .page  -->
        </div>
    </div>
    <!-- End Works About Area -->

    <?php include('inc/footer.php');?>