<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="zh-Hant-TW">

<title>toLife</title>
<link rel="shortcut icon" type="image/x-icon" href="../image/Bridge.ico">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/php-index.css">
<script src="../js/index.js"></script>
<link href="https://fonts.googleapis.com/css?family=Amaranth|Orbitron" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<body>
<div class="cover_background">
    <div id="demo" class="carousel slide" data-ride="carousel" style="width: 70%;overflow: hidden">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../blog_date/poto/2-1.JPG" alt="miss1">
            </div>
            <div class="carousel-item">
                <img src="../blog_date/poto/1-1-1.jpg" alt="miss2">
            </div>
            <div class="carousel-item">
                <img src="../blog_date/poto/1-1-3.jpg" alt="miss3">
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
    <form method="post" action="index.php" class="cover_login">
        <h2>Hi Traveler</h2>
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
        <label for="register"><a href="./account.html">register now</a></label>
        <label for="forget"><a href="./forget.html">forget password?</a></label>
    </form>
</div>
</body>
</html>
