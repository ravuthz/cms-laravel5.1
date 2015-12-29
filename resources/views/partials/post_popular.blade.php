<h5 class="title-bg">Popular Post</h5>
<ul class="popular-posts">
    @if (!empty($sidebar->popular_posts))
        @foreach ($sidebar->popular_posts as $post)
            <li>
                <a href="{{url($post->slug)}}"><img src="{{url('assets/img/gallery/gallery-img-2-thumb.jpg')}}" alt="Popular Post"></a>
                <h6><a href="#">{{$post->title}}</a></h6>
                <em>Posted on {{$post->created_at}}</em>
            </li>
        @endforeach
    @endif
</ul>