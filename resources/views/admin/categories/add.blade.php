@extends('layout.admin-app')
 <!-- Start Content-->
 @section('content')
 <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control border" id="dash-daterange">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-blue border-blue text-white">
                                        <i class="mdi mdi-calendar-range"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Add Category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Fill the Form</h4>
                    <hr>
                    <form>
                    <div class="row">
                        <div class="col-md-6">
                            
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Category Name</label>
                                    <input type="text" id="simpleinput" class="form-control">
                                </div>
                            
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            
                            <div class="form-group mb-3">
                                <label for="simpleinput">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                    </div> 
                      <div class="col-md-12">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                      </div>
                    </div>
                </form>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>

</div> <!-- container -->
@endsection
