<div class="clearfix blocks">
    <div class="pull-left">
        <div class="item-head">Cấu hình</div>
        <div data-bind="css: toolbar.activeTab() == 'homepage' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'homepage')" class="item">Trang Chủ</div>
        <div data-bind="css: toolbar.activeTab() == 'contact_us' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'contact_us')" class="item">Trang Liên Hệ</div>
        <div data-bind="css: toolbar.activeTab() == 'about_us' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'about_us')" class="item">Trang Về Chúng Tôi</div>
        <div data-bind="css: toolbar.activeTab() == 'products' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'products')" class="item">Trang Sản Phẩm</div>
        <div data-bind="css: toolbar.activeTab() == 'header' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'header')" class="item">Đầu trang</div>
        <div data-bind="css: toolbar.activeTab() == 'footer' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'footer')" class="item">Cuối trang</div>
        
        <div class="item-head">Cài đặt hệ thống</div>
        <div data-bind="css: toolbar.activeTab() == 'filemanager' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'filemanager')" class="item">
            Quản lý File
            <p class="help-block my-0"><small><i>* Áp dụng cho thành viên</i></small></p>
        </div>
        <div data-bind="css: toolbar.activeTab() == 'setting' ? 'item active' : 'item', click: toolbar.switch_tab.bind($data, 'setting')" class="item">Cài đặt chung</div>
        <div style="margin-top: 10px; text-align: center;">
            <button type="button" onclick="toolbar.save_config()" class="btn btn-primary" style="border-radius: 0px;"><i aria-hidden="true" class="fa fa-floppy-o fa-lg"></i> Lưu thông tin</button>
        </div>
    </div>
    <div class="pull-right" id="configs">
        <div class="row">
            <div class="col-md-7 m-b-t-5">
                <legend>Trang liên hệ</legend>
            </div>
            <div class="col-md-5 m-b-t-5 form-horizontal">
                <div class="form-group">
                    <label for="languageChoosen" class="col-sm-3 control-label">Ngôn ngữ</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="languageChoosen" name="languageChoosen" onchange="toolbar.change_lang(event)">
                        @foreach($languages as $lang)
                            <option value="{{ $lang->code }}" {{ $lang->code == \App::getLocale() ? 'selected' : '' }}>{{ $lang->name }}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
            </div>
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'homepage'" style="display: none;">
            @include('admin.forms.config_content.homepage')
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'contact_us'" style="display: none;">
            @include('admin.forms.config_content.contact_us')
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'about_us'" style="display: none;">
            @include('admin.forms.config_content.about_us')
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'products'" style="display: none;">
            @include('admin.forms.config_content.product')
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'header'" style="display: none;">
            @include('admin.forms.config_content.header')
        </div>
        <div data-bind="visible: toolbar.activeTab() == 'footer'" style="display: none;">
            @include('admin.forms.config_content.footer')
        </div>
    </div>
</div>