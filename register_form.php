<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: poppins;
            font-size: 16px;
            color: #fff;
        }

        .form-box {
            background-color: rgba(0, 0, 0, 0.5);
            margin: 10px auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px #000;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 800px;
            height: 1050px;
        }

        .form-box:before {
            background-image: url("https://i.postimg.cc/8cnYLpfc/ddddd.jpg");
            /*background: #f3f3fe;*/
            width: 100%;
            height: 100%;
            background-size: cover;
            content: "";
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
            display: block;
            filter: blur(0px);
        }

        .form-box .header-text {
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }

        .form-box input {
            margin: 10px 0px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            font-family: poppins;
        }

        .form-box input[type=checkbox] {
            display: none;
        }

        .form-box label {
            position: relative;
            margin-left: 5px;
            margin-right: 10px;
            top: 5px;
            display: inline-block;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .form-box label:before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 5px;
            position: absolute;
            left: 0;
            bottom: 1px;
            background-color: #ddd;
        }

        .form-box input[type=checkbox]:checked+label:before {
            content: "\2713";
            font-size: 20px;
            color: #000;
            text-align: center;
            line-height: 20px;
        }

        .form-box span {
            font-size: 14px;
        }

        .form-box button {
            background-color: deepskyblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            padding: 10px;
            margin: 20px 0px;
        }

        span a {
            color: #BBB;
        }

        /* Popup box */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            padding: 20px;
            z-index: 1000;
            display: none;
            animation: fadeIn 0.5s ease-in-out;
            /* Apply fade-in animation */
        }

        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            color: #000;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
        .toggle-password {
             position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;    
        }
        .toggle-password i {
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="form-box">
                <div class="header-text">
                    Registration
                </div>
                <form method="POST" action="http://localhost/TSUB/register_api.php">
                    <input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="First Name" type="text" name="firstname" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" required title="Enter your first name">
<input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="Last Name" type="text" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" required title="Enter your last name">
<input class="col-md-5 col-sm-5 col-6 ml-4" placeholder="Enter Email" type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required title="Enter a valid email address">
                    <!--<input class="col-md-5 col-sm-5 col-4 ml-4" placeholder="Enter Password" type="password" name="password" required title="Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character">-->
                    <div style="position: relative;">
                    <input class="col-md-5 col-sm-5 col-6 ml-4" placeholder="Enter Password" type="password" name="password" id="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>" required title="Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character">
                        <span class="toggle-password" onclick="togglePasswordVisibility()">
                            <!-- Font Awesome eye icon for visibility -->
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input class="col-md-5 col-sm-5 col-12 ml-4" placeholder="Enter Contact" type="number" name="contact" value="<?php echo isset($_POST['contact']) ? htmlspecialchars($_POST['contact']) : ''; ?>" required title="Enter your contact number (10 digits)">
<input class="col-md-5 col-sm-5 col-12 ml-4" placeholder="Enter Addressline_1" type="text" name="addressline1" value="<?php echo isset($_POST['addressline1']) ? htmlspecialchars($_POST['addressline1']) : ''; ?>" required title="Enter your address line 1">
<input class="col-md-5 col-sm-5 col-12 ml-4" placeholder="Enter Addressline_2" type="text" name="addressline2" value="<?php echo isset($_POST['addressline2']) ? htmlspecialchars($_POST['addressline2']) : ''; ?>" title="Enter your address line 2">
<input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="Enter City" type="text" name="city" value="<?php echo isset($_POST['city']) ? htmlspecialchars($_POST['city']) : ''; ?>" required title="Enter your city">
<input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="Enter State" type="text" name="state" value="<?php echo isset($_POST['state']) ? htmlspecialchars($_POST['state']) : ''; ?>" required title="Enter your state">
<input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="Enter LandMark" type="text" name="landmark" value="<?php echo isset($_POST['landmark']) ? htmlspecialchars($_POST['landmark']) : ''; ?>" required title="Enter a landmark near your location">
<input class="col-md-5 col-sm-5 col-5 ml-4" placeholder="Enter Pincode" type="number" name="pincode" value="<?php echo isset($_POST['pincode']) ? htmlspecialchars($_POST['pincode']) : ''; ?>" required title="Enter your pincode (6 digits)">
                    <!-- <input class="col-md-5 col-sm-5 col-12 ml-4" placeholder="Enter Image" type="file" name="file">-->
                    <!-- Add more input fields for other form elements with appropriate validation -->
                    <button class="m-col-0" type="submit" name="submit">Confirm Details</button>
                </form>
                <a href="login.php" style="border:15px rounded black;padding:8px;color:white;">Are You Already Registerd in?</a>
                <a href="manufactor.php" style="border:15px rounded black;padding:8px;color:white;">Want to Be a part of TSUB?</a>
                <a href="darshil.php" style="border:15px rounded black;padding:8px;color:white;">Goto Home</a>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Registration Successful!</h2>
            <p>Your registration has been successfully completed.</p>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        function showHint(hint) {
        alert(hint); 
    }

        <?php if (isset($_POST['submit']) && mysqli_query($conn, $sql)) { ?>
            document.getElementById("popup").style.display = "block";
        <?php } ?>

        
        function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleIcon = document.querySelector(".toggle-password i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
    </script>

  

</body>

</html>




