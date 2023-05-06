<div class="row">
    <div class="col-md-4 frm-desc">
        <div class="media">
            <div class="media-left">
                <a>
                    <img class="media-object" src="{{ url('assets/images/admin/contact.png') }}" width="128">
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">Đanh sách liên hệ</h3>
                <p>- Quản lý danh sách liên hệ trên hệ thống.</p>
                <p>- Thêm, cập nhật các danh sách liên hệ trong hệ thống.</p>
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
            <label for="contact_email" class="control-label">Email liên hệ</label>
            <input type="text" class="form-control" name="contact_email" id="contact_email" data-bind="value: current().contact_email" placeholder="Email liên hệ..." >
        </div>
        <div class="form-group">
            <label for="subject" class="control-label">Chủ đề</label>
            <input type="text" class="form-control" name="subject" id="subject" data-bind="value: current().subject" placeholder="Chủ đề..." >
        </div>
        <div class="form-group">
            <label for="message" class="control-label">Nội dung</label>
            <textarea type="text" rows="5" class="form-control" name="message" id="message" data-bind="value: current().message" placeholder="Nội dung..."></textarea>
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Cài đặt</legend>
        <div class="form-group">
            <label for="status" class="control-label">Đã trả lời</label>
            <label class='toggle-label'>
				<input type="checkbox" class="form-control" name="status" id="status" data-bind="checked: current().status" />
				<span class="back">
					<span class="toggle"></span>
			 		<span class="label on">ON</span>
					<span class="label off">OFF</span>
				</span>
			</label>
        </div>
        <div class="form-group">
            <label for="note" class="control-label">Ghi chú</label>
            <textarea type="text" rows="5" class="form-control" name="note" id="note" data-bind="value: current().note" placeholder="Nội dung..."></textarea>
        </div>
    </div>
</div>