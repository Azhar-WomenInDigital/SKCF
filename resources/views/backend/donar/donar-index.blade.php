@extends('layouts.backend.backend-layouts')
@section('page-title','donar | index')
@push('page-css')
<!-- form Uploads -->
<link href="{{ asset('assets/backend/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('assets/backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<style>

</style>
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
                Donar </h4>
            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">SKCF</a></li>
              <li class="breadcrumb-item"><a href="#">Donar</a></li>
            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div><!-- end row -->
    </div> <!-- container -->
  </div>
  <!-- content -->

  <!-- List Of Donar Data -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card-box table-responsive">
              <a href="" class="btn btn-success mb-5" data-toggle="modal" data-target="#myModal">
                  Create New Donar
                  <i class="ion-plus"></i>
              </a>
              <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>#Sl</th>
                      <th>Donar Name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Last Update</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $key=>$data)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $data->donar_name }}</td>
                      <td>
                          <img src="{{ asset('uploads/donar-pic/'.$data->donar_img) }}" alt="" width="200px" height="150px">
                      </td>
                      <td>
                        @if ($data->status == true)
                          <span class="badge badge-success">Active</span>
                        @else
                          <span class="badge badge-danger">Inactive</span>
                        @endif
                      </td>
                      <td>{{ $data->updated_at->diffForHumans() }}</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="{{ route('admin.donar.edit', $data->id) }}" class="btn btn-warning btn-sm"><i class="zmdi zmdi-edit zmdi-sm"></i></a>
                          <a href="#" class="btn btn-info btn-sm"><i class="zmdi zmdi-eye"></i></a>
                          <button type="button" class="btn btn-danger btn-sm rounded-right " onclick="deleteifno({{ $data->id }})">
                            <i class="zmdi zmdi-delete"></i>
                          </button>
                          <form id="delete-form-{{ $data->id }}" action="{{ route('admin.donar.destroy', $data->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                          </form>
                        </div>
                      </td>  
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div><!-- end row -->
  </div>
  <!-- End List Of Donar Data -->


  <!-- Modal Card -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create Donar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="POST" action="{{ route('admin.donar.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-12">
                              <fieldset class="form-group">
                                  <label for="donar-name">Donar Name</label>
                                  <input type="text" class="form-control" id="donar-name"
                                          placeholder="Enter donar Name" name="donar_name">
                              </fieldset>
                              <fieldset class="form-group">
                                  <label for="status">Select Status</label>
                                  <select class="form-control" id="status" name="status">
                                      <option selected disabled>Select Status</option>
                                      <option value="1">Active</option>
                                      <option value="0">Inactive</option>
                                  </select>
                              </fieldset>
                              <fieldset class="form-group">
                                  <label for="img">Donar Image</label>
                                  <input type="file" class="dropify" name="donar_img" data-max-file-size="1M" />
                              </fieldset>
                          </div><!-- end col -->
                      </div><!-- end row -->
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection
@push('page-js')
<!-- file uploads js -->
<script src="{{ asset('assets/backend/plugins/fileuploads/js/dropify.min.js') }}"></script>
<!-- Required datatable js -->
<script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
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

<!-- Data Table script -->
<script>
  $(document).ready(function() {
    // Default Datatable
    $('#datatable').DataTable();
    // Responsive Datatable
    $('#responsive-datatable').DataTable();
    table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
  });
</script>
<!-- Sweet Aleart Js -->
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
  function deleteifno(id) {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
          event.preventDefault();
          document.getElementById('delete-form-'+id).submit();
      } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
      ) {
          swal(
              'Cancelled',
              'Your data is safe :)',
              'error'
          )
      }
    })
  }
</script>
@endpush