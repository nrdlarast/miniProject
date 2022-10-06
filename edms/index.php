<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diary | Landing Page</title>

    <!--  Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--  My CSS  -->
    <link href="css/styles.css" rel="stylesheet"/>
    <style>
        body{
            height: 100%;
        }
        * {
            box-sizing: border-box;
        }
        .bg {
            background-image: url("assets/img/bg.jpg");
            /* background-color: rgb(233, 233, 233); */
            
            /* background-color: white; */

            filter: blur(6px);
            -webkit-filter: blur(6px);

            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .col.colog {
            background-color: white;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-left: 10px;
            margin-right: 10px;

        }
        .colog {
            border-radius: 20px;
        }

    </style>

    <!--  Font Awesome  -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="bg"></div>
<div class="container">
    <div class="" style="box-shadow: #6c757d">
        <!-- <div class="card-header">
            <h1 class="text-center">Diary</h1>
        </div> -->
        <!-- <div class="card-body"> -->
        <div class="">
            <div class="row text-center">
            <div class="row">
                <div class="col colog">
                <a href="login.php" class="">
                    <img src="assets/img/log.jpg" style="width: 442.43px;height: 380px; padding-bottom: 20px;">
                    <h1>LOGIN</h1>
                </a>
                </div>

                <div class="col-1">
                </div>

                <!-- <div class="col colog">
                <a href="register.php" class="btn btn-primary btn-block">Register</a>
                </div> -->
                <div class="col colog">
                <a href="register.php" class="">
                    <img src="assets/img/reg.jpg" style="width: 493.96px;height: 380px; padding-bottom: 20px;">
                    <h1>REGISTER</h1>
                </a>
                </div>
            </div>
                <!-- <div class="col-md-12"> -->
                <!-- <div class="col-12">
                    <a href="login.php" class="btn btn-primary btn-block">Login</a>
                </div> -->
                <!-- <div class="col-md-12"> -->
                <!-- <div class="col-12">
                    <a href="login.php" class="btn btn-primary btn-block">Register</a>
                </div> -->
            <!-- </div> -->
        </div>

        <!-- <div class="card-body">
            <div class="row text-center">
                <div class="col-md-12">
                    <a href="login.php" class="btn btn-primary btn-block">Register</a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>
