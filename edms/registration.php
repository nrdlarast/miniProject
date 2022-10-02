<?php
require_once ('includes/config.php');
require_once ('includes/function.php');

global $con;

if (isset($_POST['submit'])) {
    $fname = testInput($_POST['fname']);
    $lname = testInput($_POST['lname']);
    $emailid = testInput($_POST['emailid']);
    $mobileno = testInput($_POST['mobileno']);
    $npwd = md5($_POST['newpassword']);

    $retrieve = mysqli_query($con, "select id from tblregistration where emailId='$emailid' || mobileNumber='$mobileno'");
    $count = mysqli_num_rows($retrieve);
    if($count == 0){
        if(empty($fname) || empty($lname) || empty($emailid) || empty($mobileno) || empty($npwd)){
            $error_input = "All fields are required";

        }else{
            $query = mysqli_query($con, "insert into tblregistration(firstName,lastName,emailId,mobileNumber,userPassword) values('$fname','$lname','$emailid','$mobileno','$npwd')");
            if ($query) {
                echo "<script>alert('Registration successfull. Please login now');</script>";
                echo "<script>window.location.href ='login.php'</script>";
            } else {
                echo "<script>alert('Something went wrong. Please try again');</script>";
                echo "<script>window.location.href ='registration.php'</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>e Diary Management System | Register </title>

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
    <style>
        #background {
            background: linear-gradient(to top right, hsla(235, 100%, 78%, 1) 0%, hsla(222, 77%, 33%, 1) 100%);
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

        .row img {
            width: 250px;
            height: 250px;
            margin-top: 100px;
        }

        .form-group {
            margin-bottom: 1rem;
            margin-top: 2rem;
            padding-left: 2rem;
            padding-right: 2rem;
        }
    </style>
</head>
<body>
<div id="background"></div>
<div class="container">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <img src="../../diary/edms/assets/img/register.jpg" alt="register">
                </div>
                <div class="col-md-7">
                    <form name="registration" method="post" onSubmit="return valid();">
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" name="fname"
                                   placeholder="&#xf007  First Name"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lname" name="lname"
                                   placeholder="&#xf007   Last Name"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailid" name="emailid"
                                   placeholder="&#xf0e0   Email"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobileno" name="mobileno"
                                   placeholder="&#xf3cd   Mobile Number"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="newpassword" name="newpassword"
                                   placeholder="&#xf023   Password"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                                   placeholder="&#xf023   Confirm Password"
                                   style="font-family: poppins, FontAwesome; font-weight: 500">
                        </div>
                        <div class="err" style="font-style: italic; color: red">
                            <?php if(isset($error_input)) echo $error_input ;?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript">
    function valid() {
        if (document.registration.newpassword.value != document.registration.confirmpassword.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.registration.confirmpassword.focus();
            return false;
        }
        return true;
    }
</script>
</body>
</html>
