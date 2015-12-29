<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">User Id</label>
            {!! Form::select('user_id', [1 => 1, 2 => 2, 3 => 3], null, ['class' => 'form-control']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="slug">Post Id</label>
            {!! Form::select('post_id', [1 => 1, 2 => 2, 3 => 3], null, ['class' => 'form-control']) !!}
            {!! $errors->first('slug', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Text</label>
            {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'txtDescription']) !!}
        </div>
    </div>
</div>
