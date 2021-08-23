@extends('layouts.backend.backend-layouts')
@section('page-title','page-title-write-here')
@push('page-css')
    
@endpush
@section('page-content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Starter Page</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div>
    <!-- content -->

    <!-- When You added another page content below, that time must be keep all content inside container-fluid class -->
    <div class="container-fluid"></div>
   
@endsection
@push('page-js')
    
@endpush