@extends('index')   
@section('content') 
<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->
                

    <div class="header-menu-wrapper header-menu-wrapper-left py-lg-2" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="" class="menu-link">
                        <span class="menu-text">Import File</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Import Ingredient List</h3>
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
                                    <button type="submit" class ="btn btn-success btn-sm"> Upload</button>
                                </div>
                            </form>
                            <!--end::Form-->  
                        </div>
                        <div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
											<thead>
												<tr>
													<th>Record ID</th>
													<th>File Name</th>
													<th>File Type</th>
													<th>Sync Date</th>
													<th>Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>June Ingredients - Main.xlsx</td>
													<td>June Ingredients</td>
													<td>7/1/2024</td>
                                                    <td>
                                                        <span class="label label-light-primary label-inline font-weight-bold label-lg">For Approval</span>
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-clean btn-icon" title ="Edit Details">
                                                                <i class="la la-edit"></i>
                                                        </a>
                                                        <a href="" class="btn btn-sm btn-clean btn-icon" title ="Request for Delete">
                                                                <i class="la la-trash"></i>
                                                        </a>
                                                    </td>
												</tr>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection