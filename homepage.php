<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Preloader</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

	<style>
        .product-card {
            background: #f8f9fa;
            border-radius: 10px; 
            overflow: hidden; 
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05); 
        }
        .product-image {
            background-size: cover; 
            background-position: center;
            height: 300px;
        }

        .btn50 {
            margin: 5px;
        }

        *{
            font-family: 'Montserrat', sans-serif;
        }
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
		* 
        {
	        box-sizing: border-box;
	        margin: 0;
	        padding: 0;
        }
        .blue{
            height: 100%;
            width: 100%;
            background: #07294dd2;
        }
        .bt5:hover{
            background: #ffc600;
            transition: 1s;
            border: none;
        }
        .bt6{
             background: #021d3a;
             color: white;
             border-radius: 50%;
             height: 30px;
             width: 30px;
             border: 0;
         }
         .bt6:hover{
             color: #021d3a;
             background: #ffc600;
             transition: 1s;
         }
        .sp3{
             color: white;
         }
         .sp3:hover{
             color: #ffc600;
             margin-left: 15px;
             transition: 1s;
         }
         .sp4{
             color: white;
         }
         .sp4:hover{
             color: #ffc600;
             margin-left: 10px;
             transition: 1s;
         }
         .bt11{
             height: 40px;
             width: 100%;
             font-size: 15px;
             border: none;
             background: #ffc600;
             color: #07294d;
             border-radius: 5px;
         }
         .bt11:hover{
             color: #ffc600;
             background: #07294d;
             transition: 0.5s;
         }
         .blue3:hover{
             background: #07294da4;
             transition: 1s;
         }
         .h45:hover{
             color: #ffc600;
         }
         .transp{
             height: 100%;
             width: 100%;
         }
         .transp:hover{
             background: #021d3acb;
             transition: 0.5s;
         }
         .btn50{
             height: 50px;
             width: 50px;
             border: 1px solid #ffc600;
             color: #ffc600;
             font-size: 20px;
             background: transparent;
         }
         .btn50:hover{
             background: #ffc600;
             color: #07294d;
             border: 1px solid #07294d;
         }
         
         .bg button{
             display: none;
         }
         .bg:hover button{
             display: inline-block;
         }    

         .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .confirmation-modal {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .confirmation-modal button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .confirmation-modal button:hover {
        background-color: #0056b3;
    }


body {
	background: #ddd; height:100%;overflow-x: hidden;}	
    .text{color:brown;font-size:220px;text-align:center;}
    .open{color:green;background:#000;padding:10px;border-radius:20px;}

/* Preloader */
.container-preloader {
	align-items:center; cursor:none; display:flex; height:100%;
  justify-content:center; position:fixed; left:0; top:0; width:100%; z-index:900;
}
.container-preloader .animation-preloader {
	position:absolute; z-index: 100;}
/* Spinner Loading */
.container-preloader .animation-preloader .spinner {
  animation: spinner 2s infinite linear;
	border-radius: 50%;  border: 10px solid rgba(0, 0, 0, 0.2);
  border-top-color: green; 
  height: 9em;  margin: 0 auto 3.5em auto; width: 9em;
}
/* Loading text */
.container-preloader .animation-preloader .txt-loading {
  font: bold 5em 'Montserrat', sans-serif;
	text-align: center;	user-select: none;
}
.container-preloader .animation-preloader .txt-loading .characters:before {
  animation: characters 10s infinite;  color: orange;
  content: attr(preloader-text);  left: 0;
  opacity: 0;  position: absolute;  top: 0;
  transform: rotateY(-90deg);
}
.container-preloader .animation-preloader .txt-loading .characters {
	color: rgba(0, 0, 0, 0.2);	position: relative;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(2):before {
  animation-delay: 0.2s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(3):before {
  animation-delay: 0.4s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(4):before {
  animation-delay: 0.6s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(5):before {
  animation-delay: 0.8s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(6):before {
  animation-delay: 1s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(7):before {
  animation-delay: 1.2s;
}
.container-preloader .loader-section {
  background-color: #ffffff;  height: 100%;
  position: fixed;  top: 0;  width: calc(50% + 1px);
}
.container-preloader .loader-section.section-left {
  left: 0;
}
.container-preloader .loader-section.section-right {
  right: 0;
}
/* Fade effect on loading animation */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.5s ease-out;
}
/* Curtain effect*/ 
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
} 
/* Animation of the preloader */
@keyframes spinner {
to {
	transform: rotateZ(360deg);
}}
/* Animation of letters loading from the preloader */
@keyframes characters {
  0%,
  75%,
  100% {
 opacity: 0;
 transform: rotateY(-90deg);
  }
  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }}

  @media screen and (max-width: 767px) {
	/* Preloader */
	/* Spinner Loading */	
	.container-preloader .animation-preloader .spinner {
	height: 8em;
	width: 8em;
	}
	/* Text Loading */
	.container-preloader .animation-preloader .txt-loading {
	  font: bold 3.5em 'Montserrat', sans-serif;
	}}
@media screen and (max-width: 500px) {
	/* Prelaoder */
	/* Spinner Loading */
	.container-preloader .animation-preloader .spinner {
	height: 7em;
	width: 7em;
	}
	/*Loading text */
	.container-preloader .animation-preloader .txt-loading {
	  font: bold 2em 'Montserrat', sans-serif;
	}}
.origin{text-decoration:none;
font-size:45px;}



	</style>
</head>
<body onload="myFunction()" class="bg-light">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	
        <!--NAVBAR_START-->
        <nav class="navbar navbar-expand-md" style="background:#EEEEEE;">
            <a href="" class="navbar-brand"><img class="im" src="img/logo1.png" alt=""></a>
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#bt">
                <i class="fa fa-bars mt-0" aria-hidden="true" style="font-size: 20px;"></i>
            </button>
            <div class="collapse navbar-collapse" id="bt">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="darshil.php" class="nav-link" style="font-size:20px;color:#176B87;"><i class="fa fa-home" aria-hidden="true" style="font-size: 20px;font-weight: bold;"></i> HOME</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link hu"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i> ABOUT</a>
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

		<div class="col-md-12 p-0" style="background-image: url(img/all.jpg);background-size: 100% 100%;height: 100%;">
            <div class="col-md-12" style="background-color: black;opacity: 0.5;">
			<div class="col-md-12">
				<div style="height:50px;width: 100%;"></div>
			
				<div class="col-md-6 display-3 text-info font-weight-bold col-sm-12">
					<span> Beautiful rental furniture.</span>
				</div>
			
				<div class="col-md-6 text-light mt-4 col-12">
					<p>Beautify your home or office effortlessly with our stunning, rentable furniture.</p>
				</div>
				<div style="height:50px;width: 100%;"></div>
			</div>
        </div>
		</div>


		

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 col-12 mt-4">
					<img src="img/men.jpg" style="height:100%;width:100%;border-radius: 20px;">
				</div>
				<div class="col-md-6 col-12">
					<div style="height:100px;width: 100%;">
					
					</div>
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


	<div class="col-md-12 mt-5" style="background-color: #F1F1EF;">
		<div class="row">
			<div class="col-md-12 col-sm-12 p-5">
				<h3 class="" style="text-align:center;">Types of Furnitures</h3>
				<p class="" style="text-align:center;">Let’s learn about the different types of Furnitures options you can rent depending on your requirements.</p>
			</div>
			<div class="col-md-3 col-sm-3 p-5 col-12">
				<span style="color:orange;">01.</span>
				<h3 class="text-secondary pt-2"> Sofa</h3>
				<p class="text-secondary">A staple for comfort and style in living rooms, available in various sizes and designs to suit different spaces.</p>
				<hr class="pt-5">
				<span class="" style="color:orange;">02.</span>
				<h3 class="text-secondary pt-2"> Bed</h3>
				<p class="text-secondary"> Essential for rest and relaxation, offering options from simple frames to luxurious upholstered designs.</p>
                <hr class="pt-5">
				<span class="" style="color:orange;">03.</span>
				<h3 class="text-secondary pt-2"> Dinning <Table></Table></h3>
				<p class="text-secondary">Central to dining areas, providing a gathering space for meals and conversations, available in different shapes and materials.</p>
			</div>
			<div class="col-md-6 col-sm-6 col-12 p-5">
				<img src="img/chaircir.png" class="custom-img" style="height:80%;width:80%;" alt="image">
			</div>
			<div class="col-md-3 col-sm-3 col-12 p-5" style="text-align:right;">
				<span style="color:orange;">04.</span>
				<h3 class="text-secondary pt-2">Wardrobe</h3>
				<p class="text-secondary"> Provides storage for clothing and accessories, available in various configurations to fit different storage needs.</p>
				<hr class="pt-5">
				<span class="" style="color:orange;">05.</span>
				<h3 class="text-secondary pt-2">Dresser</h3>
				<p class="text-secondary">Offers storage for clothing and accessories in bedrooms, combining functionality with aesthetic appeal.</p>
                <hr class="pt-5">
				<span class="" style="color:orange;">06.</span>
				<h3 class="text-secondary pt-2">Bookcase</h3>
				<p class="text-secondary"> Organizes and displays books, decor, and personal items, available in different sizes and styles to fit any room.</p>
			</div>
		</div>
	</div>

 <!-- Products section -->
 <?php
$conn = mysqli_connect("localhost", "root", "", "tsub");
$select_product = "SELECT * FROM products";
$selectProduct = mysqli_query($conn, "SELECT * FROM products");

if (!$selectProduct) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <main>
    <div class="container">
            <div class="row">
                <?php
                if (mysqli_num_rows($selectProduct) > 0) {
                    while ($sel_product = mysqli_fetch_assoc($selectProduct)) {
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                            <div class="product-card p-0">
                                <div class="product-image" style="background-image: url('image/<?php echo $sel_product['image']; ?>');">
                                    <div class="transp">
                                        <div style="height: 120px;"></div>
                                        <center>
                                            <button class="btn50" onclick="addToCart(<?php echo $sel_product['id']; ?>, '<?php echo $sel_product['name']; ?>', '<?php echo $sel_product['description']; ?>', '<?php echo $sel_product['image']; ?>', <?php echo $sel_product['price']; ?>)">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn50" onclick="addToWishlist(<?php echo $sel_product['id']; ?>, '<?php echo $sel_product['name']; ?>', '<?php echo $sel_product['description']; ?>', '<?php echo $sel_product['image']; ?>', <?php echo $sel_product['price']; ?>)">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </button>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <h4 class="h45"><?php echo $sel_product['name']; ?></h4>
                                </div>
                                <div class="col-md-12 text-secondary" style="text-align: center;">
                                    <span><?php echo $sel_product['description']; ?></span>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6 pt-2">
                                            <span>₹ <?php echo $sel_product['price']; ?></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 pb-4">
                                            <button class="bt11" onclick="addToPayment(<?php echo $sel_product['id']; ?>, '<?php echo $sel_product['name']; ?>', '<?php echo $sel_product['description']; ?>', '<?php echo $sel_product['image']; ?>', <?php echo $sel_product['price']; ?>)">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                <span>Rent Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>No products found.</p>";
                }
                ?>
            </div>
        </div>
     
	
	
	

	<!--CUSTOMER REVIEW-->

	<div style="height:50px;width:100%;"></div>
	<div class="col-md-12 display-4" style="text-align:center;">
		<span>Our Customer Speak For Us</span>
	</div>

	<div class="container">
    <div class="col-md-12 mt-3">
        <div class="row">
        <div class="col-md-4 mt-5">
            <div class="col-md-12 p-5" style="border: 1px solid black;">
                <div class="col-md-12 p-2" style="color: rgb(174, 174, 36);">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-12 p-2">
                    <p>“"Experience the comfort and style of our rented furniture, perfect for enhancing any space with elegance and functionality."”</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-1 p-2 col-1">
                        <img src="img/24.jpg" alt="" style="border-radius:50%;">
                    </div>
                    <div class="col-md-8 ml-3 col-9">
                        Jones 
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 mt-5">
            <div class="col-md-12 p-5"  style="border: 1px solid black;">
                <div class="col-md-12 p-2" style="color: rgb(174, 174, 36);">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-12 p-2">
                <p>“"Experience the comfort and style of our rented furniture, perfect for enhancing any space with elegance and functionality."”</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-1 p-2 col-1">
                        <img src="img/22.jpg" alt="" style="border-radius:50%;">
                    </div>
                    <div class="col-md-8 ml-3 col-9">
                    Abc
                    </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 mt-5">
            <div class="col-md-12 p-5"  style="border: 1px solid black;">
                <div class="col-md-12 p-2" style="color: rgb(174, 174, 36);">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-12 p-2">
                <p>“"Experience the comfort and style of our rented furniture, perfect for enhancing any space with elegance and functionality."”</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-1 p-2 col-1">
                        <img src="img/23.jpg" alt="" style="border-radius:50%;">
                    </div>
                    <div class="col-md-8 ml-3 col-9">
                        James core
                    </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    </div>   
    </div> 

    <div class="col-md-12 text-secondary mt-4 mb-5" style="text-align: center;">
        <h6>4.8 average rating from 1814 reviews</h6>
    </div>
<!-- Fluid div close -->
</div> 

    <!-- Big Image -->

    
    </div>
    <!--Footer Start-->
    <?php include 'footer.php'; ?>

    <!--Footer End-->

<!--Preloader-->
<script>
    $(document).ready(function() {
        setTimeout(function() {
          $('#container').addClass('loaded');
          if ($('#container').hasClass('loaded')) {
            $('#preloader').delay(9000).queue(function() {
              $(this).remove();
            });}
        }, 3000);});

    function addToCart(id, name, description, image, price) {
        const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

        const existingItem = cartItems.find(item => item.id === id);
        if (existingItem) {
            const modalContent = `
                <div class="modal-overlay">
                    <div class="confirmation-modal">
                        <p>Product is already in the cart.</p>
                        <button onclick="redirectToCartPage()">View Cart</button>
                        <button onclick="closeModal()">Close</button>
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalContent);
            return;
        }

        cartItems.push({ id, name, description, image, price });

        sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

        const successModalContent = `
            <div class="modal-overlay">
                <div class="confirmation-modal">
                    <p>Product added to cart successfully!</p>
                    <button onclick="redirectToCartPage()">View Cart</button>
                    <button onclick="closeModal()">Stay Here</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', successModalContent);
    }


    function redirectToCartPage() {
        window.location.href = 'cart1.php';
    }

 
    function addToWishlist(id, name, description, image, price) {
        const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

        const existingItem = wishlistItems.find(item => item.id === id);
        if (existingItem) {
            const modalContent = `
                <div class="modal-overlay">
                    <div class="confirmation-modal">
                        <p>Product is already in the wishlist.</p>
                        <button onclick="redirectToWishlistPage()">Go to Wishlist</button>
                        <button onclick="closeModal()">Stay Here</button>
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalContent);
            return;
        }

        wishlistItems.push({ id, name, description, image, price });

        localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));

        const successModalContent = `
            <div class="modal-overlay">
                <div class="confirmation-modal">
                    <p>Product added to wishlist successfully!</p>
                    <button onclick="redirectToWishlistPage()">Go to Wishlist</button>
                    <button onclick="closeModal()">Close</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', successModalContent);
    }


       function redirectToWishlistPage() {
        window.location.href = 'wishlist.php';
    }



    function addToPayment(id, name, description, image, price) {
    const paymentItems = JSON.parse(sessionStorage.getItem('paymentItems')) || [];

    const existingItem = paymentItems.find(item => item.id === id);

    if (existingItem) {
        const modalContent = `
            <div class="modal-overlay">
                <div class="confirmation-modal">
                    <p>Product is already in the Payment.</p>
                    <button onclick="redirectToPayment()">Go to Payment</button>
                    <button onclick="closeModal()">Stay Here</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', modalContent);
        return;
    }

    paymentItems.push({ id, name, description, image, price });

    sessionStorage.setItem('paymentItems', JSON.stringify(paymentItems));

    const productDetails = { id, name, description, image, price };
    sessionStorage.setItem('paymentProduct', JSON.stringify(productDetails));

    window.location.href = 'payment.php';
}

function closeModal() {
    const modalOverlay = document.querySelector('.modal-overlay');
    if (modalOverlay) {
        modalOverlay.remove();
    }
}

function redirectToPayment() {
    window.location.href = 'payment.php';
}

    function closeModal() {
        const modalOverlay = document.querySelector('.modal-overlay');
        if (modalOverlay) {
            modalOverlay.parentNode.removeChild(modalOverlay);
        }
    }

</script>
</body>
</html>

