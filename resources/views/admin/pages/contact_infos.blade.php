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
    };
    self.grid = function (attr, param) {
        return self.grid_data[attr](param);
    };

    self.add = function (e) {
        self.form_data.method('add');
        $('#language').selectpicker('val', 'vi');
        self.form_data.current({order: 0});
        self.view('form');
    };

    self.edit = function (e) {
        self.form_data.method('update');
        $('#language').selectpicker('val', e.language);
        self.form_data.current(e);
        self.view('form');
    };

    self.prepare_save = function(){
        self.form_data.current().language  = $('#language').selectpicker('val');
    	self.form_data.current().is_show   = self.form_data.current().is_show == true ? 1 : 0;
    };

    self.saved = function () {
        self.grid_data.fetch();
    };

    self.cellsrenderer = {
    	contact_name: function(data){
            var text = '';
            text += 'Tên: <strong>'+data.contact_name+'</strong>';
            text += '<br/>+ SĐT: <strong>'+data.contact_phone+'</strong>';
            if (data.contact_email)
                text += '<br/>+ Email: <strong>'+data.contact_email+'</strong>';
            return text;
        },
        title: function(data){
            var text = '';
            text += 'Chức danh: <strong>'+data.title+'</strong>';
            text += '<br/>+ Vị trí: <strong>'+data.position+'</strong>';
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
        contact_name: 'Liên hệ',
        title: 'Chức danh',
        is_show: 'Ẩn / Hiện',
        order: 'Sắp xếp',
        language: 'Ngôn ngữ'
    },
    sorts: ['contact_name', 'title', 'is_show'],
    url: '{{ uri() }}',
    token: '{{ csrf_token() }}',
    buttons: ['add', 'edit', 'delete'],
    cellsrenderer: toolbar.cellsrenderer,
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

<script type="text/html" id="edit-form">
@include('admin.forms.contact_info')
</script>
@endsection