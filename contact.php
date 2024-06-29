<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    	<!--FAFA CDN-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <style>
            .hu{
                font-size:20px;
                color: black;
            }
            .hu:hover{
                color:#176B87;
                transition: 0.5s;
            }
            .im{
                height:70px;
                width:100%;
            }
            .box   .hide{
                display: none;
            }
            .box:hover .hide{
              display: block;
            }
            .h6{
                border-bottom: 2px solid orange;
            }
            .h6:hover{
              color: black;
            }
            .a{
			      border-bottom: 1px solid orange;
			      color: #080202;
	  	    }
		      .a:hover{
			      color: black;
		      }
	        .orange:hover{
		        color: orange;
	        }
            .sb{
                background: #6e7051;
                color: white;
                height: 50px;
                width: 230px;
                font-size: 20px;
            }
            .sb:hover{
                background: black;
                color: white;
            }
    
      </style>
    </head>
    <body style="font-family: 'Montserrat', sans-serif;">
        <!--NAVBAR_START-->
    <nav class="navbar navbar-expand-md" style="background:#EEEEEE;">
        <a href="homepage.php" class="navbar-brand"><img class="im" src="img/logo1.png" alt=""></a>
        <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#bt">
            <i class="fa fa-bars mt-0" aria-hidden="true" style="font-size: 20px;"></i>
        </button>
        <div class="collapse navbar-collapse" id="bt">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="homepage.php" class="nav-link hu" style="font-size:20px;"><i class="fa fa-home" aria-hidden="true" style="font-size: 20px;font-weight: bold;"></i> HOME</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link hu"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i> ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="product.php" class="nav-link hu"><i class="fa fa-archive" aria-hidden="true" style="font-size: 20px;"></i> PRODUCT</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link" style="font-size:20px;color:#176B87;"><i class="fa fa-phone" aria-hidden="true" style="font-size: 20px;"></i> CONTACT</a>
            </li>
            <li class="nav-item">
                <a href="cart1.php" class="nav-link hu"><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size: 20px;"></i> CART</a>
            </li>
            <li class="nav-item">
                <a href="register_form.php" class="nav-link hu"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"> </i> USER</a>
            </li>
        </ul>
        </div>
        </nav>

    <!--NAVBAR_END-->
        
        <!--CONTACT FORM START-->
        <!-- Look Book Name -->

    <div class="col-md-12 display-1 p-5" style="text-align: center;">
        <span>Contact</span>
    </div>

    <div class="container" style="background: rgb(245, 241, 241);">
        <div class="col-md-12 p-5">
            <div class="row">
                <!-- left side -->
                <div class="col-md-4" style="box-shadow: 1px 0 0 0;">
                    <div class="row">
                        <!-- 1 -->
                        <div class="col-md-1">
                            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;color: #69727d;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Products & order</h4>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <p class="text-secondary">
                                +91 6354359366<br>
                                available 24/7
                            </p>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-10">
                                <hr>
                            </div>
                        </div>

                        <!-- 2 -->

                        <div class="col-md-1">
                            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;color: #69727d;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Info & enquiries</h4>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <p class="text-secondary">
                                +91 6354359366<br>
                                available 24/7
                            </p>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-10">
                                <hr>
                            </div>
                        </div>



                        <!-- 3 -->

                        <div class="col-md-1">
                            <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;color: #69727d;"></i>
                        </div>
                        <div class="col-md-10">
                            <h4>Store Locater</h4>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <p class="text-secondary">
                                Find our shops near you
                            </p>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-10">
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Stay In Touch</h5>
                                </div>
                                <div class="col-md-1">
                                    <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 20px;color: #69727d;"></i>
                                </div>
                                <div class="col-md-1">
                                    <i class="fa fa-twitter" aria-hidden="true" style="font-size: 20px;color: #69727d;"></i>
                                </div>
                                <div class="col-md-1">
                                    <i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 20px;color: #69727d;"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- right side -->

                <div class="col-md-8 p-3">
                    <div class="row">
                        <!-- name -->
                        <div class="col-md-12">
                            <span class="text-secondary" style="font-size: 25px;">Name</span>
                            <span style="font-size: 20px;color: red;">*</span>
                        </div>
                        <div class="col-md-12 pt-2">
                            <input type="text" style="height: 50px;width: 100%;outline-color: grey;">
                        </div>

                        <!-- email -->
                        <div class="col-md-12 pt-2">
                            <span class="text-secondary" style="font-size: 25px;">Email</span>
                            <span style="font-size: 20px;color: red;">*</span>
                        </div>
                        <div class="col-md-12 pt-2">
                            <input type="text" style="height: 50px;width: 100%;outline-color: grey;">
                        </div>

                        <!-- massage -->
                        <div class="col-md-12 pt-2">
                            <span class="text-secondary" style="font-size: 25px;">Comment Or Massage</span>
                            <span style="font-size: 20px;color: red;">*</span>
                        </div>
                        <div class="col-md-12 pt-2">
                            <input type="text" style="height: 120px;width: 100%;outline-color: grey;">
                        </div>

                        <!-- <button> -->

                        <div class="col-md-12 pt-4">
                            <div class="btn sb">
                                SEND MESSAGE
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- New checkbox -->

    <div class="mt-5"></div>




    <!-- Big Image -->



    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.180170573557!2d72.62764897490389!3d23.053855315160764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e86bba68fbc63%3A0x67ab630ef4a8cf3c!2sMemco%20Cir%2C%20Ambika%20Nagar%2C%20Om%20Nagar%2C%20Saijpur%20Bogha%2C%20Ahmedabad%2C%20Gujarat%20382345!5e0!3m2!1sen!2sin!4v1691589164989!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    <?php include 'footer.php'; ?>

        <script src="" async defer></script>
    </body>
</html>


