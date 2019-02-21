<!DOCTYPE html>
<html>

<head>
	<title>home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../font/css/font-awesome.min.css">
    <script type="text/javascript"  src="../js/javascript.js"></script>

</head>

<body>
	<div class="wrapper">
		<?php require('../layout/header.php') ?>
		<div class="main-content">

		<?php require('../layout/header_top.php') ?>
        <?php require('../layout/header_menu.php') ?>
        <div class="main-slider">
                <div class="main-slider__menu">
                    <label for="slide-dot-1"></label>
                    <label for="slide-dot-2"></label>
                    <label for="slide-dot-3"></label>
                </div>

                <input id="slide-dot-1" type="radio" name="slides" checked>
                <div class="slide slide-1">

                    <div class="slider-content">
                        <p>NEW ACCEASCORRI COLLECTION</p>
                        <h3>SPRING ESSENTIALS</h3>
                        <a href="">SHOP WOMEN ACCESSORIES</a>
                    </div>
                </div>

                <input id="slide-dot-2" type="radio" name="slides">
                <div class="slide slide-2"></div>

                <input id="slide-dot-3" type="radio" name="slides">
                <div class="slide slide-3"></div>
            </div>

            <div class="container blog-hot">
                <hr class="blog-hot__hr-text" data-content="WHATS NEW">
                <div class="blog-hot__new">

                    <div class="blog-hot__new--box">
                        <img src="../img/img_hproduc3.jpg" alt="">
                        <div class="title">
                            <h3>BLACK & WHITE</h3>
                            <p>SPRING COLLECTION 2016</p>
                        </div>
                    </div>
                    <div class="blog-hot__new--box">
                        <img src="../img/img_hproduc2.jpg" alt="">
                        <div class="title">
                            <h3>BLACK & WHITE</h3>
                            <p>SPRING COLLECTION 2016</p>
                        </div>
                    </div>
                    <div class="blog-hot__new--box">
                        <img src="../img/img_hproduc1.jpg" alt="">
                        <div class="title">
                            <h3>BLACK & WHITE</h3>
                            <p>SPRING COLLECTION 2016</p>
                        </div>
                    </div>

                </div>

                <div class="blog-hot__popular">
                    <div class="blog-hot__popular--produc-hot">
                        <hr class="hr-text" data-content="MOST POPULAR">
                        <div class="popular-box">
                            <div class="box-hot">
                                <img src="../img/img_hpproduc1.jpg" alt="">
                                <div class="title">
                                    <h3>BLACK & WHITE</h3>
                                    <p><i class="fa fa-usd" aria-hidden="true"></i>1,875.00</p>
                                </div>
                            </div>
                            <div class="box-hot">
                                <img src="../img/img_hpproduc1.jpg" alt="">
                                <div class="title">
                                    <h3>BLACK & WHITE</h3>
                                    <p><i class="fa fa-usd" aria-hidden="true"></i>1,875.00</p>
                                </div>
                            </div>
                            <div class="box-hot">
                                <img src="../img/img_hpproduc1.jpg" alt="">
                                <div class="title">
                                    <h3>BLACK & WHITE</h3>
                                    <p><i class="fa fa-usd" aria-hidden="true"></i>1,875.00</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="blog-hot__popular--our">
                        <h3>FROM OUR BLOG</h3>
                        <div class="our-trend">
                            <div class="box-our">
                                <div class="avartar">
                                <img src="../img/img_hblog1.jpg" alt="">
                                </div>
                                <div class="our-text">
                                    <h3>BEST SUMMER TREND</h3>
                                    <p>WE KNOW WHAT NEW YOU NEDD THIS SUMMER </p>
                                </div>
                            </div>
                            <div class="box-our">
                            <div class="avartar">
                                <img src="../img/img_hblog1.jpg" alt="">
                            </div>
                                <div class="our-text">
                                    <h3>BEST SUMMER TREND</h3>
                                    <p>WE KNOW WHAT NEW YOU NEDD THIS SUMMER</p>
                                </div>
                            </div>
                            <div class="read-more">
                                <h3>READ MORE</h3>
                            </div>
                        </div>
                    </div>


                </div>

            </div>



        <?php require('../layout/top_brands.php') ?>
            <?php require('../layout/footer.php') ?>
            <?php require('../layout/sidebar_mb.php') ?>
            
		</div>
	</div>
</body>

</html>