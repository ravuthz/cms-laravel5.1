@extends('auth')


@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'upload.photo', 'class' => 'form-horizontal', 'novalidate' => 'novalidate', 'files' => true]) !!}

                        <div class="form-group">
                            {!! Form::label('Photo','Upload Photo') !!}
                            {!! Form::file('image', null) !!}
                            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('submit', ['class' => 'btn btn-default']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
