					
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
											<h5 class="text-dark font-weight-bold my-1 mr-5">References</h5>
											<!--end::Page Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
												<li class="breadcrumb-item text-muted">
													<a href="" class="text-muted">Masterlist</a>
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
														<h5 class="text-dark font-weight-bold my-1 mr-5">Mastelist</h5>
														<!--end::Page Title-->
														<!--begin::Breadcrumb-->
														<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
															<li class="breadcrumb-item text-muted">
																<a href="" class="text-muted">Reference</a>
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
                                                                <div class="form-group row">
                                                                    <label class="col-form-label text-right col-lg-3 col-sm-12"><strong>Module</strong></label>
                                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                                        <select class="form-control select2" id="kt_select2_2" name="module">
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
                                                                            @forelse ($module as $modules)
                                                                            <optgroup label="">
                                                                             <option value="{{ $modules->Module }}">{{ $modules->Module }}</option>
                                                                             @empty
                                                                             <option value="">No data found.</option>
                                                                            </optgroup>
                                                                            @endforelse

                                                                            
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                                        <!--begin::Button-->
                                                                        <button id ="btnAdd" class="btn btn-primary  font-weight-bolder" data-value="">
                                                                        <i class="fab fa-sistrix"> Search Record</i>
                                                                        </button>
                                                                        <!--end::Button-->
                                                                    </div>
                                                                </div>
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
                                                                    <span class="card-label font-weight-bolder text-dark">Masterlist</span>
                                                                    <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
                                                                </h3>
                                                                <div class="card-toolbar">
                                                            
                                                                    <!--begin::Button-->
                                                                    <a href="#" data-toggle="modal" data-target="#addNew" class="btn btn-primary font-weight-bolder">
                                                                    <i class="la la-plus"></i>New Record</a>
                                                                    <!--end::Button-->

                                                                    <!--begin::Modal-->
                                                                    <div class="modal fade" id="addNew" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!--begin::Form-->
                                                                                    <form action="/store-reference" method = "POST" class="form" id ="addForm">
                                                                                        @csrf	
                                                                                        <div class="form-group row">
                                                                                            <label  class="col-2 col-form-label">Setting</label>
                                                                                            <div class="col-10">
                                                                                                <input class="form-control" type="text" value="" id="example-text-input" name ="SettingName" required/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="example-number-input" class="col-2 col-form-label">Module</label>
                                                                                            <div class="col-10">
                                                                                                <input class="form-control" type="text"  id="example-number-input" name="Module" required/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label  class="col-2 col-form-label">Value</label>
                                                                                            <div class="col-10">
                                                                                                <input class="form-control" type="text" id="example-text-input" name="ValueText" required/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label  class="col-2 col-form-label">Description</label>
                                                                                            <div class="col-10">
                                                                                                <input class="form-control" type="text" id="example-text-input" name="Description"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="example-number-input" class="col-2 col-form-label">Remarks</label>
                                                                                            <div class="col-10">
                                                                                                <textarea class="form-control form-control-solid" rows="3" name="Remarks"></textarea>
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
                                                                            </div>
                                                                                
                                                                        </div>
                                                                    </div>
                                        		                </div>
											                    <!--end::Button-->
                                                                    <!--end::Modal-->
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="card-body">
                                                                <!--begin: Datatable-->
                                                                <div class="table-responsive">
                                                                    <table id="moduleTable" class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Name</th>
                                                                                <th scope="col">Value</th>
                                                                                <th scope="col">Description</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                            @forelse ($data as $row)
                                                                            <tr>
                                                                                <td>{{ $row->id }}</td>
                                                                                <td>{{ $row->SettingName }}</td>
                                                                                <td>{{ $row->Value }}</td>
                                                                                <td>{{ $row->Description }}</td>
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
                                                    </div>
                                                    <!--end: Card!-->
                                                </div>
							                    <!--end: Row!-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                </div>
                                 <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                         </div>
                        <!--end::begin-->
						

<script type="text/javascript">

$(document).ready(function() {
    $('.dropdown-item').click(function() {
        var selectedValue = $(this).data('value');
        alert(selectedValue);
        console.log('Selected value:', selectedValue);

        // Use the selectedValue as needed
    });
});

$(document).ready(function() {
    $('#btnAdd').click(function() {
        var selectedModule = $('#kt_select2_2').val();
        // Send the selectedModule to the controller using AJAX
        $.ajax({
            url: "{{ route('select-module') }}", // Replace with your controller route
            type: 'GET',
            data: {
                module: selectedModule,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Handle the response from the controller
                console.log(response);
                $('#moduleTable tbody').empty();

                // Populate the table with the response data
                $.each(response, function(index, item) {
                    var row = $('<tr></tr>');
                    row.append('<td>' + item.id + '</td>');
                    row.append('<td>' + item.SettingName + '</td>');
                    row.append('<td>' + item.Value + '</td>');
                    row.append('<td>' + item.Description + '</td>');
                    $('#moduleTable tbody').append(row);
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
