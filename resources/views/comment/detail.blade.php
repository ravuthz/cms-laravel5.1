@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Comment Information
            </div>
            <div class="panel-body">

                {!! Form::model($comment, ['class' => 'form col-md-12']) !!}
                    @include('comment.form')
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.comment.index', 'Cancel', [], ['class' => 'btn btn-block btn-default']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.comment.edit', 'Modify', [$comment->id], ['class' => 'btn btn-block btn-info']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! Form::open(['method'=>'DELETE','route'=>['dash.comment.destroy', $comment->id]])!!}
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
