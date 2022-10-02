<?php
session_start();
require_once('includes/config.php');
require_once('includes/function.php');
global $con;

if (isset($_POST['login'])) {
    $valid = true;
    $email = testInput($_POST['logindetail']);
    if (empty($email)) {
        $error_email = "Email harus diisi";
        $valid = false;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Format email salah";
            $valid = false;
        }
    }

    $password = md5($_POST['userpassword']);
    if (empty($password)) {
        $error_password = "Password harus diisi";
        $valid = false;
    }
    $query = mysqli_query($con, "SELECT mobileNumber, emailId, id FROM tblregistration WHERE (emailId='$email' || mobileNumber='$email') && userPassword='$password' ");
    $result = mysqli_fetch_array($query);

    // Cek apakah
    if ($result > 0 && $valid) {
        $_SESSION['edmsid'] = $result['id'];
        $_SESSION['uemail'] = $result['emailId'];
        echo "<script>window.location.href='dashboard.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <title>Diary Management System</title>
    <!--  My CSS  -->
    <link href="css/styles.css" rel="stylesheet"/>

    <!--  Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
          integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!--  cdn js  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!--  google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
          rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        #bglogin {
            background: linear-gradient(to bottom left, rgba(2, 0, 36, 1) 0%, rgba(51, 255, 198, 1) 0%, rgba(0, 212, 255, 1) 100%);
            filter: blur(6px);
            -webkit-filter: blur(6px);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>
<body>
<div id="bglogin">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <h3 class="text-center font-weight-light my-4">Welcome Back</h3>
                <i class="fa-solid fa-book"></i>
                <div class="card-body">
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="text" name="logindetail"
                                   placeholder="Registered Email id / Mobile Number"/ <?php if (isset($email)) echo $email; ?>
                            >
                            <label for="inputEmail">Email address / Mobile Number</label>
                        </div>
                        <div>
                            <p style="font-style: italic; color: red; font-weight: bold"><?php if (isset($error_email)) echo $error_email; ?></p>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" type="password"
                                   placeholder="Password" name="userpassword"/>
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password-recovery.php">Forgot Password?</a>
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="registration.php">Need an account? Sign up!</a></div>
                    <hr/>
                    <div class="small"><a href="index.php" style="text-decoration: none">Back to Home Page</a></div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>
</html>
