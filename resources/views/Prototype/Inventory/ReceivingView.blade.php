					
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
										<h5 class="text-dark font-weight-bold my-1 mr-5">View List </h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Receiving</a>
											</li>
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
																	<div class="card card-custom gutter-b">
																		
																		<div class="card-body">
																			<!--begin::Details-->
																			<div class="d-flex mb-9">
																				<!--begin::Info-->
																				<div class="flex-grow-1">
																					<!--begin::Title-->
																					
																					<!--end::Title-->
																					<!--begin::Content-->
																					<div class="row">
																	<div class="col-lg-12">
																		<!--begin::Card-->
																		<div class="card card-custom">
																			<div class="card-header flex-wrap py-5">
																				<h3 class="card-title align-items-start flex-column">
																					<span class="card-label font-weight-bolder text-dark">Data List</span>
																					<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the details of received items</span> -->
																				</h3>
																				<div class="card-toolbar">
																				</div>
																			</div>
																			
																			<div class="card-body">
																				<!--begin: Datatable-->
																				<table class="table" id="approvalTbl">
																<thead>
																	<th class="pl-0" style="width: 20px">
																			<label class="checkbox checkbox-lg checkbox-inline">
																				<input type="checkbox" value="1" />
																				<span></span>
																			</label>
																	</th>
																	<th style="min-width: 100px">#</th>
																	<th style="min-width: 100px">Receiving Date</th>
																	<th style="min-width: 100px">Item Code</th>
																	<th style="min-width: 100px">Description</th>
																	<th style="min-width: 100px">SO Qty</th>
																	<th style="min-width: 100px">Actual Received</th>
																	<th style="min-width: 100px">UOM</th>
																	<th style="min-width: 100px">Discrepancy</th>
																	<th style="min-width: 100px">Status</th>
																	<th style="min-width: 100px">Remarks</th>
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
														<td>{{$row->TransactionID }}</td>
														<td>{{$row->ReceivingDate}}</td>
														<td>{{$row->ItemCode}}</td>
														<td>{{$row->InventoryName}}</td>
														<td>{{$row->PO_QTY}}</td>
														<td>{{$row->REC_QTY}}</td>
														<td>{{$row->UOM_Desc}}</td>
														<td id="difference"></td>
														<td><span class="form-text text-muted">{{$row->Status}}</span></td>
														<td><span class="form-text text-muted">{{$row->Remarks}}</span></td>
														
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
									<!--end: Card!-->
								</div>
								</div>
								<!--end: Row!-->
								
												<!--end::Content-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<div class="separator separator-solid"></div>
										</div>
										</div>
								
								<!--begin::Row Insert the Page Details-->
                                
												<!--end: Card-->
												<!--end: List Widget 10-->
											</div>
											
										</div>
										<!--end::Row-->
										<!--begin::Advance Table Widget 5-->
									
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
<script>

	var table = document.getElementById("approvalTbl");
	var rows = table.getElementsByTagName("tr");

	for (var i = 1; i < rows.length; i++) {
	var cells = rows[i].getElementsByTagName("td");  

	var value1 = parseInt(cells[4].textContent);
	var value2 = parseInt(cells[5].textContent);
	var difference = value1 - value2;

	cells[2].textContent = difference;
	}	

	$(document).ready(function() {
		$('.dropdown-item').click(function() {
			var status = $(this).data('status');
			var id = $(this).data('value');

			$.ajax({
				url: '/update-status-inv', // Replace with your controller route
				type: 'PUT',
				data: {
					status: status,
					id: id,
					_token: '{{ csrf_token() }}' // Add CSRF token if using CSRF protection
				},
				success: function(response) {
					console.log(response); // Handle the response from the controller
					// alert(response.message);
					location.reload();
				},
				error: function(error) {
					console.error(error); // Handle errors
				}
			});
		});
	});

	$(document).ready(function() {
    $('#searchInput').keyup(function() {
        var searchQuery = $(this).val();

        $.ajax({
            url: "{{ route('search') }}",
            type: 'GET',
            data: {
                query: searchQuery
            },
            success: function(response) {
                $('#searchResults').html(response);
				$('#detailsTable tbody').empty();
				// Populate the table with the response data
				$.each(response, function(index, item) {
					// $('#itemDesc').val($('#itemDesc').val() + item.Description);	

					var row = $('<tr></tr>');
					row.append('<td>' + item.ItemCode + '</td>');
					row.append('<td>' + item.Description + '</td>');
					row.append('<td>' + item.UOM + '</td>');
					row.append('<td>' + item.Cost + '</td>');
					row.append('<td>' + item.Price + '</td>');
					row.append('<td>' + item.SRP_1 + '</td>');
					row.append('<td>' + item.SRP_2 + '</td>');
					row.append('<td>' + item.SRP_3 + '</td>');
					row.append('<td>' + item.SRP_4 + '</td>');
					row.append('<td>' + item.SRP_5 + '</td>');
					row.append('<td>' + item.SRP_6 + '</td>');
					row.append('<td>' + item.SRP_7 + '</td>');
					$('#detailsTable tbody').append(row);
					// Append the item's name to the input field
				});
            }
        });
    });
});


