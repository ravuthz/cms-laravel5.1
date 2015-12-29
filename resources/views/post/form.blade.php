<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="slug">Slug</label>
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            {!! $errors->first('slug', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="content">Content</label>
            {!! Form::textarea('content', null, ['class' => 'form-control ckeditor', 'id' => 'txtContent']) !!}
            {!! $errors->first('content', '<span class="text-danger">:message</span>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('tag_list','Tags:')!!}
            {!! Form::select('tag_list[]',$tags,null ,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="status">Status</label>
                <div class="radio">
                    <label>
                        {!! Form::radio('status', '1',true) !!}Publish!
                    </label>
                </div>
                <div class="radio">
                    <label>
                        {!! Form::radio('status', '0') !!}Draft!
                    </label>
                </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="page_id">Page</label>
            {!! Form::select('page_id', $pages, null, ['class'=>'form-control'])!!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
        </div>
    </div>
</div>