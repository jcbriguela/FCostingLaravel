					
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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Sales Order</h5>
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
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-md-4">
									<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
												<div class="card-header">
													<h3 class="card-title">SO Form</h3>
												</div>
												<!--begin::Form-->
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
									<!--end::Card-->
									</div>


									<div class="col-md-8">
										<!-- begin::Card-->
										<div class="card card-custom">
												<div class="card-header flex-wrap py-5">
													<div class="card-title">
														<h3 class="card-label">SO List
													</div>
												</div>
												<div class="card-body">
													<!--begin: Datatable-->
													<table class="responsive table table-separate table-head-custom table-checkable" id="kt_datatable">
														<thead>
															<tr>
															<th>ID</th>
															<th>Transaction Type</th>
															<th>Order Date</th>
															<th>Total Items</th>
															<th>Status Count</th>
															<th>Receiving Status</th>
															<!-- <th>Received By</th> -->
															<th>Created Date</th>
															<!-- <th>Last Updated Date</th>
															<th>Deliver Receipt No</th>
															<th>PO Receipt No</th>
															<th>Transaction Code</th> -->
															</tr>
														</thead>
														<tbody>
														@forelse ($data as $row)
															<tr>
																<td>{{ $row->Id }}</td>
																<td>{{ $row->TransactionType }}</td>
																<td>{{ $row->OrderDate }}</td>
																<td>{{ $row->Total_Item }}</td>
																 
																<td>{{ $row->StatusItemCount }}</td>
																<td>{{ $row->ReceivingStatus }}</td>
																<td>{{ $row->CreatedDate }}</td>
																<!-- <td>{{ $row->ReceivedById }}</td> -->
													<td nowrap="nowrap"></td>
													<!-- <td>{{ $row->CreatedDate }}</td> -->
																<!-- <td>{{ $row->LastUpdateDate }}</td>
																<td>{{ $row->DeliverReceiptNo }}</td>
																<td>{{ $row->POReceiptNo }}</td>
																<td>{{ $row->TransactionCode }}</td> -->
															</tr>
															@empty
															<tr>
																<td colspan="17">No data found.</td>
															</tr>
															@endforelse
														</tbody>
													</table>
													<!--end: Datatable-->
												</div>
										</div>
										<!--end: Card-->
									</div>
								</div>
									<!--end: Container-->

									</div>

								</div>
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
	alert("Data Succesfully Uploaded");
   });
	});

	
</script>

</script>
@endsection
