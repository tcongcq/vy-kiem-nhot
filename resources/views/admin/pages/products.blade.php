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
        $('#language').selectpicker('val', 'vi');
        $('#product_category_id').selectpicker('val', null);
        CKEDITOR.instances.content.setData('');
        self.view('form');
    };

    self.edit = function (e) {
        self.form_data.method('update');
        self.form_data.current(e);
        $('#language').selectpicker('val', e.language);
        $('#product_category_id').selectpicker('val', e.product_category_id);
        CKEDITOR.instances.content.setData(e.content);
        self.view('form');
    };

    self.prepare_save = function(){
        self.form_data.current().language               = $('#language').selectpicker('val');
        self.form_data.current().product_category_id    = $('#product_category_id').selectpicker('val');
        self.form_data.current().content                = CKEDITOR.instances.content.getData();
    	self.form_data.current().is_show                = self.form_data.current().is_show == true ? 1 : 0;
        self.form_data.current().alias                  = $('#alias').val();
        self.form_data.current().avatar                 = $('#avatar').attr('data-src')!=""? $('#avatar').attr('data-src') : '';
    };

    self.saved = function () {
        self.grid_data.fetch();
    };

    self.cellsrenderer = {
    	title: function(data){
    		var text = '';
    		text += 'Tên sản phẩm: <strong>'+data.title+'</strong>';
    		if (data.alias)
                text += '<br/>+ Alias: <i>'+data.alias+'</i>';
            if (data.product_category_info)
                text += '<br/>+ Danh mục: <strong class="text-primary">'+data.product_category_info.name+'</strong>';
            return text;
    	},
        is_show: function(data){
        	return data.is_show === 0 ? '<span class="label label-default">Ẩn</span>' : '<span class="label label-success">Công khai</span>';
        }
    };

    self.title_change = function(){
        let title = self.form_data.current().title;
        $('#alias').val(self.str_slug(title));
    };

    self.str_slug = function(_str){
        return _str.latinise().toLowerCase().replace(/ /g,'-').replace(/[-]+/g, '-').replace(/[^\w-]+/g,'');
    };
}
var toolbar = new ToolBar();
</script>
<grid params="cols: {
        title: 'Sản phẩm',
        language: 'Ngôn ngữ',
        is_show: 'Trạng thái',
    },
    sorts: ['title', 'language', 'is_show'],
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
@include('admin.forms.product')
</script>
@endsection