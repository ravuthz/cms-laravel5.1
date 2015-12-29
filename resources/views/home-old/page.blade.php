@extends('home')

@section('content')

<div class="sub-content">
    <div class="container">
        {{-- <div class="row">
            <div class="span12">
                <h4 class="bot-0">summer 2012 Fashion Guide</h4>
            </div>
        </div> --}}

        @include("home.layout_4", ['posts' => $posts, 'page' => $page])

    </div>
</div>

@endsection
