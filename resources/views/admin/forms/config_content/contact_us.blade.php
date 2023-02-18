<div class="row">
    <div class="col-md-7 m-b-t-5">
        <div class="form-group">
            <label for="show_contact" class="control-label">1. Hiển thị danh sách thông tin liên hệ</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_contact" id="show_contact" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn các thông tin thành viên để người dùng có thể trực tiếp liên hệ.</i></p>
        </div>
        <div class="form-group">
            <label for="show_contact_pos" class="control-label pl-25">1.1 Hiển thị chức danh</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_contact_pos" id="show_contact_pos" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block pl-25"><i>* Diễn giải: hiển thị/ẩn thông tin vị trí, chức danh liên hệ.</i></p>
        </div>
        <div class="form-group">
            <label for="show_contact_email" class="control-label pl-25">1.2 Hiển thị email</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_contact_email" id="show_contact_email" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block pl-25"><i>* Diễn giải: hiển thị/ẩn thông tin email liên hệ.</i></p>
        </div>
        <div class="form-group">
            <label for="show_contact_phone" class="control-label pl-25">1.3 Hiển thị số điện thoại</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_contact_phone" id="show_contact_phone" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block pl-25"><i>* Diễn giải: hiển thị/ẩn thông tin số điện thoại liên hệ.</i></p>
        </div>
        <div class="form-group">
            <label for="show_contact_form" class="control-label">2. Hiển thị Form liên hệ</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_contact_form" id="show_contact_form" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn liên hệ để khách hàng có thể gửi tin nhắn trực tiếp.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="contact_form_title" class="control-label">2.1 Tiêu đề chính</label>
            <input type="text" class="form-control" name="contact_form_title" id="contact_form_title" placeholder="GET IN TOUCH" />
        </div>
        <div class="form-group pl-25">
            <label for="contact_form_description" class="control-label">2.1 Tiêu đề phụ</label>
            <textarea class="form-control" name="contact_form_description" id="contact_form_description" rows="5" placeholder="Sole Distributor for Sinopec"></textarea>
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Ảnh nền</label>
            </div>
            <img
                id="banner_contact_us"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_contact_us' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.contact_us().banner_contact_us}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.contact_us().banner_contact_us && toolbar.contact_us().banner_contact_us != '#') ? toolbar.contact_us().banner_contact_us : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
</div>