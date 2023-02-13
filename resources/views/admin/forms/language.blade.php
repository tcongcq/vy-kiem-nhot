<div class="row">
    <div class="col-md-4 frm-desc">
        <div class="media">
            <div class="media-left">
                <a>
                    <img class="media-object" src="{{ url('assets/images/admin/contact.png') }}" width="128">
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">Ngôn ngữ</h3>
                <p>- Quản lý danh sách ngôn ngữ sử dụng trên hệ thống.</p>
                <p>- Thêm, cập nhật các danh sách ngôn ngữ hiển thị trong hệ thống.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <legend>Thông tin cơ bản</legend>
        <div class="form-group">
            <label for="name" class="control-label">Ngôn ngữ <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="name" id="name" data-bind="value: current().name" placeholder="Ngôn ngữ..." required>
        </div>
        <div class="form-group">
            <label for="code" class="control-label">Code <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="code" id="code" data-bind="value: current().code" placeholder="Code..." required>
        </div>
        <div class="form-group">
            <label for="attribs" class="control-label">Ghi chú</label>
            <textarea type="text" rows="5" class="form-control" name="attribs" id="attribs" data-bind="value: current().attribs" placeholder="Ghi chú..."></textarea>
        </div>
    </div>
    <div class="col-md-4">
        <legend>Cài đặt</legend>
        <div class="form-group">
            <label for="default" class="control-label">Mặc định</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="default" id="default" data-bind="checked: current().default" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
        </div>
    </div>
</div>