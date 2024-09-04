@extends('index')   
@section('content') 
<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->


@if (session('alert'))
    <div  class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">{{session('alert')}}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
@endif



<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Inventory Products</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Approver</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Inventory</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">For Approval</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header py-3">
										<div class="card-title">
											<span class="card-icon">
												<span class="svg-icon svg-icon-md svg-icon-primary">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
															<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
															<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
															<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
											<h3 class="card-label">For Approval List</h3>
										</div>
										<div class="card-toolbar">
											
											
										</div>
									</div>

									<div class="card-body">
										
										<!--begin: Datatable-->
										<div class="card-body py-0">
											<!--begin::Table-->
											<div class="table-responsive">
												<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
													<thead>
														<tr class="text-left">
															
															<th class="pl-0" style="min-width: 120px">Branch</th>
															<th style="min-width: 110px">Uploaded By</th>
															<th style="min-width: 110px">
																<span class="text-info">Date</span>
																<span class="svg-icon svg-icon-sm svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Down-2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<rect fill="#000000" opacity="0.3" x="11" y="4" width="2" height="10" rx="1" />
																			<path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</th>
															<th style="min-width: 120px">File Name</th>
															<th style="min-width: 120px">Status</th>
															<th class="pr-0 text-right" style="min-width: 160px">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="pl-0">
																<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Main</a>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Juan Dela Cruz</span>
																<span class="text-muted font-weight-bold">Uploader</span>
															</td>
															<td>
																<span class="text-info font-weight-bolder d-block font-size-lg">August 16, 2024</span>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">IngredientList.xlxs</span>
															</td>
															<td>
																<span class="label label-lg label-light-warning label-inline">In Progress</span>
															</td>
															<td class="pr-0 text-right">
																<button id="btnShow" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-value="" data-toggle="modal" data-target="#modalTable">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																				<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</button>
															</td>
																		

															<!-- <div class="btn-group">
																<button type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="svg-icon svg-icon-md svg-icon-primary"> -->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																		<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg>
																</span>
																</button>
																<div class="dropdown-menu">
																@csrf
																<meta name="csrf-token" content="{{ csrf_token() }}">
																		<li><a class="dropdown-item" href="#" data-status="1">Approved</a></li>
																		<li><a class="dropdown-item" href="#" data-status="2">Disapproved</a></li>
</meta>
																	</div> -->
															<!-- </div> -->
															</td>
														</tr>
														<tr>
															<td class="pl-0">
																<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Main</a>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Juan Dela Cruz</span>
																<span class="text-muted font-weight-bold">Uploader</span>
															</td>
															<td>
																<span class="text-info font-weight-bolder d-block font-size-lg">August 16, 2024</span>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ingredient.xlxs</span>
															</td>
															<td>
																<span class="label label-lg label-light-info label-inline">For Checking</span>
															</td>
                                                            <td class="pr-0 text-right">
																<button id="btnShow" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-value="" data-toggle="modal" data-target="#modalTable">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																				<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</button>
															</td>
															</td>
														</tr>
														<tr>
															<td class="pl-0">
																<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Alabang</a>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Juana Delos Reyes</span>
																<span class="text-muted font-weight-bold">Uploader</span>
															</td>
															<td>
																<span class="text-info font-weight-bolder d-block font-size-lg">August 16, 2024</span>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">tList.xlxs</span>
															</td>
															<td>
																<span class="label label-lg label-light-success label-inline">Approved</span>
															</td>
															<td class="pr-0 text-right">
																<td class="pr-0 text-right">
																<button id="btnShow" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-value="" data-toggle="modal" data-target="#modalTable">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																				<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</button>
															</td>
															</td>
														</tr>
														<tr>
															<td class="pl-0">
																<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Alabang</a>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Juana Delos Reyes</span>
																<span class="text-muted font-weight-bold">Uploader</span>
															</td>
															<td>
																<span class="text-info font-weight-bolder d-block font-size-lg">August 16, 2024</span>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">itemList.xlxs</span>
															</td>
															<td>
																<span class="label label-lg label-light-danger label-inline">DisApproved</span>
															</td>
															<td class="pr-0 text-right">
																<button id="btnShow" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-value="" data-toggle="modal" data-target="#modalTable">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																				<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</button>
                                                                
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!--end::Table-->
										</div>
										<!--end: Datatable-->

										 <!--begin::Modal-->
										 <div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Raw Materials</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<i aria-hidden="true" class="ki ki-close"></i>
															</button>
														</div>
														<div class="modal-body">
														<table class="table">
															<thead>
																<tr>
                                                                    <th><input id ="selectAll" type="checkbox"  class="checkbox-row"></th>
                                                                    <th>id</th>
																	<th>Item Name</th>
																	<th>Item Code</th>
																	<th>Classification</th>
																	<th>Category</th>
																	<th>Packaging Configuration</th>
																	<th>UOM</th>
																</tr>
															</thead>
															<tbody>
                                                                <tr>
                                                                    <td><input  type="checkbox"  class="checkbox-row selected-item"></td>
                                                                    <td>1</td>
                                                                    <td>Apple Pie </td>
                                                                    <td>107D9A </td>
                                                                    <td>CAKES </td>
                                                                    <td>PR </td>
                                                                    <td>1 </td>
                                                                    <td>WHOLE</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="checkbox"  class="checkbox-row"></td>
                                                                    <td>2</td>
                                                                    <td>Blueberry Cheesecake </td>
                                                                    <td>118D9A </td>
                                                                    <td>CAKES </td>
                                                                    <td>PR </td>
                                                                    <td>1 </td>
                                                                    <td>WHOLE</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input  type="checkbox"  class="checkbox-row"></td>
                                                                    <td>3</td>
                                                                    <td>Almond Crunch 130g</td>
                                                                    <td>101D9A</td>
                                                                    <td>ST - BAKERY </td>
                                                                    <td>PR </td>
                                                                    <td>130 </td>
                                                                    <td>PACK</td>
                                                                </tr>
															</table>
														</div>
														<div class="modal-footer">
															<div class="btn-group">
																<button type="button" class="btn btn-icon btn-light-primary font-weight-bold btn-hover-primary btn-sm mx-3 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																Action
																<span class="svg-icon svg-icon-md svg-icon-primary"> 
																		<!-- begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg
																		 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> -->
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg>
																</span>
																</button>
																<div class="dropdown-menu">
																@csrf
																<meta name="csrf-token" content="{{ csrf_token() }}">
																		<li><a class="dropdown-item" href="#" data-status="1">Approved</a></li>
																		<li><a class="dropdown-item" href="#" data-status="2">Disapproved</a></li>
