<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
        <meta charset="utf-8" />
        <title>Vertex</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
              name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/fontawesome-all.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/default.css')}}" rel="stylesheet" id="theme" />
        <link href="{{asset('css/smart_wizard.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('js/pace.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        @yield('style')
      </head>
<body class="flat-black">

<!-- begin #page-container -->
<div id="page-container" class="page-container page-sidebar-fixed page-header-fixed">
  <!-- begin #header -->
  @include('layouts.bar.navbar')
  <!-- end #header -->

  <!-- begin #sidebar -->
    @include('layouts.bar.sidebar')
      <!-- end #sidebar -->

  <!-- begin #content -->
  <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header">@yield('content-title')</h1>
        <!-- end page-header -->

        @yield('content')
</div>
  <!-- end #content -->


  <!-- begin scroll to top btn -->
  <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
    data-click="scroll-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- end scroll to top btn -->
</div>
<!-- end page container -->

  <!-- ================== BEGIN BASE JS ================== -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
  <!--[if lt IE 9]>
    <script src="../assets/crossbrowserjs/html5shiv.js"></script>
    <script src="../assets/crossbrowserjs/respond.min.js"></script>
    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="{{asset('js/js.cookie.js')}}"></script>
  <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('/js/default.js')}}"></script>
  <script src="{{asset('/js/apps.js')}}"></script>
  <script src="{{asset('/js/jquery.steps/jquery.steps.js')}}"></script>
  <script src="{{asset('js/jquery.mask.js')}}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{asset('js/function.toast.js')}}"></script>
  <script src="{{asset('js/function.js')}}"></script>
  <!-- ================== END BASE JS ================== -->

  <script>
    $(document).ready(function() {
        App.init();
    });
    </script>

    @yield('js')

</body>
</html>
