<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" ng-model="page.title"placeholder="Enter title here">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" ng-model="page.slug"laceholder="Enter slug here">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="7" class="form-control" ng-model="page.description" placeholder="Enter description here"></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" ng-model="page.image" placeholder="Enter image here">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" ng-model="page.author" readonly>
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
                <input type="radio" ng-model="page.layout" value="1" ng-checked="true">Layout 1
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="radio">
            <label>
                <input type="radio" ng-model="page.layout" value="2">Layout 2
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="radio">
            <label>
                <input type="radio" ng-model="page.layout" value="3">Layout 3
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 pull-right">
        <a href="#/page/" class="btn btn-block btn-default" type="submit">Cancel</a>
    </div>
    <div class="col-md-3 pull-right">
        <button class="btn btn-block btn-info" ng-click="save()">Save</button>
    </div>
</div>
<br/>
