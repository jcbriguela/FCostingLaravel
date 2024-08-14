					
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
								
                           
								
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-header">
										<div class="card-title">
											<h3 class="card-label">Sale File Upload </h3>
										</div>
									</div>
									<!--begin::Form-->
									<form>
										<div class="card-body">
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Single File Upload</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<div class="dropzone dropzone-default dz-clickable" id="kt_dropzone_1">
														<div class="dropzone-msg dz-message needsclick">
															<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
															<span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are
															<strong>not</strong>actually uploaded.</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<div class="row">
												<div class="col-lg-3"></div>
												<div class="col-lg-4">
													<button type="reset" class="btn btn-light-primary mr-2" id ="submit">Submit</button>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
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
	alert("Data Succesfully Uploaded");
   });
	});

</script>
@endsection
