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
    <header class="header">
        <a href="{!! url() !!}" class="logo">
                Go to HomePage
            </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{!! url('img/avatar3.png') !!}" class="img-circle" alt="User Image" />
                                            </div>
                                            <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{!! url('img/avatar2.png') !!}" class="img-circle" alt="user image" />
                                            </div>
                                            <h4>
                                                    Director Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{!! url('img/avatar.png') !!}" class="img-circle" alt="user image" />
                                            </div>
                                            <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{!! url('img/avatar2.png') !!}" class="img-circle" alt="user image" />
                                            </div>
                                            <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{!! url('img/avatar.png') !!}" class="img-circle" alt="user image" />
                                            </div>
                                            <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                            <div class="progress progress-striped xs">
                                                <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                            <div class="progress progress-striped xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                            <div class="progress progress-striped xs">
                                                <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                            <div class="progress progress-striped xs">
                                                <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span>{!! Auth::user()->username !!}<i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                                    <span class="badge badge-success pull-right">10</span> Updates</a>
                                <a href="#">
                                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                    <span class="badge badge-danger pull-right">5</span> Messages</a>
                                <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> Subscriptions</a>
                                <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                        "badge pull-right">11</span> FAQ</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user fa-fw pull-right"></i> Profile
                                </a>
                                <a data-toggle="modal" href="#modal-user-settings">
                                    <i class="fa fa-cog fa-fw pull-right"></i> Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{!! route('auth.logout') !!}"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{!! url('img/avatar3.png') !!}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Hello, {!! Auth::user()->firstname !!}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." />
                        <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                    </div>
                </form>
                <ul class="sidebar-menu">
                    <li>
                        <a href="{!! url('dash') !!}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! url('dash/page') !!}">
                            <i class="fa fa-gavel"></i> <span>Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! url('dash/post') !!}">
                            <i class="fa fa-globe"></i> <span>Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! url('dash/user') !!}">
                            <i class="fa fa-user"></i> <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{!! url('dash/comment') !!}">
                            <i class="fa fa-comments"></i> <span>Comment</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
            <div class="footer-main">
                Copyright &copy CMS, 2015
            </div>
        </aside>
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

    {!! HTML::script('assets/ckeditor/ckeditor.js') !!}

    {!! Html::script('js/app.js') !!}
    {!! Html::script('js/dash.js') !!}
    {{-- {!! Html::script('js/angular.min.js') !!} --}}
    {{-- {!! Html::script('js/dash-routes.js') !!} --}}
    {{-- {!! Html::script('js/dash-controllers.js') !!} --}}
    <script>
        CKEDITOR.replace('ckeditor', {
            //"customConfig": "{{url('assets/ckeditor/config.js')}}",
            "filebrowserBrowseUrl": "{{ route('browse.file') }}",
            "filebrowserUploadUrl ": "{{ route('upload.file', ['_token' => csrf_token() ]) }}",
            "filebrowserImageBrowseUrl": "{{ route('browse.file') }}",
            "filebrowserImageUploadUrl": "{{ route('upload.file', ['_token' => csrf_token() ]) }}",
            "filebrowserWindowWidth": 800,
            "filebrowserWindowHeight": 500,
        });
    </script>
    @stack('scripts')
</body>

</html>
