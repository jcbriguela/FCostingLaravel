					
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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Approval/Inventory </h5>
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
																					<span class="card-label font-weight-bolder text-dark">For Approval List</span>
																					<span class="text-muted mt-3 font-weight-bold font-size-sm">Please see the details of received items</span>
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
																	<th class="pr-0 text-right" style="min-width: 100px">action</th>
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
                                                                        <li><a class="dropdown-item" href="#" data-status="1" data-value="{{ $row->TransactionID  }}">Approved</a></li>
                                                                        <li><a class="dropdown-item" href="#" data-status="2" data-value="{{ $row->TransactionID  }}">Disapproved</a></li>
                                                                    </meta>
                                                                </div>
															</div>
														</td>
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
                                <div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-body pt-15">
												<!--begin::User-->
														<div class="form-group row">
															<label class="col-4 col-form-label">Search</label>
															<div class="col-8">
																		<select class="form-control select2" id="kt_select2_2" name="SearchitemCode">
                                                                            <!-- <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                                <option value="AK">Alaska</option>
                                                                                <option value="HI">Hawaii</option>
                                                                            </optgroup>
                                                                            <optgroup label="Pacific Time Zone">
                                                                                <option value="CA">California</option>
                                                                                <option value="NV" selected="selected">Nevada</option>
                                                                                <option value="OR">Oregon</option>
                                                                                <option value="WA">Washington</option>
                                                                            </optgroup> -->
                                                                            @forelse ($productList as $productLists)
                                                                            <optgroup label="">
                                                                             <option value="{{ $productLists->ItemCode }}">{{ $productLists->ItemCode }}</option>
                                                                             @empty
                                                                             <option value="">No data found.</option>
                                                                            </optgroup>
                                                                            @endforelse

                                                                            
                                                                        </select>
															</div>
															<div class="col-4">
															</div>
															<div class="col-8">
																 <!--begin::Button-->
																 <button id ="btnSearch" class="btn btn-primary  font-weight-bolder" data-value="">
																	<i class="fab fa-sistrix"> Search Record</i>
																</button>
																<!--end::Button-->
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
													<span class="card-label font-weight-bolder text-dark">Item Details</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
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
													
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="card-body py-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table table-head-custom table-vertical-center" id="detailsTable">
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
														<th style="min-width: 150px">Cost</th>
													    <th style="min-width: 150px">Price</th>
													    <th style="min-width: 150px">SRP1</th>
													    <th style="min-width: 150px">SRP2</th>
													    <th style="min-width: 150px">SRP3</th>
													    <th style="min-width: 150px">SRP4</th>
													    <th style="min-width: 150px">SRP5</th>
													    <th style="min-width: 150px">SRP6</th>
													    <th style="min-width: 150px">SRP7</th>
													    <th style="min-width: 150px">Remarks</th>
													</tr>
												</thead>
												<tbody>
														@forelse ($productList as $productLists)
														<tr>
														<td>{{$productLists->ItemCode }}</td>
														<td>{{$productLists->Description }}</td>
														<td>{{$productLists->UOM }}</td>
														<td>{{$productLists->Cost }}</td>
														<td>{{$productLists->Price }}</td>
														<td>{{$productLists->SRP_1 }}</td>
														<td>{{$productLists->SRP_2 }}</td>
														<td>{{$productLists->SRP_3 }}</td>
														<td>{{$productLists->SRP_4 }}</td>
														<td>{{$productLists->SRP_5 }}</td>
														<td>{{$productLists->SRP_6 }}</td>
														<td>{{$productLists->SRP_7 }}</td>
														</tr>
														@empty
														<tr>
															<td colspan="17">No data found.</td>
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
                                                            <table class="table table-head-custom table-vertical-center" id="InventoryTable">
                                                                <thead>
                                                                    <tr class="text-left">
                                                                       
                                                                        <th style="min-width: 150px">Product Code</th>
                                                                        <th style="min-width: 150px">Stock On Hand</th>
                                                                        <!-- <th style="min-width: 150px">Transaction Type</th> -->
                                                                        <!-- <th style="min-width: 150px">On Hand QTY</th>
                                                                        <th style="min-width: 150px">Available QTY</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
																<tbody>
																	@forelse ($dataInv as $rowInv)
																	<tr>
																	<td>{{$rowInv->ProductCode }}</td>
																	<td>{{$rowInv->SOH }}</td>
                                                                    </tr>
                                                                    @empty
																	<tr>
																		<td colspan="17">No data found.</td>
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
                $('#detailsTable tbody').empty();
				// Populate the table with the response data
				$.each(data, function(index, item) {
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
				});

				
					// Populate another table or element with dataInv
					$('#InventoryTable tbody').empty();
					$.each(dataInv, function(index, item) {
						var row = $('<tr></tr>');
						row.append('<td>' + item.ProductCode + '</td>');
						row.append('<td>' + item.SOH + '</td>');
					$('#InventoryTable tbody').append(row);

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
