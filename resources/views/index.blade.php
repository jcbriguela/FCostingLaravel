
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Eyelix | Food Costing</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<!--begin::Fonts-->
		<link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Page Vendors Styles(used by PurchaseOrder Page)-->
		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />

		<!--begin::Page Vendors Styles(used by addInventoryProducts)-->
		<!-- <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" /> -->
		<!--end::Page Vendors Styles-->
		<!-- <script src="{{asset('assets/jquery/jquery.min.js')}}"></script> -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="">
				<img alt="Logo" class="w-45px" src="assets/media/logos/logo-letter-13.png" />
			</a>
			<!--end::Logo-->	
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
			
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::profile pic-->
						<a href="" class="brand-logo">
			            	<img class="w-45px" src="{{asset('assets/media/svg/avatars/001-boy.svg')}}" />
						</a>
						<!--end::profile pic-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
  
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="/dashboard" class="menu-link">
										<i class="menu-icon flaticon2-architecture-and-city"></i>
										<span class="menu-text"> Dashboard</span>
									</a>
								</li>
								<!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">Upload</span>
										<i class="menu-arrow"></i>	
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Upload</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Inventory</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/ImportexcelProductInv" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Upload File</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/ForApprovalInventory" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">For Approval</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/addProductsInventory" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Manual adjustment</span>
															</a>
														</li>
														
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">POS</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="#" class="menu-link">
																<i class="menu-bullet menu-bullet-dot"></i>
																	<span></span>
																</i>
																<span class="menu-text">Upload File</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="#" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Sales List</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li> -->
    

								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">Receiving</span>
										<i class="menu-arrow"></i>	
									</a>
									<!-- @if(auth()->user()->role == 'Encoder' || auth()->user()->role == 'Admin') 
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/SalesOrder" class="menu-link">
													<i class="menu-bullet menu-bullet-dot"></i>
														<span></span>
													</i>
													<span class="menu-text">Receiving SO</span>
												</a>
											</li>
										</ul>
									</div>
									@endif -->
									@if(auth()->user()->role == 'Encoder' || auth()->user()->role == 'Admin') 

									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/Receiving" class="menu-link">
													<span class="menu-text">Receiving SO</span>
												</a>
											</li>
										</ul>
									</div>
									@endif
									@if(auth()->user()->role == 'Encoder' || auth()->user()->role == 'Admin') 

									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/RecApproval" class="menu-link">
													<span class="menu-text">Approval</span>
												</a>
											</li>
										</ul>
									</div>
								@endif
								</li>
								
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">Uploader</span>
										<i class="menu-arrow"></i>	
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Uploader</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Inventory</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<ul class="menu-subnav">
														
														<li class="menu-item" aria-haspopup="true">
															<a href="/UpIngredientList" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Upload File</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/UPaddProductsInventory" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Manual adjustment</span>
															</a>
														</li>
														
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Finish Good</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/FGupload" class="menu-link">
																<i class="menu-bullet menu-bullet-dot"></i>
																	<span></span>
																</i>
																<span class="menu-text">Upload File</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">Approver</span>
										<i class="menu-arrow"></i>	
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Approver</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Inventory</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/UpForApprovalInventory" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">For Approval</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li> -->
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-browser-2"></i>
										<span class="menu-text">Reports</span>
										<i class="menu-arrow"></i>	
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Reports</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
														<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Analysis</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="/ProductPerformance" class="menu-link">
																<i class="menu-bullet menu-bullet-dot"></i>
																	<span></span>
																</i>
																<span class="menu-text">Product Performace</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/CustomerSegmentation" class="menu-link">
																<i class="menu-bullet menu-bullet-dot"></i>
																	<span></span>
																</i>
																<span class="menu-text">Customer Segmentation</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/SalesOverTime" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Sales Over Time</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="/TransactionType" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Transaction Type</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="#" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Sale Quantity</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="#" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Average Check size</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="#" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Customer Segmentation</span>
												</a>
											</li>

											
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">Reference</span>
										<i class="menu-arrow"></i>	
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="/References" class="menu-link">
													<i class="menu-bullet menu-bullet-dot"></i>
														<span></span>
													</i>
													<span class="menu-text">Reference</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="/onGoingDev" class="menu-link">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">User Access</span>
									</a>
								</li>
								<!-- <li class="menu-item" aria-haspopup="true">
									<a href="#" class="menu-link">
										<i class="menu-icon flaticon2-graph-1"></i>
										<span class="menu-text">Settings</span>
									</a>    
								</li> -->
								<li class="menu-item" aria-haspopup="true">
								<a href="/logout" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
										<i class="menu-icon flaticon2-graph-1"></i>
										<span class="menu-text">Signout</span>
									</a>    

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
								</li>
								
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::User-->
								<div class="topbar-item">
									<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ session('user_name') }}</span>
										<span class="symbol symbol-35 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">{{ Session::get('first_name_initial') }}</span>
										</span>
									</div>
									
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
							@yield('content')

							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2024©</span>
								<a href="" target="_blank" class="text-dark-75 text-hover-primary">Eyelix</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<a href="" target="_blank" class="nav-link pl-0 pr-5">About</a>
								<a href="" target="_blank" class="nav-link pl-0 pr-5">Team</a>
								<a href="" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/js/pages/widgets.js')}}"></script>
		<!--end::Page Scripts-->
		

		<!--begin::Page Vendors(used by addInventoryProducts)-->
		<!-- <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.j')}}s"></script>
		<script src="{{asset('assets/js/pages/crud/datatables/data-sources/html.js')}}"></script> -->
		<script src="{{asset('assets/js/pages/crud/ktdatatable/advanced/row-details.js')}}"></script>
		
		<!--begin::Page Scripts(used Upload Sales)-->
		<script src="{{asset('assets/js/pages/crud/file-upload/dropzonejs.js')}}"></script>
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by Reports chart)-->
		<script src="{{asset('assets/js/pages/features/charts/apexcharts.js')}}"></script>
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by Receiving)-->
		<script src="{{asset('assets/js/pages/widgets.js')}}"></script>
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by PurchaseOrder)-->
		<!-- <script src="assets/js/pages/crud/ktdatatable/base/html-table.js"></script> -->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
				<!--end::Page Vendors-->
				<!--begin::Page Scripts(used by this page)-->
				<script src="{{asset('assets/js/pages/crud/datatables/advanced/multiple-controls-modified.js')}}"></script>
				<!--end::Page Scripts-->
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by this References)-->
		<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>