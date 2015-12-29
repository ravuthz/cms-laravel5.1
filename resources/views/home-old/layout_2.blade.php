<div class="row">
    <div class="thumbnails_4">
        @foreach ($posts as $post)
            <div class="span6">
                <div class="thumbnail thumbnail_4">
                    <a href="{{url('post/' . $post->slug)}}" class="lead">
                        <figure>
                            <img src="{{url('assets/img/page5-img1.jpg')}}" class="img-radius" alt=""></figure>
                        <p class="lead p2">
                            <a href="{{url('post/' . $post->slug)}}" class="lead">{{$post->title}}</a></p>
                            {{$post->content}}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

{!! Html::style('css/pagination.css') !!}

<nav>
    {!! $posts->render() !!}
</nav>