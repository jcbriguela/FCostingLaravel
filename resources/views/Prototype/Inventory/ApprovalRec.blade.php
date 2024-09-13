					
@extends('index')   
@section('content') 
						<!--begin::begin-->
						<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
							<!--begin::Subheader-->
							<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
								<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
									<!--begin::Info-->
									<div class="d-flex align-items-center flex-wrap mr-1">
										<!--begin::Page Heading-->
										<div class="d-flex align-items-baseline flex-wrap mr-5">
											<!--begin::Page Title-->
											<h5 class="text-dark font-weight-bold my-1 mr-5">Reports</h5>
											<!--end::Page Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
												<li class="breadcrumb-item text-muted">
													<a href="" class="text-muted">Analysis</a>
												</li>
												<li class="breadcrumb-item text-muted">
													<a href="" class="text-muted">Sales Over Time</a>
												</li>
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page Heading-->
									</div>
									
								</div>
							</div>
							<!--end::Subheader-->
							<!--begin::Entry-->
							<div class="d-flex flex-column-fluid">
								<!--begin::Container-->
								<div class="container">
									<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
										<!--begin::Subheader-->
										<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
											<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
												<!--begin::Info-->
												<div class="d-flex align-items-center flex-wrap mr-1">
													<!--begin::Page Heading-->
													<div class="d-flex align-items-baseline flex-wrap mr-5">
														<!--begin::Page Title-->
														<h5 class="text-dark font-weight-bold my-1 mr-5">Approval</h5>
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
										<div class="d-flex flex-column-fluid">
											<!--begin::Container-->
											<div class="container">
												
																	<!--begin::Card-->
																	
																	<!--end::Card-->
																	<!--begin::Row-->
																	<div class="row">
																	<div class="col-lg-12">
																		<!--begin::Card-->
																		<div class="card card-custom">
																			<div class="card-header flex-wrap py-5">
																				<h3 class="card-title align-items-start flex-column">
																					<span class="card-label font-weight-bolder text-dark">List</span>
																					<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the delivery details before receiving the items:</span> -->
																				</h3>
																				<div class="card-toolbar">
																			
																			<!--begin::Button-->
																			<!-- <a href="#" data-toggle="modal" data-target="#RecSO" class="btn btn-primary font-weight-bolder">
																			<i class="la la-plus"></i>Add Receiving SO</a> -->
																			<!--end::Button-->

																			<div class="modal fade" id="RecSO" tabindex="-1" role="dialog" aria-labelledby="inputDatagridModalLabel" aria-hidden="true">
																				<div class="modal-dialog modal-dialog-centered modal-xl">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="RecSO">Add New Item
																						<!-- <button type="button" class="btn btn-primary" name="addNewRow	" id="addNewRow">+</button> -->
																					</h5> 
																						
																							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																								<i aria-hidden="true" class="ki ki-close"></i>
																							</button>
																					</div>
																					<div class="modal-body">
																					<form action="/storePO" method = "POST" class="form">
																	@csrf	
													<div class="card-body">
														
														<div class="form-group row">
															<label class="col-4 col-form-label">Transaction Type</label>
															<div class="col-8">
																<input class="form-control" type="text" value="REC" id="example-text-input" name="TransactionType" />
															</div>
														</div>
														<div class="form-group row">
															<label for="totItem-input" class="col-4 col-form-label">Total Item</label>
															<div class="col-8">
																<input class="form-control" type="number" value="0" id="totItem-input" name ="TotalItem" />
															</div>
														</div>
														<div class="form-group row">
															<label for="totItem-input" class="col-4 col-form-label">Total Quantity</label>
															<div class="col-8">
																<input class="form-control" type="number" value="0" id="totqty-input" name ="TOTALQUANTITY" />
															</div>
														</div>
														<!-- <div class="form-group row">
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
														</div> -->
													</div>
													<div class="card-footer">
														<div class="row">
															<div class="col-2"></div>
															<div class="col-10">
																<button type="submit" class="btn btn-success mr-2">Submit</button>
																<button type="reset" class="btn btn-secondary">Cancel</button>
															</div>
														</div>
													</div>
												</form>
																					</div>
																				</div>
																			</div>
																		</div>
																			

																			<!--begin::Modal-->
																			<div class="modal fade" id="inputDatagridModal" tabindex="-1" role="dialog" aria-labelledby="inputDatagridModalLabel" aria-hidden="true">
																				<div class="modal-dialog modal-dialog-centered modal-xl">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="inputDatagridModalLabel">Add New Item
																						<!-- <button type="button" class="btn btn-primary" name="addNewRow	" id="addNewRow">+</button> -->
																					</h5> 
																						
																							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																								<i aria-hidden="true" class="ki ki-close"></i>
																							</button>
																					</div>
																					<div class="modal-body">
																						<form id="inputDatagridForm"> 
																							@csrf	
																							<div class="table-responsive">
																							<table class="table table-bordered" id="dataTable">
																								<thead>
																									<tr>
																										<th style="min-width: 150px">#</th>
																										<th style="min-width: 150px">Receiving Date</th>
																										<th style="min-width: 150px">Item Code</th>
																										<th style="min-width: 150px">Description</th>
																										<th style="min-width: 150px">SO Quantity</th>
																										<th style="min-width: 150px">Actual Quantity</th>
																										<th style="min-width: 150px">UOM</th>
																										<th style="min-width: 150px">Barcode</th>
																										<th style="min-width: 150px">Discrepancy</th>
																										<th style="min-width: 150px">Expiry Date</th>
																										<th style="min-width: 150px">Remarks</th>
																									</tr>
																								</thead>
																								<tbody>
																									</tbody>
																							</table>
																						</div>
																							<button type="button" class="btn btn-primary" id="saveDatagridData">Save Data</button>
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
													
																			<!--end::Modal-->
																		</div>
																			</div>
																			
																			<div class="card-body">
																				<!--begin: Datatable-->
																				<table class="table">
																<thead>
																	<tr>	
																		<th scope="col">#</th>
																		<!-- <th scope="col">Transaction Type</th> -->
																		<th scope="col">Order Date</th>
																		<th scope="col">Receiving Date</th>
																		<th scope="col">Total Items</th>
																		<th scope="col">Total Quantity</th>
																		<th scope="col">Actual Record Count</th>
																		<th scope="col">Quantity Variance</th>
																		<th scope="col">Status Item Count</th>
																		<!-- <th scope="col">Receiving Status</th> -->
																		<!-- <th scope="col">Created Date</th> -->
																		<th scope="col">Actions</th>
																	</tr>
																</thead>
																<tbody>
																<tr>
																	@forelse ($data as $row)
																	<tr>
																		<td>{{ $row->Id }}</td>
																		<!-- <td>{{ $row->TransactionType }}</td> -->
																		<td>{{ $row->OrderDate }}</td>
																		<td>{{ $row->ReceivingDate }}</td>
																		<td>{{ $row->Total_Item }}</td>
																		<td>{{ $row->TOTALQUANTITY }}</td>
																		<td>{{ $row->Actual_Rec_Count }}</td>
																		<td>{{ $row->QuatityVariance }}</td>
																		<td>{{ $row->StatusItemCount }}</td>
																		<!-- <td>{{ $row->ReceivingStatus }}</td> -->
																		<!-- <td>{{ $row->CreatedDate }}</td> -->
																		<td>
																			<!-- <button id ="btnAdd" data-value="{{ $row->Id }}"   class="btn btn-primary btn-sm  btn-icon" > -->
																		
																			
																			<a href="/inventory-approval-list/{{ $row->Id }}"  class="btn btn-sm btn-clean btn-icon" title ="">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Files\Folder-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"/>
																						<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
																						<path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
																					</g>
																				</svg><!--end::Svg Icon--></span>
																			</a>
																			
																			
																																							</button>
																		<!-- <button id ="myButton" class="btn btn-primary" data-id="{{ $row->Id }}">+</button> -->
																		</td>
																	</tr>
																	@empty
																	<tr>
																		<td colspan="17">No data found.</td>
																	</tr>
																	@endforelse
																	</tr>
																</tbody>
															</table>
																				<!--end: Datatable-->
																			</div>
																		</div>
																		<!--end: Card!-->
																	</div>
																	</div>
																	<!--end: Row!-->
																	
											</div>
														<!--end::Container-->
										</div>
										<!--end::Entry-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Container-->
							</div>
							<!--end::Entry-->
						</div>
						<!--end::begin-->
								
								
							

<script type="text/javascript">
		
		// Add a new row when the modal is shown
		// $('#inputDatagridModal').on('show.bs.modal', function() {

			
			

	
		








	</script>
@endsection
