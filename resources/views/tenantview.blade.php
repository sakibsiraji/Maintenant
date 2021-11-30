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
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Notice</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form  action="tenant_edit" method="POST" id="editForm">
                    @csrf

                <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Flat Name </label>
                                <Select id="flat_id" required>
                                    @foreach($flats as $flat)
                                        <option  value="{{$flat->flat_id}}">{{$flat->flat_name}}</option>
                                    @endforeach
                                </Select>

                            </div>
                            <div class="form-group col-md-4">
                                <label>Number of Staying People <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="staying_people" id="staying_people" required />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Starting Date <span class="text-color-danger">*</span></label>
                                <input type="date" class="form-control h-auto py-2" name="starting_date" id="starting_date" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="name" id="name" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="email" id="email" required />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Password <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="password" id="password" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>NID <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="nid" id="nid" required />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Phone <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="phone" id="phone" required />
                            </div>
                            <div class="form-group col-md-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Father's Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="fathers_name" id="fathers_name" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Mother's Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="mothers_name" id="mothers_name" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Parent's NID <span class="text-color-danger">*</span></label>
                                <input type="file" class="form-control h-auto py-2" name="parents_nid" id="parents_nid" required />
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Occupation <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="occupation" id="occupation" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Office Address <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="job_address" id="job_address" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Office Phone Number <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="office_phone" id="office_phone" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label>Earning Person's Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="earning_person_name" id="earning_person_name" required />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Occupation <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="earning_person_occupation" id="earning_person_occupation" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Earning Person's Office Phone Number <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="earning_person_office_phone" id="earning_person_office_phone" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Earning Person's Yearly Income</label>
                                <input type="text" class="form-control h-auto py-2" name="earning_person_yearly_income" id="earning_person_yearly_income" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Advance<span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="advance" id="advance" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>Earning Person's Office Address <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control h-auto py-2" name="earning_person_job_address" id="earning_person_job_address"required />
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <label>Comment:</label>
                            <textarea  name="comment" id="comment" cols="100" rows="5"></textarea>
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
								<h1 class="text-dark">List Of Tenant</h1>
							</div>
						</div>
					</div>
				</section>
                <div class="container scroll">

                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Flat Name</th>

                            <th>name</th>


                            <th>starting_date</th>
                            <th>ending_date</th>
                            <th>advance</th>

                            <th>Action</th>
                        </thead>
                        <tbody>

                                @foreach($tenants as $tenant)
                                <tr>

                                    <td>{{$tenant->id}}</td>
                                    <td>@foreach ($flats as $flat)
                                        @if($tenant->flat_id==$flat->id)
                                        {{$flat->flat_name}}
                                        @endif
                                    @endforeach</td>

                                    <td>{{$tenant->name}}</td>


                                    <td>{{$tenant->starting_date}}</td>
                                    <td>{{$tenant->ending_date}}</td>
                                    <td>{{$tenant->advance}}</td>

                                    <td>

                                        <a  class="btn btn-success " href="/tenant_details/{{$tenant->id}}">View Details</a>
                                       


                                        <a onclick="alert('are you sure? You want to delete.')" href={{"tenant/delete/".$tenant['id']}} class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>
                                @endforeach

                        </tbody>
                    </table>
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
            $(document).ready( function(){

               var table=$('#datatable').DataTable();

               table.on('click','.edit', function(){
                   $tr=$(this).closest('tr');
                   if($($tr).hasClass('child')){
                       $tr=$tr.prev('.parent');
                   }

                   var data=table.row($tr).data();
                   console.log(data);

                   $('#id').val(data[0]);
                   $('#name').val(data[3]);
                   $('#email').val(data[4]);
                   $('#password').val(data[5]);
                   $('#phone').val(data[6]);
                   $('#fathers_name').val(data[7]);
                   $('#mothers_name').val(data[8]);
                   $('#occupation').val(data[9]);
                   $('#job_address').val(data[10]);
                   $('#office_phone').val(data[11]);
                   $('#staying_people').val(data[12]);
                   $('#earning_person_name').val(data[13]);
                   $('#earning_person_occupation').val(data[14]);
                   $('#earning_person_job_address').val(data[15]);
                   $('#earning_person_office_phone').val(data[16]);
                   $('#earning_person_yearly_income').val(data[17]);
                   $('#starting_date').val(data[18]);
                   $('#ending_date').val(data[19]);
                   $('#advance').val(data[20]);
                   $('#comment').val(data[21]);

                   // $('#editForm').attr('action','notice_edit'+data[0]);
                   $('#editModal').modal('show');
            });
            });

           </script>



	</body>
</html>
