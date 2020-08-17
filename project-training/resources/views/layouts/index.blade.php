<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <base href="{{asset('')}}">
    <!-- bootstrap 3.0.2 -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href={{asset(("css/font-awesome.min.css"))}} rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href={{asset("css/AdminLTE.css")}} rel="stylesheet" type="text/css" />

    <![endif]-->
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
@include('layouts.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
   @include('layouts.sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        @yield('content')
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src={{asset("js/jquery-ui-1.10.3.min.js")}} type="text/javascript"></script>
<!-- Bootstrap -->
<script src={{asset("../assets/js/bootstrap.min.js")}} type="text/javascript"></script>


<!-- AdminLTE App -->
<script src={{asset("js/AdminLTE/app.js")}} type="text/javascript"></script>


</body>
</html>
