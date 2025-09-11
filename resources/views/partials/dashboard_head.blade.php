<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>{{$page_title ?? 'Bloxt Technologies - IT Solution & Technology Services' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo/Favicon.png')}}">
    <link
        href="{{asset('dashboard_assets/libs/dropzone/min/dropzone.min.css')}}"
        rel="stylesheet"
        type="text/css" />
    <link
        href="{{asset('dashboard_assets/libs/select2/css/select2.min.css')}}"
        rel="stylesheet"
        type="text/css" />
    <link
        href="{{asset('dashboard_assets/libs/flatpickr/flatpickr.min.css')}}"
        rel="stylesheet"
        type="text/css" />
    <!-- Theme Config Js -->
    <script src="{{ asset('dashboard_assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- App css -->
    <link href="{{ asset('dashboard_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">