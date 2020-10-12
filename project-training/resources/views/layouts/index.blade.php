<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manager | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <base href="{{asset('')}}">
    <!-- bootstrap 3.0.2 -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href={{asset(("css/font-awesome.min.css"))}} rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href={{asset("css/AdminLTE.css")}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <![endif]-->
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
@include('layouts.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
   @include('layouts.sidebar')
    <aside class="right-side">
        @yield('content')
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<script src={{asset("js/app.js")}} type="text/javascript"></script>
<script src={{asset("js/AdminLTE/app.js")}} type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
@yield('js')

</body>
</html>
