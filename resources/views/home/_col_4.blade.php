<div class="row">
    <!-- Gallery Items
        ================================================== -->
    <div class="span12 gallery">
        <div class="row clearfix">
            <ul class="gallery-post-grid holder">
                @foreach ($posts as $post)
                    <li class="span3 gallery-item" data-id="{{$post->id}}" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{url('assets/img/gallery/gallery-img-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="{{url('post/' . $post->slug)}}" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="{{url($post->slug)}}">
                            <img src="{{url('assets/img/gallery/gallery-img-1-3col.jpg')}}" alt="Gallery">
                        </a>
                        <span class="project-details">
                            <a href="{{url('post/' . $post->slug)}}">{{$post->title}}</a>
                            {{$post->content}}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>

        {!! $posts->render() !!}

        {{-- <div class="pagination">
            <ul>
                {!! with(new App\Other\CustomePagination($posts))->render() !!}
            </ul>
        </div> --}}
    </div>
    <!-- End gallery list-->
</div>
<!-- End container row -->
