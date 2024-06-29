
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-image: url("https://cdn.pixabay.com/animation/2023/02/13/09/42/09-42-58-584_512.gif");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100vw;
            height: 100vh;
            font-family: poppins;
            font-size: 16px;
            color: #fff;
            background-color: #222;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px #000;
            width: 100%;
            max-width: 400px;
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
            position: relative;
        }
        .form-box input[type=checkbox] {
            display: none;
        }
        .form-box label {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .form-box label i {
            color: #aaa;
        }
        .form-box span {
            font-size: 14px;
            display: block;
            margin-top: 10px;
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="header-text">
                Login Form
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input placeholder="Your Email Address" type="text" name="email" required><br>
                <div style="position: relative;">
                    <input placeholder="Your Password" type="password" name="password" id="password" required>
                    <label for="toggle-password">
                        <i class="fa fa-eye" aria-hidden="true" onclick="togglePasswordVisibility()"></i>
                    </label>
                </div>
                <input id="terms" type="checkbox">
                <label for="terms"></label>
                <span>Agree with <a href="#">Terms & Conditions</a></span>
                <button type="submit">Login</button>
            </form>
            <a href="register_form.php" style="border:15px rounded black;padding:8px;color:white;">Are You Not Registered?</a>
            <a href="login_manufactor.php" style="border:15px rounded black;padding:8px;color:white;">Login</a>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.querySelector(".form-box label i");

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
