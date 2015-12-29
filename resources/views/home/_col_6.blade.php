<div class="row">
    <!-- Gallery Items
        ================================================== -->
    <div class="span12 gallery">
        <div class="row clearfix">
            <ul class="gallery-post-grid holder">
                @foreach ($posts as $post)
                    <li class="span2 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-6col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{url('assets/img/gallery/gallery-img-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{url('assets/img/gallery/gallery-img-1-3col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">{{$post->title}}</a>{{$post->content}}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        {!! $posts->render() !!}

    </div>
    <!-- End gallery list-->
</div>
<!-- End container row -->
