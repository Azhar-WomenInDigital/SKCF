@extends('layouts.backend.backend-layouts')
@section('page-title','Banner | index')
@push('page-css')
@endpush
@section('page-content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left text-muted">
                        <i class="ion-ios7-people"></i>
                        Team Member
                    </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">SKCF</a></li>
                        <li class="breadcrumb-item"><a href="#">Team Member Edit</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- container -->
</div>
<!-- content -->


<div class="container-fluid">
    <div class="card">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" action="{{ route('admin.charitable-program.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="projects-name">Projects Name</label>
                                    <input type="text" class="form-control" id="projects-name"
                                            placeholder="Enter Projects Name" name="charitable_programs_name" value="{{ $data->charitable_programs_name }}">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="status">Select Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option {{ $data->status == true ? 'selected' : '' }} value="1" >Active</option>
                                        <option {{ $data->status == false ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
                                </fieldset>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@push('page-js')
@endpush