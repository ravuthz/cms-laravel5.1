<!-- Right Sidebar -->
<div class="row">
    <div class="span8">
        @if (!empty($section1))
            <h2>{{$section1->title}}</h2>
            <p class="lead">{{$section1->content}}</p>
            <h5 class="title-bg">{{$section1->subtitle}}</h5>
        @endif

        @if (!empty($section1->posts))
        <div class="row">
            @foreach ($section1->posts as $k => $post)
                @if ($k % 4 == 0)
                    </div><div class="row">
                @endif
                <div class="span2">
                    <img src="{{url('assets/img/gallery/gallery-img-1-6col.jpg')}}" alt="Image" class="thumbnail">
                    <h5>{{$post->title}}</h5>
                    <p>{{Illuminate\Support\Str::limit($post->content, 36)}}</p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="span12">
                {!! $section1->posts->render() !!}
            </div>
        </div>
        @endif




        <!-- <h3 class="title-bg"> This is a sub head divider</h3>
        <div class="clearfix">
            <img src="img/gallery/gallery-img-1-4col.jpg" class="thumbnail align-left" alt="Image" />
            <p>Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie. Phasellus malesuada malesuada velit et fermentum. Proin ut leo nec mauris pulvinar volutpat. Sed ac neque nec leo condimentum rhoncus.</p>
            <p>Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie.</p>
            <button class="btn btn-small btn-inverse" type="button">Visit Website</button>
        </div>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Heads up!</strong> This alert is not super important.
        </div>
        <p>Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie. Phasellus malesuada malesuada velit et fermentum. Proin ut leo nec mauris pulvinar volutpat. Sed ac neque nec leo condimentum rhoncus. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie.</p> -->

    </div>
    <!--End page content column-->
    <!-- Blog Sidebar
        ================================================== -->
    <div class="span4 sidebar page-sidebar">
        @include('partials.sidebar-1')
    </div>
</div>
</div>
