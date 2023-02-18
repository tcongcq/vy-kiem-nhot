<div class="row">
    <div class="col-md-7 m-b-t-5">
        <div class="form-group">
            <label for="show_footer_address" class="control-label">1. Hiển thị địa chỉ</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_footer_address" id="show_footer_address" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn thông tin số điện thoại liên hệ.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="footer_phone_title" class="control-label">1.1. Tiêu đề</label>
            <input type="text" class="form-control" name="footer_phone_title" id="footer_phone_title" placeholder="ADDRESS" />
        </div>
        <div class="form-group pl-25">
            <label for="footer_phone" class="control-label">1.2. Địa chỉ</label>
            <input type="text" class="form-control" name="footer_phone" id="footer_phone" placeholder="** ***, *** *****,
**** ****, Viet Nam" />
        </div>
        <div class="form-group">
            <label for="show_footer_phone" class="control-label">2. Hiển thị số điện thoại</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_footer_phone" id="show_footer_phone" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn thông tin số điện thoại liên hệ.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="footer_phone_title" class="control-label">2.1. Tiêu đề</label>
            <input type="text" class="form-control" name="footer_phone_title" id="footer_phone_title" placeholder="ASK ANYTHING HERE" />
        </div>
        <div class="form-group pl-25">
            <label for="footer_phone" class="control-label">2.2. Số điện thoại</label>
            <input type="text" class="form-control" name="footer_phone" id="footer_phone" placeholder="+84 ** *** ****" />
        </div>
        <div class="form-group">
            <label for="show_footer_email" class="control-label">3. Hiển thị email</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_footer_email" id="show_footer_email" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn thông tin email liên hệ.</i></p>
        </div>
        <div class="form-group pl-25">
            <label for="footer_email_title" class="control-label">3.1 Tiêu đề email</label>
            <input type="text" class="form-control" name="footer_email_title" id="footer_email_title" placeholder="CALL US" />
        </div>
        <div class="form-group pl-25">
            <label for="footer_email" class="control-label">3.2 Email</label>
            <input type="text" class="form-control" name="footer_email" id="footer_email" placeholder="****@sicopec.vn" />
        </div>
        <div class="form-group">
            <label for="footer_introduce" class="control-label">4. Nội dung giới thiệu</label>
            <input type="text" class="form-control" name="footer_introduce" id="footer_introduce" placeholder="Type your organization's introduction" />
        </div>
        <div class="form-group">
            <label for="footer_maps" class="control-label">5. Vị trí bản đồ</label>
            <input type="text" class="form-control" name="footer_maps" id="footer_maps" placeholder="https://www.google.com/maps/embed?pb=****" />
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Logo</label>
            </div>
            <img
                id="footer_logo"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=footer_logo' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.footer().footer_logo}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.footer().footer_logo && toolbar.footer().footer_logo != '#') ? toolbar.footer().footer_logo : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
    <div class="col-md-12">
        
    </div>
</div>