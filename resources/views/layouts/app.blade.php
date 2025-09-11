<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>Log In | Bloxt Technologies - IT Solution & Technology Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo/Favicon.png')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('dashboard_assets/js/head.js')}}"></script>

    <!-- Bootstrap css -->
    <link href="{{asset('dashboard_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{asset('dashboard_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{asset('dashboard_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="auth-fluid-pages pb-0">


    @yield('content')

  <!-- Authentication js -->
    <script src="{{asset('dashboard_assets/js/pages/authentication.init.js')}}"></script>

</body>

</html>
