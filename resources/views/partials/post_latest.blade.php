<h5 class="title-bg">Latest Posts</h5>
<ul class="popular-posts">
    @if (!empty($sidebar->latest_posts))
        @foreach ($sidebar->latest_posts as $post)
            <li>
                <a href="{{url($post->slug)}}"><img src="{{url('assets/img/gallery/gallery-img-2-thumb.jpg')}}" alt="Latest Post"></a>
                <h6><a href="#">{{$post->title}}</a></h6>
                <em>Posted on {{$post->created_at}}</em>
            </li>
        @endforeach
    @endif
</ul>