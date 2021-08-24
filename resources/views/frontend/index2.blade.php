@extends('layouts.frontend.master')
@section('page-title','index')
@push('page-css')
<style>
  marquee{
    padding-top: 100px;
    font-size: 50px
  }
</style>
@endpush
@section('page-content')
  <div class="d-flex justify-content-center align-items-center">
    <div class="marque">
      <marquee>Implement the frontend designs here :(</marquee>
    </div>
  </div>
@endsection
@push('page-js')
    
@endpush