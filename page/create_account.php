<!DOCTYPE html>
<html>

<head>
	<title>creat account</title>
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
        <?php require('../layout/navigation.php') ?>
        <div class="container create-account">
            <div class="form-create">
                <div class="form-create__title-top">
                    <h1>CREATE AN ACCOUNT</h1>
                    <div class="require">
                        <a href="#">*Required</a>
                    </div>
                </div>
                <div class="form-create__create-detail">
                    <div class="personal">
                            <h3>personal information</h3>
                        <div class="personal__firsr-name input-box">
                            <p>FIRST NAME</p>
                            <input type="text">
                        </div>
                        <div class="personal__last-name input-box">
                            <p>LAST NAME</p>
                            <input type="text">
                        </div>
                        <div class="personal__email input-box">
                            <p>E-MAIL</p>
                            <input type="text">
                        </div>
                        <div class="personal__pass input-box">
                            <p>PASSWORD</p>
                            <input type="text">
                        </div>
                        <div class="personal__subscrice">
                            <input type="checkbox">
                            <span>I WANT TO SUBSCRICE TO THE  NEWSLETTER</span>
                        </div>
                    </div>
                     <div class="address">
                        <h3>ADDRESS INFOMATION</h3>
                        <div class="address__firsr-name input-box">
                            <p>FIRST NAME</p>
                            <input type="text">
                        </div>
                        <div class="address__last-name input-box">
                            <p>LAST NAME</p>
                            <input type="text">
                        </div>
                        <div class="address__company input-box">
                            <p>COMPANY</p>
                            <input type="text">
                        </div>
                        <div class="address__address1 input-box">
                            <p>ADDRESS 1</p>
                            <input type="text">
                        </div>
                        <div class="address__address2 input-box">
                            <p>DDRESS 2</p>
                            <input type="text">
                        </div>
                        <div class="address__country input-box">
                            <p>COUNTRY</p>
                            <select name="" id="" class="ip"></select>
                        </div>
                        <div class="address__city input-box">
                            <p>CITY</p>
                            <input type="text">
                        </div>
                        <div class="address__state input-box">
                            <p>STATE</p>
                            <select name="" id=""></select>
                        </div>
                        <div class="address__zip input-box">
                            <p>ZIP / POSTAL CODE</p>
                            <input type="text">
                        </div>
                        <div class="address__phone input-box">
                            <p>PHONE</p>
                            <input type="text">
                        </div>
                    </div>

                </div>
                <div class="form-create__button-create">
                    <a href="#" class="bt-cr">CREAT AN ACCOUNT</a>
                    <a href="#" class="back">Back to login</a>
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