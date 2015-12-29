<!DOCTYPE html>
<html ng-app="app-cms">

<head>
    <meta charset="UTF-8">
    <title>Director | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> {!! Html::style('css/bootstrap.min.css') !!} {!! Html::style('css/font-awesome.min.css') !!} {!! Html::style('css/bootstrap-table.min.css') !!} {!! Html::style('css/ionicons.min.css') !!} {!! Html::style('css/style.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        * {
            border-radius: 1px !important;
        }
    </style>
</head>

<body class="skin-black">
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->
    <script type="text/javascript">
    (function() {
        root = '{{url()}}/';
    })();
    </script>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/bootstrap-table.min.js') !!}
    {!! Html::script('js/app.js') !!}
    {{-- {!! Html::script('js/angular.min.js') !!} --}}
    {{-- {!! Html::script('js/dash-routes.js') !!} --}}
    {{-- {!! Html::script('js/dash-controllers.js') !!} --}}
    @stack('scripts')
</body>

</html>
