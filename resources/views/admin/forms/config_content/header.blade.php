<div class="row">
    <div class="col-md-7 m-b-t-5">
        <div class="form-group">
            <label for="show_header_phone" class="control-label">1. Hiển thị số điện thoại</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_header_phone" id="show_header_phone" data-bind="value: toolbar.current().show_header_phone, checked: toolbar.current().show_header_phone" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn thông tin số điện thoại liên hệ.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="header_phone_title" class="control-label">1.1. Tiêu đề</label>
            <input type="text" class="form-control" name="header_phone_title" id="header_phone_title" data-bind="value: toolbar.current().header_phone_title" placeholder="Customer Support" />
        </div>
        <div class="form-group pl-25">
            <label for="header_phone" class="control-label">1.2. Số điện thoại</label>
            <input type="text" class="form-control" name="header_phone" id="header_phone" data-bind="value: toolbar.current().header_phone" placeholder="+84 ** *** ****" />
        </div>
        <div class="form-group mt-15">
            <label for="show_header_email" class="control-label">2. Hiển thị email</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_header_email" id="show_header_email" data-bind="value: toolbar.current().show_header_email, checked: toolbar.current().show_header_email" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn thông tin email liên hệ.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="header_email_title" class="control-label">2.1 Tiêu đề email</label>
            <input type="text" class="form-control" name="header_email_title" id="header_email_title" data-bind="value: toolbar.current().header_email_title" placeholder="Email" />
        </div>
        <div class="form-group pl-25">
            <label for="header_email" class="control-label">2.2 Email</label>
            <input type="text" class="form-control" name="header_email" id="header_email" data-bind="value: toolbar.current().header_email" placeholder="****@sicopec.vn" />
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Logo</label>
            </div>
            <img
                id="header_logo"
                name="header_logo"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=header_logo' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.current().header_logo}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.current().header_logo && toolbar.current().header_logo != '#') ? toolbar.current().header_logo : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
</div>