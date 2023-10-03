<?php include "connection.php";
if(isset($_POST['update_update_btn']))
{
	$update_value=$_POST['update_quantity'];
	$update_id=$_POST['update_quantity_id'];
	$update_quantity_query = mysqli_query($conn,"UPDATE `shopping_cart` SET quantity = '$update_value'
	WHERE id = '$update_id'");
	if($update_quantity_query){
		header('location:product-cart.php');
	}
};
if(isset($_GET['remove'])){
	$remove_id=$_GET['remove'];
	mysqli_query($conn,"DELETE FROM `shopping_cart` WHERE id='$remove_id'");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Grocery Store</title>

    <meta name="keywords" content="Organic, Fresh Food, Farm Store">
    <meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
    <meta name="author" content="tivatheme">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="asset/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="asset/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="asset/nivo-slider/css/style.css">
    <link rel="stylesheet" href="asset/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/slider-range/css/jslider.css">
    <!--extra asset-->
    <link rel="stylesheet" href="asset/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/fontawesome-free-6.4.0-web/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reponsive.css">
</head>

<body class="home home-3">
    <div id="all">
        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="header-top" id="homepage-header">
                    <div class="mobile-toggler d-lg-none">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#navModal">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                    <div class="row align-items-center" id="homepage-navMenu">
                        <!-- Header Left -->
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                            <header id="hehe">
                                <div class="container-fluid-light ">
                                    <div class="nav-items d-none d-lg-flex">
                                        <div class="item">
                                            <a href="homepage.html">Home</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-list-left-sidebar.html">Product</a>
                                        </div>
                                        <div class="item">
                                            <a href="aboutUs.html">About Us</a>
                                        </div>
                                        <div class="item">
                                            <a href="contact.html">Contact</a>
                                        </div>
                                        <div class="item">
                                            <div class="dropdown account">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    <a href="">Profile</a>
                                                </div>
                                                <div class="dropdown-menu">									
                                                    <div class="item">
                                                        <a href="account.html
                                                        " title="Log in to your customer account">Account</a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="login.html" title="Log in to your customer account">Login</a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="user-register.html" title="Register Account">Register</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal" id="navModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="img/logo.png" alt="">
                                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="modal-line">
                                                   <i class="fa-solid fa-house"></i><a href="homepage.html">Home</a>
                                                </div>

                                                <div class="modal-line">
                                                    <i class="fa-solid fa-bag-shopping"></i><a href="product-list-left-sidebar.html">Product</a>
                                                </div>

                                                <div class="modal-line">
                                                    <i class="fa-solid fa-circle-info"></i><a href="aboutUs.html">About Us</a>
                                                </div>

                                                <div class="modal-line">
                                                   <i class="fa-solid fa-phone"></i><a href="contact.html">Contact Us</a>
                                                </div>

                                                <div class="modal-line">
                                                    <div class="item">
                                                        <div class="dropdown account text-start">
                                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa-solid fa-user"></i><a href="#">Profile</a>
                                                            </div>
                                                            <div class="dropdown-menu">									
                                                                <div class="item">
                                                                    <a href="account.html
                                                                    " title="Log in to your customer account">Account</a>
                                                                </div>
                                                                <div class="item">
                                                                    <a href="login.html" title="Log in to your customer account">Login</a>
                                                                </div>
                                                                <div class="item">
                                                                    <a href="user-register.html" title="Register Account">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </div>                                                
                                                    </div>
                                               </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </header>
                            </div>

                        <!-- Header Center -->
                        <div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">

                            <!-- Logo -->
                            <div class="logo">
                                <a href="homepage.html">
                                    <img class="img-responsive .circular-logo" src="img/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>



                        <!-- Header Right -->
                        <div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
                            <!-- Search -->
                            <div class="form-search">
                            <form action="product-list-left-sidebar.php" method="get">
                                <input type="text" class="form-input" name="search" placeholder="Search">
                                <button type="submit" class="fa fa-search"></button>
                            </form>
                            </div>

                            <!-- Cart -->
						<!-- Cart -->
						<div class="block-cart dropdown ms-auto">
						<div class="cart-title">
						<?php 
						$select_rows = mysqli_query($conn, "SELECT * FROM `shopping_cart`") or die('query failed');
						$row_count = mysqli_num_rows($select_rows);
						?>

						<i class="fa fa-shopping-basket"></i>
						<span class="cart-count"><?php echo $row_count;?></span>
					</div>

							<div class="dropdown-content">
								<div class="cart-content">
									<table>
										<tbody>
										<?php
								$select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
								$grand_total= 0;
								if (mysqli_num_rows($select_cart) > 0) {
									while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
										?>
											<tr>
												<td class="product-image">
													<a href="product-detail-left-sidebar.html">
														<img src="img/product/<?php echo $fetch_cart['image'];?>" alt="Product">
													</a>
												</td>
												<td>
													<div class="product-name">
														<a href="product-detail-left-sidebar.html">$
														<?php echo number_format($fetch_cart['price']);?>
														</a>
													</div>
													<div class="product-quantity">
													<form action="" method="POST">
													<input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id'];?>" >
													<input id="form1" min="1" name="update_quantity" value="<?php echo $fetch_cart['quantity'];?>" type="number"
														class="form-control form-control-sm text-center"
														style="width:40px;border-radius:10px;" />
													<input type="submit" value="update" name="update_update_btn">
													</form>
												</div>
													<div>
													<?php echo $fetch_cart['quantity'];?> x <span class="product-price"><?php echo number_format($fetch_cart['price']);?></span>
													</div>


												</td>

												<td class="action">
													<a class="remove" href="href="product-cart.php?remove=
													<?php echo $fetch_cart['id'];?> onclick="return confirm('remove item from cart?')">
														<i class="fa fa-trash-o" aria-hidden="true"></i>
													</a>
												</td>
											</tr>
											<?php
								$subtotal = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                                $grand_total +=	$subtotal;
                                };
                                };
                                ?>


											<tr class="total">
												<td>Total:</td>
												<td colspan="2">$<?php echo $grand_total;?></td>
											</tr>

											<tr>
												<td colspan="3">
													<div class="cart-button">
														<a class="btn btn-primary" href="product-cart.html"
															title="View Cart">View Cart</a>
														<a class="btn btn-primary" href="product-checkout.html"
															title="Checkout">Checkout</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Slideshow -->
            <div class="section slideshow">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="img/slideshow/home3-slideshow-1.jpg" alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/slideshow/home3-slideshow-2.jpg" alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/slideshow/home3-slideshow-3.jpg" alt="Slideshow Image">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Intro -->
            <div class="section intro">
                <div class="block-content">
                    <div class="container">
                        <div class="intro-content">
                            <div class="row">
                                <div class="title">Why Choose Us</div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item up-left">
                                    <h4>100% Natural</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item up-right">
                                    <h4>Always Fresh</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item down-left">
                                    <h4>Premium Quality</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item down-right">
                                    <h4>Super Healthy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Product -->
            <div class="two-column">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                        <div class="section products-block category-double no-border">
                            <div class="block-title">
                                <h2 class="title">Featured <span>Products</span></h2>
                                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
                            </div>

                            <div class="block-content">
                                <div class="products owl-theme owl-carousel">
                                <?php
                            $featured_product=mysqli_query($conn,"SELECT * FROM product_db WHERE featured='Yes'");

                            while ($row = mysqli_fetch_assoc($featured_product)) {
                                $product_name = $row['name'];
                                $product_image = $row['image'];
                                $product_price = $row['price'];                            

                            echo '<div class="product-item">';
                            echo '<div class="product-image">';
                            echo '<img class="img-responsive" src="img/product/' . $product_image . '" alt="Product Image">';
                            echo '</div>';

                            echo '<div class="product-title">';
                            echo '<a href="product-detail-left-sidebar.html">' . $product_name . '</a>';
                            echo '</div>';
                        echo '<div class="product-price">';
                        echo '<span class="sale-price">$' . $product_price . '</span>';
                        echo '</div>';
                        echo '<div class="product-buttons">';
                        echo '<a class="add-to-cart" href="#">';    
                        echo '<i class="fa fa-shopping-basket" aria-hidden="true"></i>';
                        echo '</a>';     
                        echo '</div>';
                        echo '</div>';
}
                            ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Banners -->
            <div class="section banners">
                <div class="row margin-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-0">
                        <div class="banner-item">
                            <div class="text">
                                <h3>Tomato and Pepper</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                <a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
                            </div>
                            <div class="image-mask"></div>
                            <img class="img-responsive" src="img/banner/home3-banner-1.jpg" alt="Banner">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-0">
                        <div class="row margin-0">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="img/banner/home3-banner-2.jpg" alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="img/banner/home3-banner-3.jpg" alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="img/banner/home3-banner-4.jpg" alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="img/banner/home3-banner-5.jpg" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="section testimonial layout-2">
                <div class="container">
                    <div class="block-title">
                        <h2 class="title mt-5"><span>Feedback</span></h2>
                    </div>
                    <div class="row">
                        <div class="testimonial-wrap owl-theme owl-carousel">
                            <div class="item">
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- Footer -->
        <footer id="footer">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="footer-intro">
                                <a href="home-3.html" class="logo-footer">
                                    <img src="img/logo-3.png" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="footer-top">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 footer-left">
                                        <div class="block text">
                                            <h2 class="block-title">Contact Us</h2>

                                            <div class="block-content">
                                                <div class="contact">
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-home"></i>
                                                        </div>
                                                        <div>
                                                            <span>123 Suspendis matti, VST District, NY Accums, North American</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                                        </div>
                                                        <div>
                                                            <span>0123-456-78910<br>0987-654-32100</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-email"></i>
                                                        </div>
                                                        <div>
                                                            <span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 footer-right">
                                        <div class="block text">
                                            <h2 class="block-title">Opening Hours</h2>

                                            <div class="block-content">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <p>
                                                    <strong>Monday To Friday</strong> : 8.00 AM - 8.00 PM<br>
                                                    <strong>Satuday</strong> : 7.30 AM - 9.30 PM<br>
                                                    <strong>Sunday</strong> : 7.00 AM - 10.00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-bottom">
                                    <div class="payment-intro">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="item d-flex">
                                                        <div class="item-left">
                                                            <img src="img/home1-payment-1.png" alt="Payment Intro">
                                                        </div>
                                                        <div class="item-right">
                                                            <h3 class="title">Free Shipping item</h3>
                                                            <div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="item d-flex">
                                                        <div class="item-left">
                                                            <img src="img/home1-payment-2.png" alt="Payment Intro">
                                                        </div>
                                                        <div class="item-right">
                                                            <h3 class="title">Secured Payment</h3>
                                                            <div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="item d-flex">
                                                        <div class="item-left">
                                                            <img src="img/home1-payment-3.png" alt="Payment Intro">
                                                        </div>
                                                        <div class="item-right">
                                                            <h3 class="title">Money Back Guarantee</h3>
                                                            <div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>

                    </div>

                    </div>
                </div>
</footer>

    <!-- Go Up button -->
    <div class="go-up">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    </div>

    <!-- Vendor JS -->
    <script src="asset/jquery/jquery.js"></script>
    <script src="asset/bootstrap/js/bootstrap.js"></script>
    <script src="asset/jquery.countdown/jquery.countdown.js"></script>
    <script src="asset/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="asset/owl.carousel/owl.carousel.min.js"></script>
    <script src="asset/slider-range/js/tmpl.js"></script>
    <script src="asset/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="asset/slider-range/js/draggable-0.1.js"></script>
    <script src="asset/slider-range/js/jquery.slider.js"></script>
    <script src="asset/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="asset/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template CSS -->
    <script src="js/main.js"></script>
</body>


</html>