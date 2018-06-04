<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>toLife welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">
    <link rel="shortcut icon" type="image/x-icon" href="../image/Bridge.ico">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amaranth|Orbitron" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/php-index.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8" style="padding: 0;">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../image/HomeDoor.jpg" alt="miss1">
                    </div>
                    <div class="carousel-item">
                        <img src="../image/HomeDoor.jpg" alt="miss2">
                    </div>
                    <div class="carousel-item">
                        <img src="../image/HomeDoor.jpg" alt="miss3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4" style="background-color:#ffafc2;padding: 5%">
            <form id="login_form" method="post" action="123.php">
                <h2>Hi Traveler</h2><br><br>
                <div class="form-group" style="text-align: center;">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group" style="text-align: center;">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div><br>

                <button type="submit" class="btn btn-primary btn-block" >Login</button>
                <button type="button" class="btn btn-secondary btn-block" >Go</button><br>
                <a href="./account.html">register now</a><br>
                <a href="./forget.html">forget password?</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
