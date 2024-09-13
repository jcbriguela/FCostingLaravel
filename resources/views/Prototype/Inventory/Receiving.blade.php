					
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
																			<a href="#" data-toggle="modal" data-target="#RecSO" class="btn btn-primary font-weight-bolder">
																			<i class="la la-plus"></i>Add Receiving SO</a>
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
																		<button id ="btnAdd" data-value="{{ $row->Id }}" data-value2="{{ $row->Total_Item }}"  class="btn btn-primary btn-sm  btn-icon" >
																			+
																			</button>
																			<a href="/inventory-view/{{ $row->Id }}"  class="btn btn-sm btn-clean btn-icon" title ="">
																			<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo13\dist/../src/media/svg/icons\Text\Align-justify.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"/>
																					<path d="M5,5 L19,5 C19.5522847,5 20,5.44771525 20,6 C20,6.55228475 19.5522847,7 19,7 L5,7 C4.44771525,7 4,6.55228475 4,6 C4,5.44771525 4.44771525,5 5,5 Z M5,13 L19,13 C19.5522847,13 20,13.4477153 20,14 C20,14.5522847 19.5522847,15 19,15 L5,15 C4.44771525,15 4,14.5522847 4,14 C4,13.4477153 4.44771525,13 5,13 Z" fill="#000000" opacity="0.3"/>
																					<path d="M5,9 L19,9 C19.5522847,9 20,9.44771525 20,10 C20,10.5522847 19.5522847,11 19,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L19,17 C19.5522847,17 20,17.4477153 20,18 C20,18.5522847 19.5522847,19 19,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000"/>
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

			$('#btnAdd').click(function() {	
				var dataValue = $(this).data('value');
				var dataValue2 = $(this).data('value2');

				var addNewRowButton = $('#addNewRow');
				addNewRowButton.data('dataValue', dataValue);

				var totalRowsToAdd = parseInt(dataValue2);

				for (var i = 0; i < totalRowsToAdd; i++) {
				var newRow = $('<tr></tr>');
					// newRow.append('<td>' + dataValue + '</td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="TransactionHeaderID[]" value="' + dataValue + '" ></td>');
					newRow.append('<td><input class="form-control col-10" type="date" name="ReceivingDate[]"></td>');
					var dropdownOptions = '';
					@foreach($ItemCodelist as $ItemCodelists)
						dropdownOptions += '<option value="{{ $ItemCodelists->ItemCode }}">{{ $ItemCodelists->ItemCode }}</option>';
					@endforeach
					var itemCodeSelect = $('<select class="form-control col-10" name="ItemCode[]">' + dropdownOptions + '</select>');

        			// newRow.append('<td></td>'); // Empty cell for ItemCode (populated later)

					 newRow.append('<td><select class="form-control col-10" name="ItemCode[]">' + dropdownOptions + '</select></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="Description[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="PO_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="REC_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="UOM[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Barcode[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Discrepancy[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="date" name="ExpirationDate[]"></td>');
					newRow.append('<td><textarea class="form-control form-control-solid" rows="3" name="Remarks[]"></textarea></td>');
					$('tbody').append(newRow);
					$('tbody').find('select[name="ItemCode[]"]').change(function() {
						var selectedItemCode = $(this).val();

						fetchItemDetails(selectedItemCode, function(item) {
								var row = $(this).closest('tr'); // Get the current row
								// var row = $(this).parent().closest('tr');
								row.find('input[name="Description[]"]').val(item.Description);
								row.find('input[name="UOM[]"]').val(item.UOM);
							
						});
					});
					}
					$('#inputDatagridModal').modal('show');

			});
		
			function fetchItemDetails(selectedItemCode, callback) {
			$.ajax({
				url: "{{ route('fetch_item_details') }}", // Replace with your actual route
				type: 'GET',
				data: {
					selectedItemCode: selectedItemCode
				},
				success: function(response) {
					console.log('Received response:', response);
					if (response && Array.isArray(response)) {
						for (var i = 0; i < response.length; i++) {
						var item = response[i];
						console.log('Item Code:', item.ItemCode);
						console.log('Description:', item.Description);
						console.log('UOM:', item.UOM);
						callback(item); // Pass the item object to the callback
						}
					} else {
						console.error('Error: Invalid response data format');
					}
				},
				error: function(error) {
					console.error('Error fetching item details:', error);
				}
			});
			}

		// Save the datagrid data when the "Save Data" button is clicked
		// $('#saveDatagridData').on('click', function() {
		// 	saveDatagridData();
		// });
	
		$(document).ready(function() {
	
		$('#addNewRow').on('click', function() {
			var storedDataValue = $(this).data('dataValue');
					addRow(storedDataValue);
				});

			function addRow(storedDataValue) {
				var newRow = $('<tr></tr>');
					newRow.append('<td><input class="form-control col-10" type="text" name="TransactionHeaderID[]" value="' + dataValue + '" disabled></td>');
					newRow.append('<td><input class="form-control col-10" type="date" name="ReceivingDate[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="ItemCode[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="Description[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="PO_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="REC_QTY[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="text" name="UOM[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Barcode[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="number" name="Discrepancy[]"></td>');
					newRow.append('<td><input class="form-control col-10" type="date" name="ExpirationDate[]"></td>');
					newRow.append('<td><textarea class="form-control form-control-solid" rows="3" name="Remarks[]"></textarea></td>');
				// Add more cells as needed
				$('tbody').append(newRow);
			}
	});


	$(document).ready(function() {
		$('#saveDatagridData').on('click', function() {
		var formData = $('#inputDatagridForm').serialize();
		$.ajax({
			url: "{{ route('save_datagrid_data') }}",	
			type: 'POST',
			data: formData,
			success: function(response) {
				console.log(response); // Handle the success response
				$('#inputDatagridModal').modal('hide');
				window.location.reload();
			},
			error: function(error) {
				console.log(error); // Handle the error response
			}
		});
		});
	});

function clearTable() {
    var table = document.getElementById("dataTable");
    var tbody = table.getElementsByTagName("tbody")[0];
    tbody.innerHTML = ""; // Clears the table body content
	window.location.reload();
}

	</script>
@endsection
