@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Page Information
            </div>
            <div class="panel-body">
                {!! Form::model($page, ['class' => 'form col-md-12']) !!}
                    @include('page.form')
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.page.index', 'Cancel', [], ['class' => 'btn btn-block btn-default']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.page.edit', 'Modify', [$page->id], ['class' => 'btn btn-block btn-info']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! Form::open(['method'=>'DELETE','route'=>['dash.page.destroy', $page->id]])!!}
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