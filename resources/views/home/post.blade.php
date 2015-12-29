@extends('home')

@section('content')

<div class="row">
    <div class="span8">

        @if (!empty($post))
        <div class="sub-content">
            <div class="container">
                <div class="row">
                    <div class="span6 float2">
                        <h1>{{$post->title}}</h1>
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (!empty($tag))
            <li>
                <a href="{{url('tag/' . $tag->slug)}}">{{$tag->name}}</a>
            </li>

            <div class="row">
                @if (!empty($tag->posts()->get()))
                    <div class="row">
                        @foreach ($tag->posts() as $k => $post)
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
                @endif
            </div>
        @endif

    </div>
    <div class="span4">
        @include('partials.sidebar-1')
    </div>

@endsection