@extends('dash')

@section('content')

@include('partials.alert-message-success')

<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <h1>List All Pages</h1>

                        <div id="toolbar">
                            <a class="btn btn-default" href="{!! route('dash.page.create') !!}">New Page</a>
                            <button id="remove" class="btn btn-danger" disabled>
                                <i class="glyphicon glyphicon-remove"></i> Delete
                            </button>
                        </div>
                        <table id="table" data-toggle="table"
                            data-toolbar="#toolbar"
                            data-url="{!! route('dash.page.index') !!}"
                            data-show-columns="true"
                            data-show-toggle="true"
                            data-show-export="true"
                            data-show-export="true"
                            data-show-pagination-switch="true"

                            data-search="true"
                            data-show-refresh="true"
                            data-id-field="id"
                            data-pagination="true"

                            data-detail-view="true"
                            data-detail-formatter="detailFormatter"

                            data-page-size="5"
                            data-page-list="[5,10,15,50,100]"
                            data-pagination-first-text="<i class='glyphicon glyphicon-fast-backward'></i>"
                            data-pagination-pre-text="<i class='glyphicon glyphicon-chevron-left'></i>"
                            data-pagination-next-text="<i class='glyphicon glyphicon-chevron-right'></i>"
                            data-pagination-last-text="<i class='glyphicon glyphicon-fast-forward'>">
                            <thead>
                                <tr>
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th data-field="id" data-align="center">Id</th>
                                    <th data-field="title">Title</th>
                                    <th data-field="slug">Slug</th>
                                    <th data-field="image" data-visible="false">Image</th>
                                    <th data-field="author" data-switchable="false">Author</th>
                                    <th data-field="click_count" data-visible="false">Visitor</th>
                                    <th data-field="created_at">Create At</th>
                                    <th data-field="updated_at" data-visible="false">Update At</th>
                                    <th data-field="deleted_at" data-visible="false">Delete At</th>
                                    <th data-field="published_at">Publish At</th>
                                    <th data-field="operator"
                                        data-align="center"
                                        data-events="operaterEvents"
                                        data-formatter="operaterFormatter"
                                        >Options</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
    var $table = $('#table'),
        $remove = $('#remove'),
        selections = [];

    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table',
    function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        // save your data, here just save the current page
        selections = getIdSelections();
        console.log(selections);
        // push or splice the selections if you want to save all data selections
    });

    // $table.on('all.bs.table', function (e, name, args) {
    //     console.log(name);
    // });

    $remove.click(function () {
        if (confirm('Are you want to delete these pages ?')) {
            var ids = getIdSelections();
            ajaxDelete(ids);
            $remove.prop('disabled', true);
        }
    });


    function operaterFormatter(value, row, index) {
        return [
            '<a class="btn btn-sm update" href="javascript:void(0)" title="Update">',
            '<i class="glyphicon glyphicon-pencil"></i>',
            '</a>  ',
            '<a class="btn btn-sm delete" href="javascript:void(0)" title="Delete">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operaterEvents = {
        'click .update': function (e, value, row, index) {
            console.log('update row:', row);
            window.location.href = 'page/' + row.id + '/edit';
        },
        'click .delete': function (e, value, row, index) {
            if (confirm('Are you sure want to delete this page ?')) {
                ajaxDelete(row.id);
            }
        }
    };

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }

    function detailFormatter(index, row) {
        var html = [];
        html.push('<row>');
        $.each(row, function (key, value) {
            if (key == 'state') return;
            html.push('<div class="col-md-2">' + key + '</div>');
            html.push('<div class="col-md-4"> :  ' + value + '</div>');
        });
        html.push('</row>');
        return html.join('');
    }

    function ajaxDelete(id, callback) {
        var link = '{{url('dash/page')}}';
        var form = {
            '_token': $('meta[name=csrf-token]').attr('content'),
            '_method': 'DELETE',
            'id': id
        };
        $.post(link, form, function(res){
            $table.bootstrapTable('remove', {
                field: 'id', values: id
            })
        });
    }
</script>
@endpush