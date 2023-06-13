<!doctype html >
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="نظام رفع الملفات الخاصة بالموظفين" name="description"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','تحميل المرفقات')</title>

    @include('layouts.head-css')
    <!-- Bootstrap 5 CSS -->
</head>

<body>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@include('notify::components.notify')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            @yield('content')
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
</body>

</html>
