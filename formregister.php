<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namaLengkap = $_POST['nama_lengkap'];
    $level = "User"; // Set level ke "User"

    // Check if the username is available
    $checkUsername = mysqli_query($con, "SELECT * FROM pengguna WHERE username='$username'");
    if (mysqli_num_rows($checkUsername) > 0) {
        $error = "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Insert the user data into the database
        $insertUser = mysqli_query($con, "INSERT INTO pengguna (nama_lengkap, username, password, level) VALUES ('$namaLengkap', '$username', '$password', '$level')");

        if ($insertUser) {
            // Redirect to the login page or another page upon successful registration
            header("Location: index.php");
            exit();
        } else {
            $error = "Gagal mendaftarkan pengguna. Silakan coba lagi.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Registration Form</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Create an account</h3>
                        <form action="" method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="form-control btn btn-primary submit px-3">Register</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="formlogin.php" style="color: #fff">Login Akun (jika punya)</a>
                                </div>
                            </div>
                        </form>
                        <?php if (!empty($error)) : ?>
                            <div class="error-message"><?php echo $error; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
