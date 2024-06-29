<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 100px;
            width: 100%;
            max-width: 400px;
        }

        .header-text {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-login {
            width: 100%;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="form-box">
            <div class="header-text">
              Manufacturer Login
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input class="form-control" placeholder="Enter Email" type="email" name="email">
                <input class="form-control" placeholder="Enter Password" type="password" name="password">
                <button type="submit" class="btn-login">Login</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = validate_input($_POST["email"]);
                $password = validate_input($_POST["password"]);

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tsub";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM manufactor WHERE email='$email' AND password='$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    header("Location: admin.php");
                    exit;
                } else {
                    echo "<div class='error'>Invalid email or password.</div>";
                }

                $conn->close();
            }

            function validate_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
        </div>
    </div>
  </div>
</body>
</html>