$(document).ready(function() {
    $('#btnSearch').click(function() {
        var selectedSearch = $('#kt_select2_2').val();
        // Send the selectedModule to the controller using AJAX
        $.ajax({
            url: "{{ route('search') }}", // Replace with your controller route
            type: 'GET',
            data: {
                selectedSearch: selectedSearch,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Handle the response from the controller
                console.log(response);
				var data = response.data;
				var dataInv = response.dataInv;
				var dataP = response.dataP;
				console.log(data);

				var itemDescriptions = "";
				$.each(response.data, function(index, item) {
					itemDescriptions += item.Description + "\n";
				});
        		$('#itemDesc').val(itemDescriptions);
				
				var PackConfigs = "";
				$.each(response.data, function(index, item) {
					PackConfigs += item.PackConfig + "\n";
				});
        		$('#PackConfig').val(PackConfigs);

				var Prices = "";
				$.each(response.data, function(index, item) {
					Prices += item.Price + "\n";
				});
        		$('#Price').val(Prices);

				var ProductTypes = "";
				$.each(response.data, function(index, item) {
					ProductType += item.ProductType + "\n";
				});
        		$('#ProductType').val(ProductTypes);

				var SRP_1s = "";
				$.each(response.data, function(index, item) {
					SRP_1s += item.SRP_1 + "\n";
				});
        		$('#SRP_1').val(SRP_1s);

				var SRP_2s = "";
				$.each(response.data, function(index, item) {
					SRP_2s += item.SRP_2 + "\n";
				});
        		$('#SRP_2').val(SRP_2s);

				var SRP_3s = "";
				$.each(response.data, function(index, item) {
					SRP_3s += item.SRP_3 + "\n";
				});
        		$('#SRP_3').val(SRP_3s);

				var SRP_4s = "";
				$.each(response.data, function(index, item) {
					SRP_4s += item.SRP_4 + "\n";
				});
        		$('#SRP_4').val(SRP_4s);

				var SRP_5s = "";
				$.each(response.data, function(index, item) {
					SRP_5s += item.SRP_5 + "\n";
				});
        		$('#SRP_5').val(SRP_5s);

				var SRP_6s = "";
				$.each(response.data, function(index, item) {
					SRP_6s += item.SRP_6 + "\n";
				});
        		$('#SRP_6').val(SRP_6s);

				var SRP_7s = "";
				$.each(response.data, function(index, item) {
					SRP_7s += item.SRP_7 + "\n";
				});
        		$('#SRP_7').val(SRP_7s);

				
					// Populate another table or element with dataInv
					$('#InventoryTable tbody').empty();
					$.each(dataInv, function(index, item) {
						var row = $('<tr></tr>');
						row.append('<td>' + item.ProductCode + '</td>');
						row.append('<td>' + item.Description + '</td>');
						row.append('<td>' + item.SOH + '</td>');
					$('#InventoryTable tbody').append(row);

					});

					$('#detailsTable tbody').empty();
					// Populate the table with the response data
					$.each(dataP, function(index, item) {
					var row = $('<tr></tr>');
					row.append('<td>' + item.ItemCode + '</td>');
					row.append('<td>' + item.REC_QTY + '</td>');
					row.append('<td>' + item.created_at + '</td>');
					row.append('<td>' + item.ExpirationDate + '</td>');
					$('#detailsTable tbody').append(row);
				});
            },
            error: function(error) {
                console.error(error);
            }
        });
    });
});
</script>

@endsection