</meta>
																	</div> 
															<!-- </div> -->
															<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!--end::Modal-->

										

									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>

<script type="text/javascript">

		$(document).ready(function() {
			$('#btnShow').click(function() {	
			var buttonValue = $(this).data('value');
			
			$.ajax({
			type: 'GET',
			url: '/show-list',
			data: {
				buttonValue: buttonValue,
				_token: $('meta[name="csrf-token"]').attr('content')
			},
			success: function(jsondata) {
				console.log('jsondata:', jsondata); // Check the JSON data

				const dataGrid = document.getElementById('modalTable');
				const tableBody = dataGrid.querySelector('tbody');

				tableBody.innerHTML = '';

				if (Array.isArray(jsondata)) {
				jsondata.forEach(item => {
					const newRow = document.createElement('tr');
					 
					const idCell = document.createElement('td');
					// Checkbox cell
					const checkboxCell = document.createElement('td');
					const checkbox = document.createElement('input');
					checkbox.type = 'checkbox';
					checkbox.classList.add('selected-item');  

					checkboxCell.appendChild(checkbox);
					newRow.appendChild(checkboxCell);


					const productCodeCell = document.createElement('td');
					const InsysProductCodeCell = document.createElement('td');
					const InsysProductIdCodeCell = document.createElement('td');
					const ProductNameCell = document.createElement('td');
					const CategoryCell = document.createElement('td');
					const ModelCell = document.createElement('td');
					const CostCell = document.createElement('td');
					const PriceCell = document.createElement('td');
					const RemarksCell = document.createElement('td');
					const editButtonCell = document.createElement('td');

					// ... other cell creation

					idCell.textContent = item.id;
					newRow.appendChild(idCell);

					// Create the edit button
					const editButton = document.createElement('button');
					editButton.type = 'button';
					editButton.classList.add('btn', 'btn-primary','btn-sm', 'edit-btn');	
					editButton.textContent = 'Edit';
					editButton.dataset.id = item.ProductCode;

					// Append the edit button to the editButtonCell
					editButtonCell.appendChild(editButton);
						

					// ... populate other cells

					productCodeCell.textContent = item.ProductCode;
					InsysProductCodeCell.textContent = item.InsysProductCode;
					InsysProductIdCodeCell.textContent = item.InsysProductId;
					ProductNameCell.textContent = item.ProductName;
					CategoryCell.textContent = item.Category;
					ModelCell.textContent = item.Model;
					CostCell.textContent = item.Cost;
					PriceCell.textContent = item.Price;
					RemarksCell.textContent = item.Remarks;
					// ... set content for other cells

					newRow.appendChild(productCodeCell);
					newRow.appendChild(InsysProductCodeCell);
					newRow.appendChild(InsysProductIdCodeCell);
					newRow.appendChild(ProductNameCell);
					newRow.appendChild(CategoryCell);
					newRow.appendChild(ModelCell);
					newRow.appendChild(CostCell);
					newRow.appendChild(PriceCell);
					newRow.appendChild(RemarksCell);
					newRow.appendChild(editButtonCell);
					
					// ... append other cells

					tableBody.appendChild(newRow);
				});
				} else {
				console.error('jsondata is not an array:', jsondata);
				}

				$('#modalTable').modal('show');
			},
			error: function(error) {
				console.error('AJAX error:', error);
			}
			});
		});
	});

		$('#selectAll').change(function() {
		const isChecked = $(this).is(':checked');
		$('.selected-item').prop('checked', isChecked);
		});

		$('#submitButton').click(function() {
			const selectedItems = [];
			$('.selected-item:checked').each(function() {
				const row = $(this).closest('tr');
				const productId = row.find('td:first-child').text(); // Assuming first cell is ProductCode
				selectedItems.push(productId);
			});

			// Send data to the server using AJAX
			$.ajax({
				type: 'PUT',
				url: '/submit-list', // Replace with your actual route
				data: {
				selectedItems: selectedItems,
				_token: $('meta[name="csrf-token"]').attr('content')
				},
				success: function(response) {
				// Handle successful response
				console.log('Data saved successfully:', response);
				},
				error: function(error) {
				// Handle error
				console.error('Error saving data:', error);
				}
			});
		});


		
		$(document).ready(function() {
		$('.dropdown-item').click(function() {

            alert('Data succesfully Updated!');
            
			var status = $(this).data('status');
			var id = $(this).closest('tr').data('id'); // Assuming you have a data-id attribute on the row

			$.ajax({
				url: '/update-statusB',
				type: 'PUT',
				data: {
					id: id,
					status: status
					_token: $('meta[name="csrf-token"]').attr('content')
				},
				success: function(response) {
					if (response.success) {
						// Update the UI to reflect the new status
						$(this).closest('tr').find('.status-column').text(newStatus);
					} else {
						// Handle error
						console.error(response.error);
					}
				},
				error: function(xhr, status, error) {
					// Handle error
					console.error(xhr.responseText);
				}
				});
    		});
		});


			
			

	


