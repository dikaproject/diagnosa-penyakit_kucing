<?php
include "ceklogin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login
    $error = validateLogin($username, $password);
    if (empty($error)) {
        // Redirect to the dashboard or another page upon successful login
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Sistem Pakar FC V2</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Form</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Login to Your Account</h3>
                        <form action="" method="POST" class="signin-form">
                            <div class="form-group has-feedback">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login"
                                    class="form-control btn btn-primary submit px-3">Login</button>
                            </div>
                            <?php
                            if (!empty($error)) {
                                echo '<div class="alert bg-danger text-center" role="alert">' . $error . '</div>';
                            }
                            ?>
                        </form>
                        <p class="text-center">
                            <a href="formregister.php" style="color: #fff">Belum punya akun? Daftar disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include the necessary JavaScript scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
