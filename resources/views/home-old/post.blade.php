@extends('home')

@section('content')

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

@endsection
