<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="">
        <style>
            ul {
                margin: 0px;
                padding: 0px;
            }
            .footer-section {
              background: #151414;
              position: relative;
            }
            .footer-cta {
              border-bottom: 1px solid #373636;
            }
            .single-cta i {
              color: #55ACEE;
              font-size: 30px;
              float: left;
              margin-top: 8px;
            }
            .cta-text {
              padding-left: 15px;
              display: inline-block;
            }
            .cta-text h4 {
              color: #fff;
              font-size: 20px;
              font-weight: 600;
              margin-bottom: 2px;
            }
            .cta-text span {
              color: #757575;
              font-size: 15px;
            }
            .footer-content {
              position: relative;
              z-index: 2;
            }
            .footer-pattern img {
              position: absolute;
              top: 0;
              left: 0;
              height: 330px;
              background-size: cover;
              background-position: 100% 100%;
            }
            .footer-logo {
              margin-bottom: 30px;
            }
            .footer-logo img {
                max-width: 200px;
            }
            .footer-text p {
              margin-bottom: 14px;
              font-size: 14px;
              color: #7e7e7e;
              line-height: 28px;
            }
            .footer-social-icon span {
              color: #fff;
              display: block;
              font-size: 20px;
              font-weight: 700;
              font-family: 'Poppins', sans-serif;
              margin-bottom: 20px;
            }
            .footer-social-icon a {
              color: #fff;
              font-size: 16px;
              margin-right: 15px;
            }
            .footer-social-icon i {
              height: 40px;
              width: 40px;
              text-align: center;
              line-height: 38px;
              border-radius: 50%;
            }
            .facebook-bg{
              background: #3B5998;
            }
            .twitter-bg{
              background: #55ACEE;
            }
            .footer-widget-heading h3 {
              color: #fff;
              font-size: 20px;
              font-weight: 600;
              margin-bottom: 40px;
              position: relative;
            }
            .footer-widget-heading h3::before {
              content: "";
              position: absolute;
              left: 0;
              bottom: -15px;
              height: 2px;
              width: 50px;
              background: #55ACEE;
            }
            .footer-widget ul li {
              display: inline-block;
              float: left;
              width: 50%;
              margin-bottom: 12px;
            }
            .footer-widget ul li a:hover{
              color: #ff5e14;
            }
            .footer-widget ul li a {
              color: #878787;
              text-transform: capitalize;
            }
            .subscribe-form {
              position: relative;
              overflow: hidden;
            }
            .subscribe-form input {
              width: 100%;
              padding: 14px 28px;
              background: #2E2E2E;
              border: 1px solid #2E2E2E;
              color: #fff;
            }
            .subscribe-form button {
                position: absolute;
                right: 0;
                background: #55ACEE;
                padding: 13px 20px;
                border: 1px solid #ff5e14;
                top: 0;
            }
            .subscribe-form button i {
              color: #fff;
              font-size: 22px;
              transform: rotate(-6deg);
            }
            .copyright-area{
              background: #202020;
              padding: 25px 0;
            }
            .copyright-text p {
              margin: 0;
              font-size: 14px;
              color: #878787;
            }
            .copyright-text p a{
              color: #ff5e14;
            }
            .footer-menu li {
              display: inline-block;
              margin-left: 20px;
            }
            .footer-menu li:hover a{
              color: #ff5e14;
            }
            .footer-menu li a {
              font-size: 14px;
              color: #878787;
            }
        </style>
    </head>
    <body>
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-map-marker"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>1010 Avenue, sw 54321, chandigarh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>9876543210 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>tsub.info.in@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                            <div class="footer-logo">
    <a href="homepage.php"><img src="img/logo1.png" class="img-fluid" alt="logo"></a>
</div>
                                <div class="footer-text">
                                    <p>Renting furniture with us is a hassle-free way to transform your home or office. Enjoy stylish, high-quality pieces without the long-term commitment.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow us</span>
                                    <a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
                                    <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="homepage.php">Home</a></li>
                                    <li><a href="about.php">about</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="product.php">Products</a></li>
                                     <li><a href="cart1.php">Cart</a></li>
                                     <li><a href="login.php">Account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                </div>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email Address">
                                        <button><i class="fa fa-telegram"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
    </body>
</html>