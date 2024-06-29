<?php
session_start();

$fullnameErr = $emailErr = $passwordErr = $confirm_passwordErr = $addressErr = $contactErr = $gstnumberErr = "";
$fullname = $email = $password = $confirm_password = $address = $contact = $gstnumber = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["full_name"])) {
        $fullnameErr = "Full name is required";
    } else {
        $fullname = test_input($_POST["full_name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
    if (empty($_POST["confirm_password"])) {
        $confirm_passwordErr = "Confirm password is required";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
        if ($password !== $confirm_password) {
            $confirm_passwordErr = "Passwords do not match";
        }
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    if (empty($_POST["contact"])) {
        $contactErr = "Contact is required";
    } else {
        $contact = test_input($_POST["contact"]);
    }

    if (empty($_POST["gst_number"])) {
        $gstnumberErr = "GST Number is required";
    } else {
        $gstnumber = test_input($_POST["gst_number"]);
    }

    if (empty($fullnameErr) && empty($emailErr) && empty($passwordErr) && empty($confirm_passwordErr) && empty($addressErr) && empty($contactErr) && empty($gstnumberErr)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tsub";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $check_sql = "SELECT * FROM manufactor WHERE email = '$email'";
        $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            $emailErr = "Email already registered";
        } else {
            $sql = "INSERT INTO manufactor (full_name, email, password,confirm_password, address, contact, gst_number) 
                    VALUES ('$fullname', '$email', '$password','$confirm_password', '$address', '$contact', '$gstnumber')";

            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Registration successful"); window.location.href = "admin.php";</script>';
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Manufacturer Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name:</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $fullname; ?>">
                                <span class="error"><?php echo $fullnameErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                <span class="error"><?php echo $emailErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <span class="error"><?php echo $passwordErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                <span class="error"><?php echo $confirm_passwordErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
                                <span class="error"><?php echo $addressErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact:</label>
                                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact; ?>">
                                <span class="error"><?php echo $contactErr; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="gst_number" class="form-label">GST Number:</label>
                                <input type="text" class="form-control" id="gst_number" name="gst_number" value="<?php echo $gstnumber; ?>">
                                <span class="error"><?php echo $gstnumberErr; ?></span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <a href="login_manufactorer.php">Already have an account? Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>