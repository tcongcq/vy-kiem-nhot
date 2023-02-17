@extends('cms::layouts.crud')

@section('main')
@include('admin.blocks.hide_nav_menu')
<script type="text/javascript">
function ToolBar() {
    var self = this;
    self.view = ko.observable('grid');
    self.grid_data = null;
    self.form_data = null;

    self.grid_init = function (grid) {
        self.grid_data = grid;
    };
    self.form_init = function (form) {
        self.form_data = form;
        $('.selectpicker').selectpicker();
        $('.ckeditor').each(function (key, vl){
            try{
                CKEDITOR.replace( this ,{
                    filebrowserBrowseUrl : '{{ url("admin/filemanager") }}?secret={{bcrypt(env('APP_KEY'))}}',
                    filebrowserImageBrowseUrl : '{{ url("admin/filemanager") }}?secret={{bcrypt(env('APP_KEY'))}}',
                    height:'250px',
                    toolbar: 'Basic'
                });
            } catch (err){
                //
            }
        });
    };
    self.grid = function (attr, param) {
        return self.grid_data[attr](param);
    };

    self.add = function (e) {
        self.form_data.method('add');
        self.form_data.current({is_show: 1});
        CKEDITOR.instances.description.setData('');
        self.view('form');
    };

    self.edit = function (e) {
        self.form_data.method('update');
        self.form_data.current(e);
        CKEDITOR.instances.description.setData(e.description);
        self.view('form');
    };

    self.grid_filters = function(){
        var filters = [];
        $('[filter-colname]').each(function(){
            var value = null;
            if ($(this).hasClass('selectpicker'))
                value = $(this).selectpicker('val');
            if ($(this).hasClass('filter_date')){
                value = $(this).parent().data("DateTimePicker").date().format('YYYY-MM-DD');
                if ($(this).attr('filter-operator') == '>=')
                    value += ' 00:00:00';
                else
                    value += ' 23:59:59';
            }
            if(value !== null){                    
                var filter = {
                    key: $(this).attr('filter-colname'),
                    value: $(this).attr('filter-operator') == 'like' ? '%'+value+'%' : value
                };
                if ($(this).attr('filter-operator') != 'in')
                    filter.operator = $(this).attr('filter-operator') ? $(this).attr('filter-operator') : '='
                filters.push(filter);
            }
        });
        self.grid_data.filters(filters);
        $('.grid-filter-container:not(.print)').toggleClass('open');
    };
    self.grid_unfilters = function(){
        self.grid_data.filters([]);
        $('select[filter-colname]').selectpicker('val', '');
    };

    self.prepare_save = function(){
        self.form_data.current().language       = $('#language').selectpicker('val');
        self.form_data.current().description    = CKEDITOR.instances.description.getData();
        self.form_data.current().is_show        = self.form_data.current().is_show == true ? 1 : 0;
        self.form_data.current().image          = $('#image').attr('data-src')!=""? $('#image').attr('data-src') : '';
    };

    self.saved = function () {
        self.grid_data.fetch();
    };

    self.cellsrenderer = {
        contact_name: function(data){
            var text = '';
            text += 'Tên: <strong class="text-blue">'+data.contact_name+'</strong>';
            text += '<br/>+ SĐT: <strong class="text-purple">'+data.contact_phone+'</strong>';
            if (data.contact_email)
                text += '<br/>+ Email: <strong class="text-green">'+data.contact_email+'</strong>';
            if (data.contact_address)
                text += '<br/>+ Địa chỉ: <strong>'+data.contact_address+'</strong>';
            return text;
        },
        is_show: function(data){
            return data.is_show === 0 ? '<span class="label label-default">Ẩn</span>' : '<span class="label label-success">Hiện</span>';
        }
    };
}
var toolbar = new ToolBar();
</script>
<grid params="cols: {
        name: 'Tên danh mục',
        alias: 'Alias',
        language: 'Ngôn ngữ',
        is_show: 'Trạng thái',
    },
    sorts: ['alias', 'name', 'is_show'],
    url: '{{ uri() }}',
    token: '{{ csrf_token() }}',
    buttons: ['add', 'edit', 'delete'],
    cellsrenderer: toolbar.cellsrenderer,
    leftToolbar: 'filters-toolbar',
    add: toolbar.add,
    edit: toolbar.edit,
    callback: toolbar.grid_init,
    filters: [
    @if(\Request::has('id'))
        {key:'id',value:[{{ \Request::get('id') }}]},
    @endif
    ],
    trans: {
        data_empty_label: 'Không có dữ liệu',
        add: 'Thêm',
        refresh: 'Làm mới',
        delete: 'Xoá',
        pagination_of_total: 'Trong tổng số',
        search: 'Tìm kiếm',
        delete_question: 'Bạn chắc chắn muốn xoá dữ liệu này?',
        cancel: 'Huỷ'
    }" data-bind="visible: toolbar.view() === 'grid'"></grid>

<edit-form params="url: '{{ uri() }}',
    token: '{{ csrf_token() }}',
    buttons: ['add', 'edit'],
    back: function (){ toolbar.view('grid'); },
    prepare_save: toolbar.prepare_save,
    saved: toolbar.saved,
    template: 'edit-form',
    callback: toolbar.form_init" data-bind="visible: toolbar.view() === 'form'"></edit-form>

<script type="text/html" id="filters-toolbar">
    <div class="grid-filter-container filter pull-left">
        <div class="btn-group">
            <button data-toggle="tooltip" title="Lọc dữ liệu" class="btn btn-default grid-filter-btn" style="margin-left: 5px;" onclick="$('.grid-filter-container.filter').toggleClass('open');">
                <span class="glyphicon glyphicon-filter"></span> Lọc
            </button>
        </div>
        <div class="grid-filter-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Cho phép hiển thị</label>
                                <select class="selectpicker show-tick form-control" filter-colname="is_show" filter-operator="in" data-live-search="true" multiple data-selected-text-format="count > 3" data-actions-box="true">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Ngôn ngữ</label>
                                <select class="selectpicker show-tick form-control" filter-colname="language" filter-operator="in" data-live-search="true" multiple data-selected-text-format="count > 3" data-actions-box="true">
                                @foreach($languages as $lang)
                                    <option value="{{ $lang->code }}">{{ $lang->code }} - {{ $lang->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="margin-top: 25px;">
                                <div class="btn btn-primary" data-bind="click: toolbar.grid_filters">
                                    <span class="glyphicon glyphicon-filter"></span> Lọc
                                </div>
                                <div class="btn btn-default" style="margin-left: 5px;" data-bind="click: toolbar.grid_unfilters">
                                    <span class="glyphicon glyphicon-remove"></span> Bỏ lọc tất cả
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bs-callout bs-callout-info">
                        <h4>Lọc dữ liệu</h4>
                        <p>Bạn có thể dễ dàng lọc thông tin các danh mục theo nhiều tiêu chí khác nhau:</p>
                        <ul style="padding-left: 15px;">
                            <li>Cho phép hiển thị</li>
                            <li>Ngôn ngữ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/html" id="edit-form">
@include('admin.forms.product_category')
</script>
@endsection