<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Maintenant | Tenant Maintenance System</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-real-estate.css">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-real-estate.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-transparent-dark-bottom-border" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
				<div class="header-body bg-color-primary border-color-dark border-top-0">
					<div class="header-top header-top-borders header-top-light-borders">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
													<span class="pl-0"><i class="far fa-dot-circle text-4 text-color-light" style="top: 1px;"></i> Mohammadpur, Dhaka-1207</span>
												</li>
												<li class="nav-item nav-item-borders py-2">
													<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-light" style="top: 0;"></i> 0171 413 4517</a>
												</li>
												<li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
													<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-light" style="top: 1px;"></i> sadman14dx@gmail.com</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-container-height-sm container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Maintenant" width="143" height="40" src="">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe header-nav-force-light-text header-nav-dropdowns-dark header-nav-no-space-dropdown order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link active" href="/">
															Home
														</a>
													</li>

													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="owner">
															Owner Login
														</a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="tenant">
															Tenant Login
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<div class="container">
					<div class="row mt-5">
						<div class="col-lg-9">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-normal mb-2">
										Listing for <strong class="text-color-secondary font-weight-extra-bold">Rent</strong>
									</h2>
								</div>
							</div>
							<div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
							@foreach ($flats as $flat)
								<div class="col-md-6 col-lg-4 p-3 isotope-item">
									<div class="listing-item">
										<a href="flat-details" class="text-decoration-none">
											<div class="thumb-info thumb-info-lighten border">
												<div class="thumb-info-wrapper m-0" style="max-width: 100%;
                                                height:200px;">
													<img src="{{asset('images/'.$flat->image)}}" class="img-fluid"  alt="">
													<div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
														for rent
													</div>
												</div>
												<div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
													BDT {{$flat->rent}} / month
													<i class="fas fa-caret-right text-color-secondary float-right"></i>
												</div>
												<div class="custom-thumb-info-title b-normal p-4">

													<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
														<li>
															<span class="accomodation-title">
																Falt Name:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->flat_name}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Location:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->location}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Beds:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->beds}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Baths:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->baths}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Sq Ft:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->size}}
															</span>
														</li>
														
														<li>
															<span class="accomodation-title">
																Service Charge:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->service_charge}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Monthly Water Bill:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->monthly_water_bill}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Monthly Gas Bill:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->monthly_gas_bill}}
															</span>
														</li>
														<li>
															<span class="accomodation-title">
																Comment:
															</span>
															<span class="accomodation-value custom-color-1">
																{{$flat->comment}}
															</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
								</div>
                            @endforeach
						</div>

						<div class="col-lg-3">
							<aside class="sidebar">
								<div class="row">
									<div class="col-md-6 col-lg-12">
										<div class="agents text-color-light text-center">
											<h4 class="text-light pt-4 m-0">Contact US</h4>
											<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
												<div class="pr-2 pl-2">
													<a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
														<span class="agent-thumb">
															<img class="img-fluid rounded-circle" src="img/team/team-11.jpg" alt />
														</span>
														<span class="agent-infos text-light pt-3">
															<strong class="text-uppercase font-weight-bold">Sadman Sakeeb</strong>
															<span class="font-weight-light">01714134517</span>
															<span class="font-weight-light">sadman14dx@gmail.com</span>
														</span>
													</a>
												</div>
												<br>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer">
					<div class="footer-copyright">
						<div class="container py-2">
							<div class="row py-4">
								<div class="col d-flex align-items-center justify-content-center">
									<p><strong>Maintenant</strong> - © Copyright 2021. All Rights Reserved. | Developed by <a href="https://www.lastminuteit.net">Last Minute IT</a></p>
								</div>
							</div>
						</div>
					</div>
				</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/lazysizes/lazysizes.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>


		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-real-estate.js"></script>
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>





	</body>
</html>
