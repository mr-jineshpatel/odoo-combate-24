<?php
$conn = mysqli_connect("localhost", "root", "", "tsub");
$select_product = "SELECT * FROM products";
$selectProduct = mysqli_query($conn, $select_product);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fevicon Icon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
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
        .hu {
            font-size: 20px;
            color: black;
        }

        .hu:hover {
            color: #ffc600;
            transition: 0.5s;
        }

        .im {
            height: 70px;
            width: 100%;
        }

        .box .hide {
            display: none;
        }

        .box:hover .hide {
            display: block;
        }

        .h6 {
            border-bottom: 2px solid orange;
        }

        .h6:hover {
            color: black;
        }

        .a {
            border-bottom: 1px solid orange;
            color: #080202;
        }

        .a:hover {
            color: black;
        }

        .orange:hover {
            color: orange;
        }

        .sb {
            background: #6e7051;
            color: white;
            height: 50px;
            width: 230px;
            font-size: 20px;
        }

        .sb:hover {
            background: black;
            color: white;
        }
        .hide1 {
            display: none;
        }

        @media(max-width:1100px) {

            .hide {
                display: none;
            }
        }

        @media(max-width:770px) {
            .hide1 {
                display: inline-block;
            }

        }

        .hu {
            font-size: 20px;
            color: black;
        }

        .hu:hover {
            color: #176B87;
            transition: 0.5s;
        }

        .hu1:hover {
            color: #ffc600;
            transition: 1s;
        }

        .blue {
            height: 100%;
            width: 100%;
            background: #07294dd2;
        }

        .bt5:hover {
            background: #ffc600;
            transition: 1s;
            border: none;
        }

        .bt6 {
            background: #021d3a;
            color: white;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            border: 0;
        }

        .bt6:hover {
            color: #021d3a;
            background: #ffc600;
            transition: 1s;
        }

        .sp3 {
            color: white;
        }

        .sp3:hover {
            color: #ffc600;
            margin-left: 15px;
            transition: 1s;
        }

        .sp4 {
            color: white;
        }

        .sp4:hover {
            color: #ffc600;
            margin-left: 10px;
            transition: 1s;
        }

        .bt11 {
            height: 40px;
            width: 100%;
            font-size: 15px;
            border: none;
            background: #ffc600;
            color: #07294d;
            border-radius: 5px;
        }

        .bt11:hover {
            color: #ffc600;
            background: #07294d;
            transition: 0.5s;
        }

        .blue3:hover {
            background: #07294da4;
            transition: 1s;
        }

        .h45:hover {
            color: #ffc600;
        }

        .transp {
            height: 100%;
            width: 100%;
        }

        .transp:hover {
            background: #021d3acb;
            transition: 0.5s;
        }

        .btn50 {
            height: 50px;
            width: 50px;
            border: 1px solid #ffc600;
            color: #ffc600;
            font-size: 20px;
            background: transparent;
        }

        .btn50:hover {
            background: #ffc600;
            color: #07294d;
            border: 1px solid #07294d;
        }

        .bg button {
            display: none;
        }

        .bg:hover button {
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
                    <a href="product.php" class="nav-link" style="font-size:20px;color:#176B87;"><i class="fa fa-archive" aria-hidden="true" style="font-size: 20px;"></i> PRODUCT</a>
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
    <div class="col-md-12 p-0" style="background-image: url(img/th.jpeg);background-size: 100% 100%;height: 100%;">
        <div class="col-md-12" style="background-color: black;opacity: 0.5;">
            <div class="col-md-12">
                <div style="height:200px;width: 100%;">
                </div>
                <div class="col-md-12 text-light mt-4 col-12 text-center">
                    <p class="display-3 text-warning"> Products </p>
                </div>
                <div style="height:200px;width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!--ENDS BACKGROUND IMG-->

    </head>

    <body>
  <!-- Products section -->
  <div class="col-md-12">
        <div class="container">
            <div class="row">
                <?php
                if (mysqli_num_rows($selectProduct)) {
                    while ($sel_product = mysqli_fetch_assoc($selectProduct)) {
                ?>
                        <div class="col-md-4 mt-4">
                            <div class="col-md-12 col-sm-12 col-12 bg-light p-0">
                                <div class="col-md-12 p-3 bg">
                                    <div class='col-md-12 p-0' style="background-image: url('image/<?php echo $sel_product['image']; ?>'); background-size: 100% 100%; height: 300px;">
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
                                            <button class="bt11">
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
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End products section -->

    <script>
    function addToCart(id, name, description, image, price) {
        const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

        const existingItem = cartItems.find(item => item.id === id);
        if (existingItem) {
            alert('Product is already in the cart.');
            return;
        }

        cartItems.push({ id, name, description, image, price });

        sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

        const modalContent = `
            <div class="confirmation-modal">
                <p>Product added to cart successfully!</p>
                <button onclick="redirectToCartPage()">View Cart</button>
                <button onclick="closeModal()">Stay Here</button>
            </div>
        `;
        showModal(modalContent);
    }

   function addToWishlist(id, name, description, image, price) {
    const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

    const existingItem = wishlistItems.find(item => item.id === id);
    if (existingItem) {
        alert('Product is already in the wishlist.');
        return;
    }

    wishlistItems.push({ id, name, description, image, price });

    localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));

    const modalContent = `
        <div class="confirmation-modal">
            <p>Product added to wishlist successfully!</p>
            <button onclick="redirectToWishlistPage()">Go to Wishlist</button>
            <button onclick="closeModal()">Stay Here</button>
        </div>
    `;
    showModal(modalContent);
}



    function showModal(content) {
        const modalOverlay = document.createElement('div');
        modalOverlay.classList.add('modal-overlay');
        modalOverlay.innerHTML = content;
        document.body.appendChild(modalOverlay);
    }

    function redirectToCartPage() {
        window.location.href = 'cart1.php';
    }

    function redirectToWishlistPage() {
        window.location.href = 'wishlist.php';
    }

    function closeModal() {
        const modalOverlay = document.querySelector('.modal-overlay');
        modalOverlay.parentNode.removeChild(modalOverlay);
    }
</script>

        <!--Footer Start-->
        <?php include 'footer.php'; ?>
        <!--Footer End-->
    </body>

</html>