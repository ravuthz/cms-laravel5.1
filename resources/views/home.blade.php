<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{!! Lang::get('site.title') !!}{{ !empty($title) ? " - $title" : "" }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{!! Lang::get('site.description') !!}">
    <meta name="keywords" content="{!! Lang::get('site.keywords') !!}">
    <meta name="author" content="{!! Lang::get('site.author') !!}">

    <!-- CSS  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-responsive.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/prettyPhoto.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/custom-styles.css') }}">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
        <link rel="stylesheet" href="{{url('assets/css/style-ie.css')}}"/>
    <![endif]-->

    <!-- Favicons  -->
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ url('assets/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/img/apple-touch-icon-114x114.png') }}">

    <!-- JS  -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="{{ url('assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ url('assets/js/jquery.custom.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });
        });

        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</head>

<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">
        <div class="row header"><!-- Begin Header -->

            <!-- Logo -->
            <div class="span5 logo">
                <a href="{{ url() }}"><img src="{{ url('assets/img/logo.png') }}" alt=""/></a>
                <h5>{!! Lang::get('site.slogan') !!}</h5>
            </div>

            <!-- Main Navigation -->
            <div class="span7 navigation">
                <div class="navbar hidden-phone">
                <?php $menus = App\Page::listOn();?>
                <ul class="nav">
                    @if (!empty($menus))
                        @foreach ($menus as $k => $v)
                            <li class="{{ Request::is($k) ? 'active' : '' }}">
                                <a href="{{ url($k) }}">{{ $v }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>

                </div>

                <!-- Mobile Nav -->
                <form action="#" id="mobile-nav" class="visible-phone">
                    <div class="mobile-nav-select">
                        <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                            @if (!empty($menus))
                                @foreach ($menus as $k => $v)
                                    <option value="{{ url($k) }}" {{ Request::is($k) ? 'selected' : '' }}>
                                        {{ $v }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </form>

            </div>

        </div><!-- End Header -->

        @yield('content')

    </div> <!-- End Container -->

    <!-- Footer Area -->
    <div class="footer-container">
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>{!! Lang::get('site.about') !!}</h5>
                   <img src="{{url('assets/img/piccolo-footer-logo.png')}}" alt="Piccolo" /><br /><br />
                    <div>
                        {!! Lang::get('site.developer_team') !!}
                    </div>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/khmersites.page/" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>{!! Lang::get('site.lastest_tweets') !!}</h5>
                    {{-- <ul>
                        <li>
                            <a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
                            <a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices.
                        </li>
                        <li>
                            <a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu orci rutrum aliquam.
                        </li>
                    </ul> --}}
                </div>
                <div class="span3 footer-col">
                    <h5>{!! Lang::get('site.lastest_posts') !!}</h5>

                    @if (!empty($lastest_posts))
                    <ul class="post-list">
                        @foreach ($lastest_posts as $post)
                            <li><a href="{{ url() }}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="span3 footer-col">
                    <h5>{!! Lang::get('site.gallery') !!}</h5>
                    <ul class="img-feed">
                        @foreach (App\Page::gallery() as $file)
                            <li>
                                <a href="{{ $file['href'] }}">
                                    <img src="{{ url($file['src']) }}" alt="{{ $file['alt'] }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6">
                            <span class="left">
                                {!! Lang::get('site.copyright') !!}
                            </span>
                        </div>
                        <div class="span6">
                            {{-- <span class="right">
                                <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                <a href="#">Contact</a>
                            </span> --}}
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div>

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>
