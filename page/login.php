<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../font/css/font-awesome.min.css">

</head>

<body>
	<div class="wrapper">
		<?php require('../layout/header.php') ?>
		<div class="main-content">

		<?php require('../layout/header_top.php') ?>
		<?php require('../layout/header_menu.php') ?>
        <?php require('../layout/navigation.php') ?>
        <div class="container login-conten">
            <div class="login-conten__form-login">
                <h1>USER LOGIN</h1>
                <div class="form-group">
                <div class="registered">
                    <div class="registered__title title-box">
                        <h3>REGISTERED CUSTOMERS</h3>
                        <p>Already registered. <span> Please log in below</span></p>
                    </div>
                    <div class="registered__email input-box">
                        <p>E-MAIL</p>
                        <input type="text">
                    </div>
                    <div class="registered__pass input-box">
                        <p>PASSWORD</p>
                        <input type="text">
                    </div>
                    <div class="registered__button-login">
                        <a href="#" class="bt-lg">LOGIN</a>
                        <a href="#" class="forgot">Forgot your password?</a>
                    </div>
                </div>
                <div class="new-customers"> 
                    <div class="new-customers__title title-box">
                            <h3>NEW CUSTOMERS</h3>
                            <p>Already registered. Please log in below</p>
                    </div>
                    <div class="new-customers__email input-box">
                        <p>E-MAIL</p>
                        <input type="text">
                    </div>
                    <div class="new-customers__button-creat">
                        <a href="http://localhost/page/create_account.php">CREAT AN ACOUNT</a>
                </div>
                </div>
            </div>
        </div>
</div>

        <?php require('../layout/top_brands.php') ?>
		<?php require('../layout/footer.php') ?>
		</div>
	</div>
</body>

</html>