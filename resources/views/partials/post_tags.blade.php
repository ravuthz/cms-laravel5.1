<h5 class="title-bg">List tags</h5>
<ul class="post-category-list">
    @foreach ($tags as $tag)
        <li><a href="{{url('tag/' . $tag->slug)}}"><i class="icon-plus-sign"></i>{{$tag->name}}</a></li>
    @endforeach
</ul>