</script>
<script>


    // $(document).ready(function() {
    //     $('.edit-btn').click(function() {
    //         var ProductCode = $(this).data('ProductCode');
    //         var name = $(this).closest('tr').find('.editable').val();

    //         $.ajax({
    //             url: '/update-record',
    //             type: 'PUT',
    //             data: { ProductCode: ProductCode, name: name },
    //             success: function(response) {
    //                 console.log(response.data);
    //                 // Optionally update the UI
    //             },
    //             error: function(error) {
    //                 console.error(error);
    //             }
    //         });
    //     });
    // });

    const form = document.getElementById('addForm');

     form.addEventListener('submit', (event) => {
    const InsysProductId = document.getElementById('InsysProductId').value;
    const Cost = document.getElementById('Cost').value;
    const Price = document.getElementById('Price').value;  


    if (!/^[0-9]*$/.test(InsysProductId) && isNaN(InsysProductId)) {
      event.preventDefault();
      alert('InsysProduct Id must be a number');
    }

    if (!/^[0-9]*$/.test(Cost) && isNaN(Cost)) {
      event.preventDefault();
      alert('Cost must be a number');
    }

    if (!/^[0-9]*$/.test(Price) && isNaN(Price)) {
      event.preventDefault();
      alert('Price must be a number');
    }
  });

  $(document).ready(function() {
    $('.dropdown-item').click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        let status = $(this).data('status');
        let recordId = $(this).closest('tr').find('td:nth-child(4)').text(); // Assuming the first column is the ID
        // let recordId = $(this).closest('tr').find('td:nth-child(4)').text(); // Assuming the first column is the ID

        $.ajax({
            url: '/update-status', // Replace with your route
            method: 'PUT',
            data: {
                status: status,
                recordId: recordId,
				_token: '{{ csrf_token() }}'
                // _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success, e.g., show a success message or update UI
                console.log(response);
				alert('Success: ' + response.message);
            },
            error: function(error) {
                // Handle error, e.g., show an error message
                console.error(error);
				alert('Error: ' + response.message)
            }
        });
    });
});

</script>

@endsection