@extends('layouts.backend.backend-layouts')
@section('page-title','Banner | index')
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
        <form method="POST" action="{{ route('admin.team.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <fieldset class="form-group">
                            <label for="member-name">Memebr Name</label>
                            <input type="text" class="form-control" id="member-name"
                                    placeholder="Enter member Name" name="member_name" value="{{ $data->member_name }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="member-img">Member Image</label>
                            <input type="file" class="dropify" name="member_img" data-default-file="{{ asset('uploads/team-member-pic/'.$data->member_img) }}" data-max-file-size="1M" />
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label for="status">Select Status</label>
                            <select class="form-control" id="status" name="status">
                                <option selected disabled>Select Status</option>
                                <option value="1" {{ $data->status == true ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $data->status == false ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </fieldset>
                    </div>
                    <!-- end col -->
                    <div class="col-6">
                        <fieldset class="form-group">
                            <label for="twiter-links">Twiter Links</label>
                            <input type="text" class="form-control" id="twiter-links"
                                    placeholder="Enter Twiter Links" name="tw_link" value="{{ $data->tw_link }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="facebook-links">Facebook Links</label>
                            <input type="text" class="form-control" id="facebook-links"
                                    placeholder="Enter member Name" name="f_link" value="{{ $data->f_link }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="instagram-links">Instagram Links</label>
                            <input type="text" class="form-control" id="instagram-links"
                                    placeholder="Enter member Name" name="inst_link" value="{{ $data->inst_link }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="linked-in-links">Linked in Links</label>
                            <input type="text" class="form-control" id="linked-in-links"
                                    placeholder="Enter member Name" name="li_link" value="{{ $data->li_link }}">
                        </fieldset>
                        <button type="submit" class="btn btn-success mt-4">Save changes</button>
                    </div>
                </div><!-- end row -->
            </div>
        </form>
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