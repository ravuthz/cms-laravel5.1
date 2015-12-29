<div class="row headline"><!-- Begin Headline -->
    <!-- Slider Carousel
    ================================================== -->
    <div class="span8">
        <div class="flexslider">
          <ul class="slides">
            @foreach ($slides as $slide)
                <li>
                    <a href="{{url($slide->href)}}">
                        <img src="{{url($slide->src)}}" alt="{{$slide->alt}}" />
                    </a>
                </li>
            @endforeach
          </ul>
        </div>
    </div>

    <div class="span4">
        <h3>{{$post->title}}</h3>
        <p class="lead">{{$post->content}}</p>
        <a href="#"><i class="icon-plus-sign"></i>Read More</a>
    </div>
</div>