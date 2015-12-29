<!-- Full width Content -->
<div class="row">
    <div class="span12">
        <h2>{{$section1->title}}</h2>
        <p class="lead">{{$section1->content}}</p>
        <!-- Carousel -->
        <div class="row">
            <div class="span6">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($section1->posts as $post)
                        <li>
                            <a href="gallery-single.htm"><img src="{{url('assets/img/gallery/slider-img-1.jpg')}}" alt="slider" /></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if (!empty($section1->posts->first()))
                <div class="span6">
                    <h5>{{$section1->posts->first()->title}}</h5>
                    <p>{{$section1->posts->first()->content}}</p>
                    <blockquote>
                        <p>{{$section1->posts->first()->content}}</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                    <button class="btn btn-small btn-inverse" type="button">Find out more</button>
                </div>
            @endif
        </div>
        <h3 class="title-bg">{{$section1->subtitle}}</h3>
        <div class="row">
            @foreach ($section1->posts as $k => $post)
                @if ($k < 3)
                    <div class="span4">
                        <img src="{{url('assets/img/gallery/gallery-img-1-3col.jpg')}}" alt="image">
                        <h5>{{$post->title}}</h5>
                        <p>{{$post->content}}</p>
                        <button class="btn btn-small btn-inverse" type="button">Read more</button>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
