@extends('auth')


@section('content')
    <h1>Video</h1>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'upload.video', 'class' => 'form-horizontal', 'novalidate' => 'novalidate', 'files' => true]) !!}

                        <div class="form-group">
                            {!! Form::label('video','Upload Video') !!}
                            {!! Form::file('video', null) !!}
                            {!! $errors->first('video', '<span class="text-danger">:message</span>') !!}
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
