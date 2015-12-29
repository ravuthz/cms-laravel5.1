<!-- Double Sidebar -->
<div class="row">
    <div class="span3 sidebar page-left-sidebar">
        @include('partials.sidebar-1')
    </div>
    <!--Begin page content column-->
    <div class="span6">
        <h2 class="title-bg">{{$section1->title}}</h2>
        <p class="lead">{{$section1->content}}</p>
        <div class="row">
            @foreach ($section1->posts as $k => $post)
                @if ($k % 2 == 0)
                    </div><div class="row">
                @endif
                <div class="span3">
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->content}}</p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
            @endforeach
        </div>
    </div>
    <!--End page content column-->
    <div class="span3 sidebar page-right-sidebar">
        @include('partials.sidebar-2')
    </div>
</div>