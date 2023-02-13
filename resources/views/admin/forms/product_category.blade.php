<div class="row">
    <div class="col-md-4 frm-desc">
        <div class="media">
            <div class="media-body">
                <h3 class="media-heading mt-0">Danh mục sản phẩm</h3>
                <p>- Quản lý danh sách danh mục sản phẩm trên hệ thống.</p>
                <p>- Thêm, cập nhật các danh mục sản phẩm trong hệ thống.</p>
            </div>
        </div>
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Avatar</label>
            </div>
            <img
                id="image"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=image' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':current().image}, style:{'background-image': 'url({{url('/')}}/' + ((current().image && current().image != '#') ? current().image : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Thông tin cơ bản</legend>
        <div class="form-group">
            <label for="name" class="control-label">Tên danh mục <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="name" id="name" data-bind="value: current().name" placeholder="Tên danh mục..." required>
        </div>
        <div class="form-group">
            <label for="language" class="control-label">Ngôn ngữ</label>
            <select class="form-control selectpicker" name="language" id="language" data-live-search="true" data-bind="value: current().language">
            @foreach($languages as $lang)
                <option value="{{ $lang->code }}">{{ $lang->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="alias" class="control-label">Alias</label>
            <input type="text" class="form-control" name="alias" id="alias" data-bind="value: current().alias" placeholder="Alias..." required>
        </div>
        <div class="form-group">
            <label for="order_num" class="control-label">Sắp xếp</label>
            <input type="number" class="form-control" name="order_num" id="order_num" data-bind="value: current().order_num" placeholder="Sắp xếp..." min="0">
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Cài đặt</legend>
        <div class="form-group">
            <label for="is_show" class="control-label">Cho phép hiển thị</label>
            <label class='toggle-label'>
				<input type="checkbox" class="form-control" name="is_show" id="is_show" data-bind="checked: current().is_show" />
				<span class="back">
					<span class="toggle"></span>
			 		<span class="label on">ON</span>
					<span class="label off">OFF</span>
				</span>
			</label>
        </div>
        <div class="form-group">
            <label for="note" class="control-label">Ghi chú</label>
            <textarea type="text" style="height: 161px;" class="form-control" name="note" id="note" data-bind="value: current().note" placeholder="Ghi chú..."></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="description" class="control-label">Mô tả danh mục</label>
            <textarea type="text" rows="5" class="form-control ckeditor" name="description" id="description" data-bind="value: current().description" placeholder="Mô tả danh mục..."></textarea>
        </div>
    </div>
</div>