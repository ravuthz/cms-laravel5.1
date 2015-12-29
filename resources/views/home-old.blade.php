<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{Lang::get('site.description')}}">
    <meta name="keywords" content="{{Lang::get('site.keywords')}}">
    <meta name="author" content="{{Lang::get('site.author')}}">
    <link rel="icon" href="{{Lang::get('site.favicon')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{Lang::get('site.favicon')}}" type="image/x-icon"/>

    {!! Html::style('assets/css/bootstrap.css', ['media' => 'screen']) !!}

    {!! Html::style('assets/css/responsive.css', ['media' => 'screen']) !!}
    {!! Html::style('assets/css/style.css', ['media' => 'screen']) !!}

    @if (isset($slide) && $slide)
        {!! Html::style('assets/css/camera.css', ['media' => 'screen']) !!}
    @endif

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'/>

    {!! Html::script('assets/js/jquery.js') !!}
    {!! Html::script('assets/js/jquery.easing.1.3.js') !!}
    {!! Html::script('assets/js/jquery.ui.totop.js') !!}

    @if (isset($slide) && $slide)
        {!! Html::script('assets/js/camera.js') !!}
        <script>
        $(document).ready(function() {
            jQuery('.camera_wrap').camera();
        });
        </script>
    @endif

    <!--[if lt IE 8]>
        <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/assets/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    {!! Html::style('assets/css/docs.css', ['media' => 'screen']) !!}
    {!! Html::style('assets/css/ie.css', ['media' => 'screen']) !!}
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<?php $menus = App\Page::listOn();?>
<header>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="clearfix header-block-pad">
                        <h1 class="brand">
                            <a href="{{ url() }}">
                                <img src="{{url(Lang::get('site.logo'))}}" alt="{{Lang::get('site.logo')}}">
                            </a>
                            <span>{{Lang::get('site.title')}}</span>
                        </h1>
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                        <span class="contacts">
                            <b>Call Us Toll Free: </b>
                            <span>{{Lang::get('site.phone')}}</span>
                            <br><b>E-mail: </b>
                            <a href="{{Lang::get('site.email')}}">
                                {{Lang::get('site.email')}}
                            </a>
                        </span>
                    </div>
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">
                                    {{Lang::get('site.menu_title')}}
                                </a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu">
                                        @if (!empty($menus))
                                            @foreach ($menus as $k => $v)
                                                @if ($k == '/')
                                                    <li class="{{Request::is('/') ? 'li-first active' : 'li-first'}}">
                                                        <a href="{{url($k)}}">
                                                            <em class="hidden-phone"></em>
                                                            <span class="visible-phone">Home</span>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="{{Request::is($k) ? 'active' : ''}}">
                                                        <a href="{{url($k)}}">{{$v}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                @if (!empty(Lang::get('site.socials')))
                                    <ul class="social-icons">
                                        @foreach (Lang::get('site.socials') as $item)
                                            <li>
                                                <a href="{{url($item['link'])}}">
                                                    <img src="{{url($item['src'])}}" alt="{{$item['alt']}}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                     </div>
                </div>
            </div>
       </div>
    </div>
    @if (isset($slide) && $slide)
    <div class="slider">
        <div class="camera_wrap">
            <div data-src="{{url('assets/img/slide1.jpg')}}"></div>
            <div data-src="{{url('assets/img/slide2.jpg')}}"></div>
            <div data-src="{{url('assets/img/slide3.jpg')}}"></div>
        </div>
    </div>
    @endif
</header>

<section id="content">
    @yield('content')
</section>

<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
        <form id="newsletter" method="post" >
            <label>{{Lang::get('site.newsletter')}}</label>
            <div class="clearfix">
                <input type="text" onFocus="if(this.value =='{{Lang::get('site.email_address_here')}}') this.value=''" onBlur="if(this.value=='') this.value='{{Lang::get('site.email_address_here')}}'" value="{{Lang::get('site.email_address_here')}}" >
                <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">
                    {{Lang::get('site.subscribe')}}
                </a>
            </div>
        </form>
    </div>
    <div class="span8 float">
        @if (!empty($menus))
            <ul class="footer-menu">
                @foreach ($menus as $k => $v)
                    <li>
                        <a href="{{url($k)}}">{{$v}}</a>
                    </li>
                @endforeach
            </ul>
        @endif
            {{Lang::get('site.copyright')}} |
            <a href="{{url(Lang::get('site.privacy_policy_link'))}}">
                {{Lang::get('site.privacy_policy')}}
            </a>
      </div>
    </div>
   </div>
</footer>

{!! Html::script('assets/js/bootstrap.js') !!}

</body>
</html>