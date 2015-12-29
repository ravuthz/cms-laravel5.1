@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Post Information
            </div>
            <div class="panel-body">

                {!! Form::model($post, ['class' => 'form col-md-12']) !!}
                    @include('post.form')
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.post.index', 'Cancel', [], ['class' => 'btn btn-block btn-default']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.post.edit', 'Modify', [$post->id], ['class' => 'btn btn-block btn-info']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! Form::open(['method'=>'DELETE','route'=>['dash.post.destroy', $post->id]])!!}
                            {!! Form::submit('Delete',['class' => 'btn btn-block btn-danger'])!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                    <br/>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection