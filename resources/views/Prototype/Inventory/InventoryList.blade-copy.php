					
@extends('index')   
@section('content') 


					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						
						<!--end::Subheader-->
						<!--begin::Entry-->
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Receiving Actual Delivery</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Inventory</a>
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
						<!-- <div class="d-flex flex-column-fluid"> -->
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row Insert the Page Details-->
                                <div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-body pt-15">
												<!--begin::User-->
														<div class="form-group row">
															<label class="col-4 col-form-label">Transaction Type</label>
															<div class="col-8">
																<input class="form-control" type="text" value="REC" id="example-text-input" name="TransactionType" />
															</div>
														</div>
														<div class="form-group row">
															<label for="supId-input" class="col-4 col-form-label">Supplier</label>
															<div class="col-8">
																<input class="form-control" type="number" value="0" id="supId-input" name="SupplierID" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-4 col-form-label">Delivery Receipt</label>
															<div class="col-8">
																<input class="form-control" type="text" value="" id="example-text-input" name="DeliveryReceiptNo" />
															</div>
														</div>
														<div class="form-group row">
															<label class="col-4 col-form-label">PO Receipt </label>
															<div class="col-8">
																<input class="form-control" type="text" value="" id="example-text-input" name="POReceiptNo" />
															</div>
														</div>
												
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Aside-->
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Row-->
										<div class="row">
											<div class="col-lg-12">
												<!--begin::List Widget 10-->
												<div class="row">
									<div class="col-lg-12">
										<!--begin::Advance Table Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">For Approval Delivery Item</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the details of received items:</span>
												</h3>
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-success font-weight-bolder font-size-sm">
                                                    <i class="icon-2x text-dark-50 flaticon-add-circular-button"></i>Approved Items
                                                        </a>
										        </div>
											</div>
                                            
                                            
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
														<!--begin::Table-->
														<div class="card-body py-0">
										<!--begin::Table-->
										
										<!--end::Table-->
									</div>
														<!--end::Table-->
													</div>
													
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="card-body py-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
												<thead>
													<tr class="text-left">
                                                    <th class="pl-0" style="width: 20px">
															<label class="checkbox checkbox-lg checkbox-inline">
																<input type="checkbox" value="1" />
																<span></span>
															</label>
														</th>
														<th style="min-width: 150px">Item Code</th>
														<th style="min-width: 150px">Description</th>
														<th style="min-width: 150px">Unit</th>
														<th style="min-width: 150px">Qty PO</th>
														<th style="min-width: 150px">Actual Received</th>
													    <th style="min-width: 150px">Discrepancy</th>
													    <th style="min-width: 150px">Remarks</th>
														<th class="pr-0 text-right" style="min-width: 150px">action</th>
													</tr>
												</thead>
												<tbody>
													@forelse ($data as $row)
													<tr>
                                                    <td class="pl-0">
															<label class="checkbox checkbox-lg checkbox-inline">
																<input type="checkbox" value="1" />
																<span></span>
															</label>
														</td>
                                                        <td>
																<span>{{ $row->ItemCode }}</span>
														</td>
                                                        <td>
																<span>Apple Pie</span>
														</td>
                                                        <td>
																<span>Whole</span>
														</td>
                                                       
                                                        <td>
																<span>5</span>
														</td>
                                                        <td>
                                                        <span>5</span>

                                                        </td>
                                                        <td>
																<span>5</span>
														</td>
                                                        <td>
                                                            <span class="form-text text-muted"></span>
                                                        </td>
														<td class="pr-0 text-right">
                                                            <div class="btn-group">
																<button type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
															</div>
														</td>
													</tr>
													@endforelse
													
													
												</tbody>
											</table>
										</div>
										<!--end::Table-->
									</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 2-->
									</div>
									
								</div>
												<!--end: Card-->
												<!--end: List Widget 10-->
											</div>
											
										</div>
										<!--end::Row-->
										<!--begin::Advance Table Widget 5-->
										<div class="row">
									    <div class="col-lg-12">
                                                        <!--begin::Advance Table Widget 2-->
                                                        <div class="card card-custom card-stretch gutter-b">
                                                            <!--begin::Header-->
                                                            <div class="card-header border-0 pt-5">
                                                                <h3 class="card-title align-items-start flex-column">
                                                                    <span class="card-label font-weight-bolder text-dark">Inventory List</span>
                                                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Actual items in Invetory:</span>
                                                                </h3>
                                                               
                                                            </div>
                                                            
                                                            
                                                            <!--end::Header-->
                                                            <!--begin::Body-->
                                                            <div class="card-body pt-2 pb-0 mt-n3">
                                                                <div class="tab-content mt-5" id="myTabTables11">
                                                                    <!--begin::Tap pane-->
                                                                    <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                                                                        <!--begin::Table-->
                                                                        <div class="card-body py-0">
                                                        <!--begin::Table-->
                                                        
                                                        <!--end::Table-->
                                                    </div>
                                                                        <!--end::Table-->
                                                                    </div>
                                                                    <!--end::Tap pane-->
                                                                    <!--begin::Tap pane-->
                                                                    
                                                                    <!--end::Tap pane-->
                                                                    <!--begin::Tap pane-->
                                                                    <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                                                        <!--begin::Table-->
                                                                        <div class="card-body py-0">
                                                        <!--begin::Table-->
                                                        <div class="table-responsive">
                                                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                                                                <thead>
                                                                    <tr class="text-left">
                                                                        <th style="min-width: 150px">Item Code</th>
                                                                        <th style="min-width: 150px">Description</th>
                                                                        <th style="min-width: 150px">Category</th>
                                                                        <th style="min-width: 150px">Classification</th>
                                                                        <th style="min-width: 150px">Unit</th>
                                                                        <th style="min-width: 150px">Quantity</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                                <span>107D9A</span>
                                                                        </td>
                                                                        <td>
                                                                                <span>Apple Pie</span>
                                                                        </td>
                                                                        <td>
                                                                                <span>PR</span>
                                                                        </td>
                                                                        <td>
                                                                                <span>Cakes</span>
                                                                        </td>
                                                                        <td>
                                                                                <span>Whole</span>
                                                                        </td>
                                                                        <td>
                                                                                <span>20</span>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                                        <!--end::Table-->
                                                                    </div>
                                                                    <!--end::Tap pane-->
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Advance Table Widget 2-->
                                                    </div>
                                                    
                                                </div>
										<!--end::Advance Table Widget 5-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Row-->
								
							</div>
							<!--end::Container-->
						<!-- </div> -->
						<!--end::Entry-->
							
                                    
							
						</div>


@endsection
