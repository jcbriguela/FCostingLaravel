					
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
										<div class="d-flex flex-column-fluid">
											<!--begin::Container-->
											<div class="container">
																	<!--begin::Card-->
																	<div class="card card-custom gutter-b">
																		<div class="card-body">
																			<!--begin::Details-->
																			<div class="d-flex mb-9">
																				<!--begin::Info-->
																				<div class="flex-grow-1">
																					<!--begin::Title-->
																					<!-- <div class="d-flex justify-content-between flex-wrap mt-1">
																						<div class="d-flex mr-3">
																							<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">Muntinlupa Branch</a>
																							
																						</div>
																					</div> -->
																					<!--end::Title-->
																					<!--begin::Content-->
																					<!-- <div class="row">
																					<div class="col-lg-2">

																							<div class="d-flex flex-wrap justify-content-between mt-1">
																								<div class="d-flex flex-column flex-grow-1 pr-8 ">
																								<span class="font-weight-bold text-dark-50"> Supplier : </span>
																								<span class="font-weight-bold text-dark-50"> Address : </span>
																								<span class="font-weight-bold text-dark-50"> TIN : </span>
																								<span class="font-weight-bold text-dark-50"> DR: No : </span>
																								<span class="font-weight-bold text-dark-50"> Date: </span>
																								<span class="font-weight-bold text-dark-50"> PO Ref No: </span>
																							</div>
																						</div>
																						</div>
																						<div class="col-lg-10">
																							<div class="d-flex flex-column flex-grow-1 pr-8 ">
																							<span class="font-weight-bold text-dark-75">XXYZ Company</span>
																							<span class="font-weight-bold text-dark-75">Taguig City</span>
																							<span class="font-weight-bold text-dark-75">1111-1111-111</span>
																							<span class="font-weight-bold text-dark-75">9999999</span>
																							<span class="font-weight-bold text-dark-75">Aug 18, 2024</span>
																							<span class="font-weight-bold text-danger">123456789</span>
																							</div>
																						</div>
																					</div> -->
																					<!--end::Content-->
																				</div>
																				<!--end::Info-->
																			</div>
																			<!--end::Details-->
																			<div class="separator separator-solid"></div>
																		</div>
																	</div>
																	<!--end::Card-->
																	<!--begin::Row-->
																	<div class="row">
																	<div class="col-lg-12">
																		<!--begin::Card-->
																		<div class="card card-custom">
																			<div class="card-header flex-wrap py-5">
																				<h3 class="card-title align-items-start flex-column">
																					<span class="card-label font-weight-bolder text-dark">Receiving Actual Delivery</span>
																					<span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the delivery details before receiving the items:</span>
																				</h3>
																				<div class="card-toolbar">
																			
																			<!--begin::Button-->
																			<a href="#" data-toggle="modal" data-target="#inputDatagridModal" class="btn btn-primary font-weight-bolder">
																			<i class="la la-plus"></i>New Record</a>
																			<!--end::Button-->

																			<!--!-->


																			<!--!-->

																			<!--begin::Modal-->
																			<div class="modal fade" id="inputDatagridModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalitem" aria-hidden="true">
																				<div class="modal-dialog modal-dialog-centered modal-xl">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="AddRo">Add New Item
																						<button type="button" class="btn btn-primary" id="addNewRow">+</button>
																					</h5> 
																						
																							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																								<i aria-hidden="true" class="ki ki-close"></i>
																							</button>
																					</div>

																					<div class="modal-body">
																						<form id="inputDatagridForm"> 
																							@csrf	
																							<div class="table-responsive">
																							<table id="addItemModalTable" class="table table-bordered">
																								<thead>
																									<tr>
																										<th style="min-width: 150px">Receiving Date</th>
																										<th style="min-width: 150px">Item Code</th>
																										<th style="min-width: 150px">Description</th>
																										<th style="min-width: 150px">SO Quantity</th>
																										<th style="min-width: 150px">Record Quantity</th>
																										<th style="min-width: 150px">UOM</th>
																										<th style="min-width: 150px">Barcode</th>
																										<th style="min-width: 150px">Expiry Date</th>
																										<th style="min-width: 150px">Discrepancy</th>
																										<th style="min-width: 150px">Remarks</th>
																									</tr>
																								</thead>
																								<tbody>
																								</tbody>
																							</table>
																						</div>
																						<button id="myButton" data-value="5">Add Items</button>
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
																				<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<th scope="col">#</th>
																		<th scope="col">Transaction Type</th>
																		<th scope="col">Order Date</th>
																		<th scope="col">Receiving Date</th>
																		<th scope="col">Total Items</th>
																		<th scope="col">Encoder</th>
																		<th scope="col">Status Item Count</th>
																		<th scope="col">Receiving Status</th>
																		<th scope="col">Approved By</th>
																		<th scope="col">Created Date</th>
																		<th scope="col">Actions</th>
																	</tr>
																</thead>
																<tbody>
												<tr>
																	@forelse ($data as $row)
																	<tr>
																		<td>{{ $row->Id }}</td>
																		<td>{{ $row->TransactionType }}</td>
																		<td>{{ $row->OrderDate }}</td>
																		<td>{{ $row->ReceivingDate }}</td>
																		<td>{{ $row->Total_Item }}</td>
																		<td>{{ $row->Username }} {{ $row->Surname }} {{ $row->Firstname }}</td>
																		<td>{{ $row->ReceivingStatus }}</td>
																		<td>{{ $row->ReceivingStatus }}</td>
																		<td>{{ $row->ApprovedById }}</td>
																		<td>{{ $row->CreatedDate }}</td>
																		<td class="pr-0 text-right">
																		<button class="btn btn-primary" data-id="{{ $row->Id }}">+</button>
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
														</div>
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
	

$(document).ready(function() {
    // Function to add a new row to the datagrid
		function addRow() {
			$.ajax({
					url: "\get_last_id", 
					type: 'GET',
					data: {
            sessionBranch: "1",   //, // Pass the session branch variable
            transactionType: "REC" // Pass the transaction type
        },
        	success: function(response) {
            var data = response.data; // Assuming the response contains a 'data' property

            // Iterate through the data and create rows
            data.forEach(function(item) {

					var newRow = $('<tr></tr>');
					newRow.append('<td><input class="form-control col-10" type="date" name="RecievingDate[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="ItemCode[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="Description[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="PO_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="REC_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="UOM[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Barcode[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="ExpiryDate[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Discrepancy[]"></td>');
					newRow.append('<td><textarea class="form-control form-control-solid" rows="3" name="Remarks[]"></textarea></td>');
					// Add more cells as needed
					$('tbody').append(newRow);
			});
			},
			error: function(error) {
				console.log('Error fetching last ID:', error);
			}
		});
	}
});
// Add a new row when the modal is shown
		$('#inputDatagridModal').on('show.bs.modal', function() {
			addRow();
		});

		// Save the datagrid data when the "Save Data" button is clicked
		$('#saveDatagridData').on('click', function() {
			saveDatagridData();
		});

		$('#saveDatagridData').on('click', function() {
			var formData = $('#inputDatagridForm').serialize();
			$.ajax({
				url: "{{ route('save_datagrid_data') }}",	
				type: 'POST',
				data: formData,
				success: function(response) {
					console.log(response); // Handle the success response
					$('#inputDatagridModal').modal('hide');
				},
				error: function(error) {
					console.log(error); // Handle the error response
				}
			});
});

</script>
@endsection
