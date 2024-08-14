					
@extends('index')   
@section('content') 
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
												<a href="" class="text-muted">Upload</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Inventory</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Manual Adjustment</a>
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
								<!--begin::Notice-->
								<!-- <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
									<div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
										</span>
									</div>
									<div class="alert-text">The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables on it. See official documentation
									<a class="font-weight-bold" href="https://datatables.net/examples/data_sources/dom.html" target="_blank">here</a>.</div>
								</div> -->
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-favourite text-primary"></i>
											</span>
											<h3 class="card-label">Data List</h3>
										</div>
										<div class="card-toolbar">
											<div class="align-items-right">
											<a href="#" class="btn btn-primary font-weight-bolder" id="printButton">
											<i class="flaticon-notes"></i>Print Reord</a>
										</div>
										&nbsp
										<div class="align-items-right">

											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#addNew">
											<i class="la la-plus"></i>New Record</a>
											<!--end::Button-->
										</div>

										<div class="modal fade" id="addNew" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
													<div class="modal-dialog modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Add Manual Record</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<i aria-hidden="true" class="ki ki-close"></i>
																</button>
															</div>
															<div class="modal-body">
																<!--begin::Form-->
																	<form action="" method = "" class="form" id ="addForm">
																	@csrf	
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Ingredient Code</label>
																		<div class="col-10">
																		<input class="form-control" type="text" value="" id="" name ="ProductCode" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Ingredient Name</label>
																		<div class="col-10">
																		<input class="form-control" type="text"  id="" name="InsysProductId" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="exampleSelect1">Category
																		<span class="text-danger">*</span></label>
																		<select class="form-control" id="exampleSelect1">
																					<option>Food</option>
																					<option>Beverages</option>
																		</select>
																	</div>
																	<div class="form-group row">
																		<label for="exampleSelect1">Sub Category
																		<span class="text-danger">*</span></label>
																		<select class="form-control" id="exampleSelect1">
																		<option>Bev Food</option>
																		<option>Food Beef</option>
																	</select>
				</div>
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Packing Configuration</label>
																		<div class="col-10">
																		<input class="form-control" type="number" id="" name=""/>
																		</div>
																	</div>
																	
																	</div>	
																	<div class="card-footer">
																	<div class="row">
																		<div class="col-2">
																		</div>
																		<div class="col-10">
																		<button type="submit" class="btn btn-success mr-2" id="submit">Submit</button>
																		<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																		</div>
																	</div>
																	</div>
																	</form>
															<!-- <div class="modal-footer">
																<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
															</div> -->
														</div>
													</div>
                                        		</div>

									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
											<thead>
												<tr>
													<th>Record ID</th>
													<th>Ingredient Code</th>
													<th>Ingredient Name</th>
													<th>Type</th>
													<th>Category</th>
													<th>Sub Category</th>
													<th>Default UOM</th>
													<th>Usable Yield (%)</th>
													<th>Sync Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>SMFB</td>
													<td>A1 San Miguel Flavored beer</td>
													<td>Raw Materials</td>
													<td></td>
													<td>Bev Wine</td>
													<td>Bottle</td>
													<td>1.00</td>
													<td>7/1/2024</td>
												</tr>
                                                <tr>
													<td>2</td>
													<<td>Jand-00-197</td>
													<td>Abiyuch raw</td>
													<td>Raw Materials</td>
													<td>Food</td>
													<td>Food Beef</td>
													<td>Kilogram</td>
													<td>0.52</td>
													<td>7/1/2024</td>
												</tr>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
<script>
	$(document).ready(function() {
    $('#printButton').click(function() {
        window.print();
    });
	});

	$(document).ready(function() {
    $('#submit').click(function() {
	alert("Item Succesfully Added");
	$('#addNew').modal('hide');
   });
	});

</script>
@endsection
