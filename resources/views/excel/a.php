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
                                    </div> 
                                    <button type="submit" class ="btn btn-success btn-primary"> Upload</button>
                                </div>
                            </form>
                            <!--end::Form-->  
                                    <div class="card-body py-0">
										<!--begin: Datatable-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                                                <thead>
                                                    <tr class="text-left">
                                                        <th class="pl-0" style="width: 30px">
                                                            <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                                <input type="checkbox" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </th>
                                                        <th class="pl-0" style="min-width: 120px">Order id</th>
                                                        <th style="min-width: 110px">Country</th>
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
                                                        <th style="min-width: 120px">Company</th>
                                                        <th style="min-width: 120px">Status</th>
                                                        <th class="pr-0 text-right" style="min-width: 160px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0 py-6">
                                                            <label class="checkbox checkbox-lg checkbox-inline">
                                                                <input type="checkbox" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
                                                            <span class="text-muted font-weight-bold">Code: BR</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-info font-weight-bolder d-block font-size-lg">05/28/2020</span>
                                                            <span class="text-muted font-weight-bold">Paid</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                            <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                        </td>
                                                        <td class="pr-0 text-right">
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
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
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-6">
                                                            <label class="checkbox checkbox-lg checkbox-inline">
                                                                <input type="checkbox" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">05822-FXSP</a>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belarus</span>
                                                            <span class="text-muted font-weight-bold">Code: BY</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-info font-weight-bolder d-block font-size-lg">02/04/2020</span>
                                                            <span class="text-muted font-weight-bold">Rejected</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                                                            <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                        </td>
                                                        <td class="pr-0 text-right">
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
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
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-6">
                                                            <label class="checkbox checkbox-lg checkbox-inline">
                                                                <input type="checkbox" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
                                                            <span class="text-muted font-weight-bold">Code: PH</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-info font-weight-bolder d-block font-size-lg">23/12/2020</span>
                                                            <span class="text-muted font-weight-bold">Paid</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                                                            <span class="text-muted font-weight-bold">Transportation</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-lg label-light-success label-inline">Success</span>
                                                        </td>
                                                        <td class="pr-0 text-right">
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
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
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0 py-6">
                                                            <label class="checkbox checkbox-lg checkbox-inline">
                                                                <input type="checkbox" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-lg">4472-QREX</a>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
                                                            <span class="text-muted font-weight-bold">Code: AR</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-info font-weight-bolder d-block font-size-lg">17/09/2021</span>
                                                            <span class="text-muted font-weight-bold">Pending</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                                                            <span class="text-muted font-weight-bold">Insurance</span>
                                                        </td>
                                                        <td>
                                                            <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                        </td>
                                                        <td class="pr-0 text-right">
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
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
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
											
										<!-- <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
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
													<th>Toto</th>
												</tr>
											</thead>
											<tbody>
                                            @foreach ($data as $list)

												<tr class="item-row" data-id="{{ $list['id'] }}">
													<td>{{$list['ProductCode']}} </td>
													<td class="name-cell"> {{$list['InsysProductId']}} </td>
													<td>{{$list['InsysProductCode']}}</td>
													<td>{{$list['Barcode']}} sdsds</td>
													<td>{{$list['Name']}}</td>
													<td>{{$list['Cost']}}</td>
													<td>{{$list['Price']}}</td>
													<td>{{$list['isMarkDown']}}</td>
													<td>{{$list['categoryId']}}</td>
													<td>{{$list['modelId']}}</td>
													<td>{{$list['Status']}}</td>
													<td>{{$list['Remarks']}}</td>
													<td>{{$list['UploadFile']}}</td>
													<td>{{$list['Remarks']}}</td>
                                                   
												</tr>
                                                @endforeach

											</tbody>
										</table> -->
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
        var row = $(this).closest('tr');
        var id = row.data('id');
        var nameCell = row.find('.name-cell');

        // Toggle edit mode
        nameCell.html('<input type="text" class="edit-input" value="' + nameCell.text() + '">');
        $(this).text('Save');
        $(this).removeClass('edit-btn').addClass('save-btn');

        // Handle save button click
        $(this).click(function() {
            var newName = row.find('.edit-input').val();

            // Send AJAX request to update data
            $.ajax({
                url: '/items/' + id,
                type: 'PUT',
                data: {
                    name: newName
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle successful update
                    nameCell.text(newName);
                    $(this).text('Edit');
                    $(this).removeClass('save-btn').addClass('edit-btn');
                },
                error: function(error) {
                    // Handle errors
                    console.error(error);
                }
            });
        });
    });
});
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