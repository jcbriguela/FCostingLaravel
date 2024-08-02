@extends('index')   
@section('content') 
<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->
      
@if (session('alert'))
    <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">{{session('alert')}}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
@endif



    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
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
								
							</div>
						</div>
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-favourite text-primary"></i>
											</span>
											<h3 class="card-label">Import Ingredient List</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
											<i class="la la-plus"></i>Add Record</a>
											<!--end::Button-->
										</div>
									</div>
                                        <!-- Modal-->
                                        <div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
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
                                                            <form action="/StoreProduct" method = "POST" class="form" id ="addFrom">
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
                                            </div>
                                        </div>-->
                                    </div> 
                                    <button type="submit" class ="btn btn-success btn-primary"> Upload</button>
                                </div>
                            </form>
                            <!--end::Form-->  
                        </div>
                        <div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
											<thead>
												<tr>
													<th>Product Code</th>
													<th>Insys Product Id</th>
													<th>Insys Product Code</th>
													<th>Barcode</th>
													<th>Name</th>
													<th>Cost</th>
													<th>Price</th>
													<th>Mark Down</th>
													<th>Category</th>
													<th>Model</th>
													<th>Status</th>
													<th>Remarks</th>
													<th>Upload File</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                                            @foreach ($data as $list)

												<tr>
													<td>{{$list['ProductCode']}} </td>
													<td>{{$list['InsysProductId']}}</td>
													<td>{{$list['InsysProductCode']}}</td>
													<td>{{$list['Barcode']}}</td>
													<td>{{$list['Name']}}</td>
													<td>{{$list['Cost']}}</td>
													<td>{{$list['Price']}}</td>
													<td>{{$list['isMarkDown']}}</td>
													<td>{{$list['categoryId']}}</td>
													<td>{{$list['modelId']}}</td>
													<td>{{$list['Status']}}</td>
													<td>{{$list['Remarks']}}</td>
													<td>{{$list['UploadFile']}}</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-clean btn-icon edit-btn" title ="Edit Details" data-id="{{ $list['ProductCode'] }}" >
                                                                <i class="la la-edit"></i>
                                                        </a>
                                                        <a href="" class="btn btn-sm btn-clean btn-icon" title ="Request for Delete">
                                                                <i class="la la-trash"></i>
                                                        </a>
                                                    </td>
												</tr>
                                                @endforeach

											</tbody>
										</table>
										<!--end: Datatable-->
									</div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.edit-btn').click(function() {
            var ProductCode = $(this).data('ProductCode');
            var name = $(this).closest('tr').find('.editable').val();

            $.ajax({
                url: '/update-record',
                type: 'PUT',
                data: { ProductCode: ProductCode, name: name },
                success: function(response) {
                    console.log(response.data);
                    // Optionally update the UI
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });

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