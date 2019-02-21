<!DOCTYPE html>
<html>

<head>
	<title>cart</title>
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
        
        <div class="container cart-top">
				<div class="cart-top__title">
					<h2>CART</h2>
				</div>
				<div class="cart-top__product">
					<div class="cart-top__product--avatar">
						<h3>PRODUCT</h3>
						<div class="product-row-1">
							<div class="avt">
								<img src="../img/img_cproduc1.jpg">
							</div>
							<div class="avt-text">
								<p>DETAILED SWING DRESS</p>
								<p>COLOR: BLUE</p>
								<p>SIZE: 12</p>
								<a href="#">Edit item</a>

							</div>
							<div class="avt-close"><i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
						<div class="product-row-1 row-bottom">
							<div class="avt">
								<img src="../img/img_cproduc1.jpg">
							</div>
							<div class="avt-text">
								<p>DETAILED SWING DRESS</p>
								<p>COLOR: BLUE</p>
								<p>SIZE: 12</p>
								<a href="#">Edit item</a>

							</div>
							<div class="avt-close"><i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="cart-top__product--price">
						<h3>PRICE</h3>
						<div class="product-row-1">
							<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
						</div>
						<div class="product-row-1 row-bottom">
							<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
						</div>
					</div>
					<div class="cart-top__product--quantity">
						<h3>QUANTITY</h3>
						<div class="product-row-1">
							<div class="quantity-text">
								<div class="quantity-number">
									<p>1</p>
								</div>

								<div class="quantity-icon">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
								<a href="#">Update</a>
							</div>

						</div>
						<div class="product-row-1 row-bottom">
							<div class="quantity-text">
								<div class="quantity-number">
									<p>1</p>
								</div>

								<div class="quantity-icon">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
								<a href="#">Update</a>
							</div>

						</div>
					</div>
					<div class="cart-top__product--amount">
						<h3>AMOUNT</h3>
						<div class="product-row-1">
							<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
						</div>
						<div class="product-row-1 row-bottom">
							<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
						</div>
					</div>
				</div>

			<div class="cart-top__mbproduct">
				<div class="cart-top__mbproduct--avatar">
			
						<div class="product-row-1">
							<div class="avt">
								<img src="../img/img_cproduc1.jpg">
							</div>
							<div class="avt-text">
								<p>DETAILED SWING DRESS</p>
								<span>COLOR: BLUE</span>
								<span>SIZE: 12</span>
							<div class="quantity-mb">
								<p>QTY:</p>
								<p class="number">1</p>
								<i class="fa fa-refresh" aria-hidden="true"></i>

								<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
							</div>


								<a href="#">Edit item</a>

							</div>
							<div class="avt-close"><i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
						<div class="product-row-1 row-bottom">
							<div class="avt">
								<img src="../img/img_cproduc1.jpg">
							</div>
							<div class="avt-text">
								<p>DETAILED SWING DRESS</p>
								<span>COLOR: BLUE</span>
								<span>SIZE: 12</span>

								
							<div class="quantity-mb">
								<p>QTY:</p>
								<p class="number">1</p>
								<i class="fa fa-refresh" aria-hidden="true"></i>

								<p><i class="fa fa-usd" aria-hidden="true"></i>275.00</p>
							</div>


								<a href="#">Edit item</a>

							</div>
							<div class="avt-close"><i class="fa fa-times" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
            </div>
       







           <div class="container cart-get">
				<div class="cart-get__pay">

              <div class="group-pay">

               <div class="pay-top">
					<div class="pay-top__delivery">
						<h3>ESTIMATE DELIVERY<span>Enter your destination to get a estimate</span></h3>

						<select name="" id="">
							<p>UNITED STATES</p>
						</select>
						<select name="" id="">
							<p>SELECT REGION</p>
						</select>

						<div class="get-quote">
							<input type="text" placeholder="Postcode/Zip">
							<a href="#">GET A QUOTE</a>
						</div>

					</div>
					<div class="pay-top__voucher">
						<div class="voucher-seach">
							<h3>ESTIMATE DELIVERY</h3>
							<p><input type="text"><i class="fa fa-chevron-right" aria-hidden="true"></i></p>
						</div>
						<div class="voucher-help">
							<p>Need help?</p>
							<p>Call out customer</p>
							<p>(08)981361038 / Customer Service</p>
						</div>

					</div>
					</div>
					<div class="group-pay__check">
					<a class="continue">CONTIBUE SHOPPING</a>
</div>
</div>

<div class="group-pay-right">
					<div class="group-pay-right__total">
						<div class="subtotal row-total">
							<h3>SUBTOTAL</h3>
							<p><i class="fa fa-usd" aria-hidden="true"></i>825.000</p>
						</div>
						<div class="cost row-total">
							<h3>SUBTOTAL</h3>
							<p><i class="fa fa-usd" aria-hidden="true"></i>825.000</p>
						</div>
						<div class="gift row-total">
							<h3>SUBTOTAL</h3>
							<p><i class="fa fa-usd" aria-hidden="true"></i>825.000</p>
						</div>
						<div class="total-tax row-total">
							<h3>TOTAL<br>INCLUDUNG TAX</h3>
							<p><i class="fa fa-usd" aria-hidden="true"></i>825.000</p>
						</div>

					</div>
			<div class="group-pay-right__check">
					<a class="continue">CONTIBUE SHOPPING</a>
					<a href="#">CHECKOUT</a>
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