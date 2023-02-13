<div class="row">
    <div class="col-md-4 frm-desc">
        <div class="media">
            <div class="media-left">
                <a>
                    <img class="media-object" src="{{ url('assets/images/admin/contact.png') }}" width="128">
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">Danh sách liên hệ</h3>
                <p>- Quản lý danh sách liên hệ hiển thị trên hệ thống.</p>
                <p>- Thêm, cập nhật các danh sách liên hệ hiển thị trong hệ thống.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Thông tin cơ bản</legend>
        <div class="form-group">
            <label for="contact_name" class="control-label">Tên liên hệ <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="contact_name" id="contact_name" data-bind="value: current().contact_name" placeholder="Tên liên hệ..." required>
        </div>
        <div class="form-group">
            <label for="contact_phone" class="control-label">SĐT liên hệ <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="contact_phone" id="contact_phone" data-bind="value: current().contact_phone" placeholder="SĐT liên hệ..." required>
        </div>
        <div class="form-group">
            <label for="contact_address" class="control-label">Địa chỉ</label>
            <input type="text" class="form-control" name="contact_address" id="contact_address" data-bind="value: current().contact_address" placeholder="Địa chỉ..." >
        </div>
        <div class="form-group">
            <label for="contact_email" class="control-label">Email</label>
            <input type="text" class="form-control" name="contact_email" id="contact_email" data-bind="value: current().contact_email" placeholder="Email..." >
        </div>
        <div class="form-group">
            <label for="title" class="control-label">Chức danh</label>
            <input type="text" class="form-control" name="title" id="title" data-bind="value: current().title" placeholder="Chức danh..." >
        </div>
        <div class="form-group">
            <label for="position" class="control-label">Vị trí</label>
            <input type="text" class="form-control" name="position" id="position" data-bind="value: current().position" placeholder="Vị trí..." >
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Cài đặt</legend>
        <div class="form-group">
            <label for="is_show" class="control-label">Hiện trên website</label>
            <label class='toggle-label'>
				<input type="checkbox" class="form-control" name="is_show" id="is_show" data-bind="checked: current().is_show" />
				<span class="back">
					<span class="toggle"></span>
			 		<span class="label on">ON</span>
					<span class="label off">OFF</span>
				</span>
			</label>
        </div>
    </div>
</div>