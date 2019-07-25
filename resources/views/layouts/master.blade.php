<!DOCTYPE html>
<html lang="en">
<head>
<title>Myy</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('shop_assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/shop_responsive.css') }}">

<!-- Cart -->
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/cart_responsive.css') }}">

<!-- Contact -->
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/contact_responsive.css') }}">

<!-- Product -->
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/product_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/product_responsive.css') }}">

<!-- Home -->
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/styles/responsive.css') }}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('shop_assets/images/phone.png') }}" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('shop_assets/images/mail.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="{{ asset('shop_assets/images/user.svg') }}" alt=""></div>
								<div><button class="btn btn-link" id="btn-register" style="cursor: pointer;">Đăng ký</button></div>
								<div><button class="btn btn-primary" id="btn-login">Đăng nhập</button></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo">
								<center>
									<a href="#">Myy</a>
								</center>
							</div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search anything ...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('shop_assets/images/search.png') }}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="{{ asset('shop_assets/images/heart.png') }}" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{ asset('shop_assets/images/cart.png') }}" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Danh mục sản phẩm</div>
								</div>

								<ul class="cat_menu">
									<li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
									<li class="hassubs">
										<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('shop_assets/images/phone_white.png') }}" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('shop_assets/images/mail_white.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<section>

		@yield('content')

	</section>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="{{ asset('shop_assets/images/send.png') }}" alt=""></div>
							<div class="newsletter_title">Đăng ký nhận bản tin Myy</div>
							<div class="newsletter_text"><p>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Địa chỉ email của bạn">
								<button class="newsletter_button">Đăng ký</button>
							</form>
							{{-- <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="{{ asset('shop_assets/images/logos_1.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('shop_assets/images/logos_2.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('shop_assets/images/logos_3.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('shop_assets/images/logos_4.png') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Đăng ký -->
<div class="modal" tabindex="-1" role="dialog" id="modal-register">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content container">
      		<div class="row">
      			<div class="col-lg-5">
      				<div class="container">
      					<br> <br>
      					<p style="font-size: 30px">Đăng ký</p>
      					<p>Đăng ký để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
      					<img src="{{ asset('shop_assets/images/login-image.jpg') }}" alt=""class="col-lg-12">
      				</div>
      			</div>
	      		<div class="col-lg-7">
	      			<div class="container">
	      				<br> <br>
	      				<form action="" method="get">
	      					<div class="row login">
		      					<div class="col-lg-3 login-title">
		      						<p>Họ tên</p>
		      						<br>
		      						<p>SĐT</p>
		      						<br>
		      						<p>Email</p>
		      						<br>
		      						<p>Mật khẩu</p>
		      					</div>
		      					<div class="col-lg-9 login-input">
		      						<input type="text" name="" class="col-lg-11" placeholder="Nhập họ tên">
				      				<br> <br>
				      				<input type="text" name="" class="col-lg-11" placeholder="Nhập số điện thoại">
				      				<br> <br>
				      				<input type="email" name="" class="col-lg-11" placeholder="Nhập email">
				      				<br> <br>
				      				<input type="password" name="" class="col-lg-11" placeholder="Nhập mật khẩu từ 6 đến 32 ký tự">
				      				<br> <br>
				      				<button type="submit" class="btn btn-warning col-lg-11" style="color: white;">Đăng nhập</button>
		      					</div>
		      				</div>
		      			</form>
		      			<br> <br>
	      			</div>
	      		</div>
      		</div>
    	</div>
  	</div>
</div>

<!-- Đăng nhập -->
<div class="modal" tabindex="-1" role="dialog" id="modal-login">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content container">
      		<div class="row">
      			<div class="col-lg-5">
      				<div class="container">
      					<br> <br>
      					<p style="font-size: 30px">Đăng nhập</p>
      					<p>Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
      					<img src="{{ asset('shop_assets/images/login-image.jpg') }}" alt=""class="col-lg-12">
      				</div>
      			</div>
	      		<div class="col-lg-7">
	      			<div class="container">
	      				<br> <br>
	      				<form action="" method="get">
	      					<div class="row login">
		      					<div class="col-lg-3 login-title">
		      						<p>Email/SĐT</p>
		      						<br>
		      						<p>Mật khẩu</p>
		      					</div>
		      					<div class="col-lg-9 login-input">
		      						<input type="text" name="" class="col-lg-11" placeholder="Nhập Email hoặc Số điện thoại">
				      				<br> <br>
				      				<input type="password" name="" class="col-lg-11" placeholder="Mật khẩu từ 6 đến 32 ký tự">
				      				<br> <br>
				      				<p>Quên mật khẩu? Nhấn vào <span style="color: blue; cursor: pointer;">đây</span></p>
				      				
				      				<button type="submit" class="btn btn-warning col-lg-11" style="color: white;">Đăng nhập</button>
				      				<br>
				      				<button type="submit" class="btn btn-primary col-lg-11">Đăng nhập bằng Facebook</button>
				      				<br>
				      				<button type="submit" class="btn btn-danger col-lg-11">Đăng nhập bằng Google</button>
		      					</div>
		      				</div>
		      			</form>
		      			<br> <br>
	      			</div>
	      		</div>
      		</div>
    	</div>
  	</div>
</div>

<script src="{{ asset('shop_assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('shop_assets/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('shop_assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
<script src="{{ asset('shop_assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('shop_assets/js/shop_custom.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btn-login').click(function (e) {
			
			$('#modal-login').modal('show');
	    });

	    $('#btn-register').click(function (e) {
			
			$('#modal-register').modal('show');
	    });
	});
</script>

</body>

</html>