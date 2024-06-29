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
                color: #176B87;
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
        <a href="" class="navbar-brand"><img class="im" src="img/logo1.png" alt=""></a>
        <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#bt">
            <i class="fa fa-bars mt-0" aria-hidden="true" style="font-size: 20px;"></i>
        </button>
        <div class="collapse navbar-collapse" id="bt">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="homepage.php" class="nav-link hu" style="font-size:20px;"><i class="fa fa-home" aria-hidden="true" style="font-size: 20px;font-weight: bold;"></i> HOME</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link" style="font-size:20px;color:#176B87;"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i> ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="product.php" class="nav-link hu"><i class="fa fa-archive" aria-hidden="true" style="font-size: 20px;"></i> PRODUCT</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link hu"><i class="fa fa-phone" aria-hidden="true" style="font-size: 20px;"></i> CONTACT</a>
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
        
        <!-- BAckground image -->
        <div class="col-md-12 p-0" style="background-image: url(img/Warehouse.jpg);background-size: 100% 100%;height: 100%;">
            <div class="col-md-12" style="background-color: black;opacity: 0.5;">
			    <div class="col-md-12">
				    <div style="height:100px;width: 100%;">
                    </div>
			    <div class="col-md-12 text-light mt-4 col-12 text-center">
					<p class="display-3 text-warning"> ABOUT US </p>
				</div>
				<div style="height:100px;width: 100%;">
                </div>
			    </div>
            </div>
		</div>
        <!--ENDS BACKGROUND IMG-->

        <!--About start-->
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-12 mt-4">
                        <img src="img/men.jpg" style="height:100%;width:100%;border-radius: 20px;">
                    </div>
                    <div class="col-md-6 col-12">
                        <div style="height:100px;width: 100%;"></div>
                            <span class="p-2" style="color:orange;">ABOUT US</span>
                            <h2 class="p-2 display-5">Selected materials designed for comfort and sustainability</h2>
					<p class="p-2 text-secondary">Renting furniture with us is the perfect solution for creating a stylish and functional space without the hassle and expense of purchasing new items. Our wide selection of high-quality, beautiful furniture pieces allows you to transform your home or office effortlessly. Whether you're moving into a new place, hosting an event, or simply looking to refresh your space, we have options to suit every taste and need. Choosing us means you get flexible rental terms, affordable prices, and exceptional customer service. Plus, our hassle-free delivery and setup services ensure that you can enjoy your new furniture without lifting a finger. Make the smart choice and elevate your space with our stunning, rentable furniture today.</p>
                    <p class="p-2 text-secondary">Renting furniture with us offers a seamless way to upgrade your living or working environment with minimal effort. Our curated collection features not only style and functionality but also the convenience of adaptable rental terms that fit your specific timeframe. Whether you're seeking to furnish a temporary living arrangement, stage a property for sale, or enhance a special occasion, our diverse range of high-quality pieces ensures there's something to complement every setting. Experience the ease of transforming your space without the commitment of purchasing, backed by our commitment to delivering satisfaction through every step of the process. Discover how effortless and rewarding it can be to elevate your space with our exceptional rental services today.</p>
                    <p><span class="p-2" style="border-bottom: 1px solid orange; cursor: pointer;" onclick="document.getElementById('moreContent').style.display = 'block'; this.style.display = 'none';">READ MORE</span></p>
                    <div id="moreContent" style="display: none;">
                        <p class="p-2 text-secondary">Explore the possibilities of creating a customized look that reflects your unique style and preferences. Whether you're furnishing a temporary space or looking for a long-term solution, our commitment to quality and service ensures that your experience exceeds expectations. With options for every budget and occasion, renting furniture with us provides unmatched flexibility and convenience. Take advantage of our seamless delivery and setup services, allowing you to enjoy your new furnishings without any hassle. Make the most of your space with our comprehensive rental solutions today.</p>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About ends-->

        <!--Footer Start-->
        <?php include 'footer.php'; ?>
        <!--Footer End-->
</body>
</html>