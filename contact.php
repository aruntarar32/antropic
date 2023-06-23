<?php include('inc/header-link.php');?>

<style>
    .contact-area form input, .contact-area form textarea{
        border: 1px solid #00963f;
    }
</style>
<?php include('inc/navigation.php');?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/breadcrumb-img.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
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

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 contact-form-box">
                    <div class="content">
                        <div class="heading">
                            <h2>Get In Touch</h2>
                            <p>Let's Discuss About Your Needs!</p>
                        </div>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="subject" placeholder="Subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">Submit </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <div class="contact-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    Address
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                    Google Maps
                                </a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane fade active show">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Correspondence Address:
                                                <span>B-214, First Floor, Shaurya Plaza, <br> Greenfield Colony, Faridabad–121003</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Send Us Mail
                                                <span>info@antropicsolutions.com</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Call Us
                                                <span>0129-4891077</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <iframe src="https://maps.google.com/maps?q=Antropic%20solutions%20LLP%2C%20B%20214%2C%20Shaurya%20plaza%2C%20Near%20Hdfc%20bank%2C%20Greenfield%20Colony&t=m&z=16&output=embed&iwloc=near"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <?php include('inc/footer.php');?>