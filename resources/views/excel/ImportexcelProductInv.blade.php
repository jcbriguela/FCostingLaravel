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
												<a href="" class="text-muted">Upload</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Inventory</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Upload File</a>
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
											<h3 class="card-label">Import List</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-download"></i>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<ul class="nav flex-column nav-hover">
														<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-print"></i>
																<span class="nav-text">Print</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-copy"></i>
																<span class="nav-text">Copy</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-excel-o"></i>
																<span class="nav-text">Excel</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-text-o"></i>
																<span class="nav-text">CSV</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-pdf-o"></i>
																<span class="nav-text">PDF</span>
															</a>
														</li>
													</ul>
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#addNew">
											<i class="la la-plus"></i>New Record</a>

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
																	<form action="/StoreProduct" method = "POST" class="form" id ="addForm">
																	@csrf	
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Product Code</label>
																		<div class="col-10">
																		<input class="form-control" type="text" value="" id="example-text-input" name ="ProductCode" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Insys Product Id</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="InsysProductId" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Insys Product Code</label>
																		<div class="col-10">
																		<input class="form-control" type="text" id="example-text-input" name="InsysProductCode" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Barcode</label>
																		<div class="col-10">
																		<input class="form-control" type="text" id="example-text-input" name="Barcode"/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label  class="col-2 col-form-label">Name</label>
																		<div class="col-10">
																		<input class="form-control" type="text" id="example-text-input" name="Name" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label" >Cost</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="Cost" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Price</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="Price" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Mark Down</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="isMarkDown" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Category</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="categoryId" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label" >Model</label>
																		<div class="col-10">
																		<input class="form-control" type="number"  id="example-number-input" name="modelId" required/>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="example-number-input" class="col-2 col-form-label">Remarks</label>
																		<div class="col-10">
																		<textarea class="form-control form-control-solid" rows="3" name="Remarks"></textarea>
																		</div>
																	</div>
																	</div>
																	<div class="card-footer">
																	<div class="row">
																		<div class="col-2">
																		</div>
																		<div class="col-10">
																		<button type="submit" class="btn btn-success mr-2">Submit</button>
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
											<!--end::Button-->
										</div>
									</div>

									<!--begin::Form-->
									<form  action ="Importexcel-ProductInv" method ="POST" enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="card-body">
											<div class="form-group row">
												<div class="dropzone-msg dz-message needsclick">
												<input type="file" class = "form-control-file" name="excel_file" id="file">
												<!-- <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">File Upload</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<div class="dropzone dropzone-default" id="kt_dropzone_1">
														<div class="dropzone-msg dz-message needsclick">
															<input type="file" class = "form-control-file" name="excel_file" id="file">
															<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are 
															<strong>not</strong>actually uploaded.</span> 
														</div>
													</div>-->
												</div>
											<button type="submit" class ="btn btn-success btn-primary"> Upload</button>

											</div> 
										</div>
									</form>
                            		<!--end::Form--> 

									<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mt-2 mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">
													<div class="row align-items-center">
														<div class="col-md-4 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
											
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
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
														@foreach ($data as $list)
														<tr>
															<td class="pl-0">
																<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Main</a>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Jean</span>
																<span class="text-muted font-weight-bold">Encoder</span>
															</td>
															<td>
																<span class="text-info font-weight-bolder d-block font-size-lg">{{$list['created_at']}}</span>
															</td>
															<td>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$list['UploadFile']}}</span>
															</td>
															<td>
																<span class="label label-lg label-light-warning label-inline">In Progress</span>
															</td>
															<td class="pr-0 text-right">
																<button id="btnShow" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-value="{{$list['UploadFile']}}">
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
																		<li><a class="dropdown-item" href="#" data-status="1">Approved</a></li>
																		<li><a class="dropdown-item" href="#" data-status="2">Disapproved</a></li>
																</div>
															</div>
															</td>
														</tr>
														@endforeach
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
															<h5 class="modal-title" id="exampleModalLabel">Data List</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<i aria-hidden="true" class="ki ki-close"></i>
															</button>
														</div>
														<div class="modal-body">
														<table class="table">  
															<thead>
																<tr>
																	<th>Product Code</th>
																	<th>Insys Product Id</th>
																	<th>Insys Product Code</th>
																	<th>Name</th>
																	<th>Category</th>
																	<th>Model</th>
																	<th>Cost</th>
																	<th>Price</th>
																	<th>Remarks</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
														<div class="modal-footer">
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
						
							// ... create other cells

							productCodeCell.textContent = item.ProductCode;
							InsysProductCodeCell.textContent = item.InsysProductCode;
							InsysProductIdCodeCell.textContent = item.InsysProductId;
							ProductNameCell.textContent = item.ProductName;
							CategoryCell.textContent = item.Category;
							ModelCell.textContent = item.Model;
							CostCell.textContent = item.Cost;
							PriceCell.textContent = item.Price;
							RemarksCell.textContent = item.Remarks;

							// Create the edit button
							const editButton = document.createElement('button');
								editButton.type = 'button';
								editButton.classList.add('btn', 'btn-primary','btn-sm', 'edit-btn');	
								editButton.textContent = 'Edit';
								editButton.dataset.id = item.ProductCode;

								// Append the edit button to the editButtonCell
								editButtonCell.appendChild(editButton);
						
							// ... populate other cells

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
	
$(document).ready(function() {
    $('.dropdown-item').click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        let status = $(this).data('status');
        let recordId = $(this).closest('tr').find('td:nth-child(4)').text(); // Assuming the first column is the ID

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
</script>

@endsection