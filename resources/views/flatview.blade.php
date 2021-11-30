<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Maintenant | Owner Dashboard</title>

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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">


		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
        <style>

            div.scroll {
                margin: 4px, 4px;
                padding: 4px;


                overflow-x: auto;
                overflow-y: hidden;
                white-space: nowrap;
            }
        </style>

	</head>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
        <div class="modal fade" id="building-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Notice</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form  action="flat_edit" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>Flat Name<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="beds" id="flat_name"  />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Beds<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="beds" id="beds" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Baths<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="baths" id="baths" required />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Size in squre feet<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="size" id="size" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Flat Rent <span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="rent" id="rent" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Service Charge <span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="service_charge" id="service_charge" required />
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Water Bill <span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="monthly_water_bill" id="monthly_water_bill" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Gas Bill <span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="monthly_gas_bill" id="monthly_gas_bill" required />
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Image</label>
                                <input type="file" class="form-control h-auto py-2" name="image"  />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Garage Bill<span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control h-auto py-2" name="garage_bill" id="garage_bill" required />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Location<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="location" id="location" required />
                            </div>

                        </div>
                            <div class="form-group col-md-4">
                                <label>Comment:</label>
                                <textarea name="comment" id="comment" cols="35" rows="5"></textarea>
                            </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
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
														<a class="nav-link active" href="owner-dashboard">
															Dashboard
														</a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="/show_message">
															Contact Messages
														</a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link" href="userlogout">
															Logout
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
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">Flat Details</h1>
							</div>
						</div>
					</div>
				</section>
                <div class="container">

                    <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
                        @foreach ($flats as $flat)

                            <div class="col-md-6 col-lg-4 p-3 isotope-item">
                                <div class="listing-item">
                                    <a href="#" class="building-link"
                                    data-toggle="modal"
                                    data-target="#building-modal"
                                    data-id="{{$flat->id}}"
                                    data-flat_name="{{$flat->flat_name}}"
                                    data-owner_id="{{$flat->owner_id}}"
                                    data-beds="{{$flat->beds}}"
                                    data-baths="{{$flat->baths}}"

                                    data-garage_bill="{{$flat->garage_bill}}"
                                    data-size="{{$flat->size}}"
                                    data-rent="{{$flat->rent}}"
                                    data-service_charge="{{$flat->service_charge}}"
                                    data-monthly_water_bill="{{$flat->monthly_water_bill}}"
                                    data-monthly_gas_bill="{{$flat->monthly_gas_bill}}"
                                    data-location="{{$flat->location}}"
                                    data-comment="{{$flat->comment}}">
                                        <div class="thumb-info thumb-info-lighten border">
                                            <div class="thumb-info-wrapper m-0 responsive" style="height:200px;width:100%">
                                                <img src="{{asset('images')}}/{{$flat->image}}" class="img-fluid"  alt="">
                                                <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                                    @if($flat->available==1)
                                                    For Rent
                                                    @else
                                                    Unavailable
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="custom-thumb-info-title b-normal p-4">

                                                <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                                    <li>

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


                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                    @if($flat->available==1)
                                    <a class="btn btn-success" href="/unavailable/{{$flat->id}}">Add Tenant</a>
                                    @else
                                    <a class="btn btn-danger" href="/available/{{$flat->id}}">Make Available</a>
                                    <a class="btn btn-info" href="/create_bill/{{$flat->id}}">Create Bill</a>
                                    @endif

                                </div>
                            </div>
                        @endforeach
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


		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>Porto Real Estate</strong>",
					icon: {
						image: "img/demos/real-estate/pin.png",
						iconsize: [36, 36],
						iconanchor: [36, 36]
					},
					popup: true
				}];

				// Map Initial Location
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 16
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Map text-center At
				var mapCenterAt = function(options, e) {
					e.preventDefault();
					$('#googlemaps').gMap("centerAt", options);
				}

				// Create an array of styles.
				var mapColor = "#cfa968";

				var styles = [{
					stylers: [{
						hue: mapColor
					}]
				}, {
					featureType: "road",
					elementType: "geometry",
					stylers: [{
						lightness: 0
					}, {
						visibility: "simplified"
					}]
				}, {
					featureType: "road",
					elementType: "labels",
					stylers: [{
						visibility: "off"
					}]
				}];

				// Styles from https://snazzymaps.com/
				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

		</script>
     <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){

            $('.building-link').click(function(){
                $('#id').val($(this).data('id'));
                $('#flat_name').val($(this).data('flat_name'));
                $('#owner_id').val($(this).data('owner_id'));
                $('#beds').val($(this).data('beds'));
                $('#baths').val($(this).data('baths'));

                $('#garage_bill').val($(this).data('garage_bill'));
                $('#size').val($(this).data('size'));
                $('#rent').val($(this).data('rent'));
                $('#service_charge').val($(this).data('service_charge'));
                $('#monthly_water_bill').val($(this).data('monthly_water_bill'));
                $('#monthly_gas_bill').val($(this).data('monthly_gas_bill'));
                $('#location').val($(this).data('location'));
                $('#comment').val($(this).data('comment'));

            });
        });
    </script>



	</body>
</html>
