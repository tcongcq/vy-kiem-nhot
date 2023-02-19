<div class="row">
    <div class="col-md-7 m-b-t-5">
        <div class="form-group mt-15">
            <label for="about_us_vision" class="control-label">1. Tầm nhìn</label>
            <textarea class="form-control" name="about_us_vision" id="about_us_vision" data-bind="value: toolbar.current().about_us_vision" rows="5" placeholder="“type your vision”"></textarea>
        </div>
        <div class="form-group mt-15">
            <label for="about_us_mission" class="control-label">2. Sứ mệnh</label>
            <textarea class="form-control" name="about_us_mission" id="about_us_mission" data-bind="value: toolbar.current().about_us_mission" rows="5" placeholder="“type your mission”"></textarea>
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Ảnh nền</label>
            </div>
            <img
                id="banner_about_us"
                name="banner_about_us"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_about_us' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.current().banner_about_us}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.current().banner_about_us && toolbar.current().banner_about_us != '#') ? toolbar.current().banner_about_us : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group mt-15">
            <label for="about_us_content" class="control-label">3. Nội dung bài viết</label>
            <textarea class="form-control" name="about_us_content" id="about_us_content" data-bind="value: toolbar.current().about_us_content" rows="20" placeholder="Type your organization's introduction"></textarea>
        </div>
    </div>
</div>