<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">
        <!-- App title -->
        <title>500||Internal Server Error</title>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App CSS -->
        <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- Modernizr js -->
        <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>
    </head>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class="ex-page-content text-center">
                <div class="text-error shadow-text">500</div>
                <h3 class="text-uppercase text-white font-600">Internal Server Error</h3>
                <p class="text-white m-t-30">
                    Why not try refreshing your page? or you can contact <a href="" class="text-white text-uppercase"><b>support</b></a>
                </p>
                <br>
                <a class="btn btn-pink waves-effect waves-light" href="{{ route('admin.dashboard') }}"> Return Home</a>
            </div>
        </div>
        <!-- end wrapper page -->
    </body>
</html>