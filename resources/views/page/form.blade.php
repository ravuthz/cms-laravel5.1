<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

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
            <label for="description">Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control ckeditor']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Image</label>
            {!! Form::text('image', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="author">Author</label>
            <p class="form-control">{!! Auth::user()->username !!}</p>
            {!! Form::hidden('author', Auth::user()->id) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="layout">Layouts</label>
    </div>
    <div class="col-md-4">
        <div class="radio">
            <label>
            {!! Form::radio('layout', '1') !!}Layout 1
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="radio">
            <label>
                {!! Form::radio('layout', '2') !!}Layout 2
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="radio">
            <label>
                {!! Form::radio('layout', '3') !!}Layout 3
            </label>
        </div>
    </div>
</div>