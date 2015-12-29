@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Comment
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'dash.comment.store', 'class' => 'form col-md-12']) !!}
                    @include('comment.form')
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.comment.index', 'Cancel', '', ['class' => 'btn btn-block btn-default']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! Form::submit('Save', ['class' => 'btn btn-block btn-info']) !!}
                        </div>
                    </div>
                    <br/>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
