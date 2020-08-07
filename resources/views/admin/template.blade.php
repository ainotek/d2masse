<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
    <meta name="author" content="Ben Ouattara">
    <meta name="keyword" content=",">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <title>{{__('Demande de messe - Backoffice')}}</title>

    <!-- Icons -->
    <link href="{{asset('vendors/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/css/simple-line-icons.min.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Styles required by this views -->
    <link href="{{asset('vendors/css/daterangepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/css/gauge.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/css/toastr.min.css')}}" rel="stylesheet">
    @yield('css')
    <style>
        th {
            white-space: nowrap;
        }
        #DataTables_Table_0_filter, #DataTables_Table_0_paginate {
            float: right;
        }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
@include('admin.partials.header')
<div class="app-body">
@include('admin.partials.sidebar')
<!-- Main content -->
    <main class="main">

        @include('admin.partials.breadcrumb')
        @yield('content')
        <!-- /.conainer-fluid -->
    </main>

    @include('admin.partials.rightAsideMenu')
</div>
@include('admin.partials.footer')

<!-- Bootstrap and necessary plugins -->
<script src="{{asset('vendors/js/jquery.min.js')}}"></script>
<script src="{{asset('vendors/js/popper.min.js')}}"></script>
<script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/pace.min.js')}}"></script>

<!-- Plugins and scripts required by all views -->
<script src="{{asset('vendors/js/Chart.min.js')}}"></script>

<!-- CoreUI Pro main scripts -->

<script src="{{asset('js/app.js')}}"></script>

<!-- Plugins and scripts required by this views -->
<script src="{{asset('vendors/js/toastr.min.js')}}"></script>
<script src="{{asset('vendors/js/gauge.min.js')}}"></script>
<script src="{{asset('vendors/js/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/daterangepicker.min.js')}}"></script>

<!-- Custom scripts required by this view -->
<script src="{{asset('js/views/main.js')}}"></script>


<script src="{{asset('vendors/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/views/datatables.js')}}"></script>
@yield('scripts')
</body>
</html>
