@extends('layouts.backend.backend-layouts')
@section('page-title','Donar | Edit')
@push('page-css')
<!-- form Uploads -->
<link href="{{ asset('assets/backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('page-content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left text-muted">
                        <i class="ti-gallery"></i>
                        Donar Edit
                    </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">SKCF</a></li>
                        <li class="breadcrumb-item"><a href="#">Donar Edit</a></li>
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
            <div class="col-md-8">
                <form method="POST" action="{{ route('admin.donar.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <fieldset class="form-group">
                                    <label for="donar-name">Donar Name</label>
                                    <input type="text" class="form-control" id="donar-name"
                                            placeholder="Enter donar Name" name="donar_name" value="{{ $data->donar_name }}">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="status">Select Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option {{ $data->status == true ? 'selected' : '' }} value="1" >Active</option>
                                        <option {{ $data->status == false ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
                                </fieldset>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div><!-- end col -->
                            <div class="col-4">

                                <fieldset class="form-group">
                                    <label for="img">Donar Image</label>
                                    <input type="file" class="dropify" name="donar_img" data-default-file="{{ asset('uploads/donar-pic/'.$data->donar_img) }}" data-max-file-size="1M" />
                                </fieldset>
                            </div>
                        </div><!-- end row -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
@push('page-js')
<!-- file uploads js -->
<script src="{{ asset('assets/backend/plugins/fileuploads/js/dropify.min.js') }}"></script>
<!-- Dropify Script -->
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>
<!-- Dropify Script End-->
@endpush