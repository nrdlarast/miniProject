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

    </style>

    <!--  Font Awesome  -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="bg"></div>
<div class="container">
    <div class="card" style="box-shadow: #6c757d">
        <div class="card-header">
            <h1 class="text-center">Diary</h1>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-6">
                    <a href="login.php" class="btn btn-primary btn-block">Login</a>
                </div>
                <div class="col-md-6">
                    <a href="registration.php" class="btn btn-success btn-block">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>
