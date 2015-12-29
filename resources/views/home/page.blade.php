@extends('home')

@section('content')

    @if (!empty($section1->posts))
        @include("partials.$page->layout")
    @else
        <div class="alert alert-danger">
            <strong>Danger!</strong> There are no posts here.
        </div>
    @endif

@endsection
