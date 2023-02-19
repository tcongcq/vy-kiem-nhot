<div class="row">
    <div class="col-md-7 m-b-t-5">
       <div class="form-group">
            <label for="homepage_title_1" class="control-label">1. Tiêu đề 1</label>
            <input type="text" class="form-control" name="homepage_title_1" id="homepage_title_1" data-bind="value: toolbar.current().homepage_title_1" placeholder="GET FIRST CLASS LUBRICANTS NEAR YOU" />
        </div>
       <div class="form-group pl-25">
            <label for="homepage_button_1" class="control-label">1.1 Nút tiêu đề</label>
            <input type="text" class="form-control" name="homepage_button_1" id="homepage_button_1" data-bind="value: toolbar.current().homepage_button_1" placeholder="CONTACT US" />
        </div>
       <div class="form-group pl-25">
            <label for="homepage_link_1" class="control-label">1.2 Link nút tiêu đề</label>
            <input type="text" class="form-control" name="homepage_link_1" id="homepage_link_1" data-bind="value: toolbar.current().homepage_link_1" placeholder="/contact-us" />
        </div>
        <div class="form-group mt-15">
            <label for="homepage_about_us" class="control-label">2. Về chúng tôi</label>
            <textarea class="form-control" name="homepage_about_us" id="homepage_about_us" data-bind="value: toolbar.current().homepage_about_us" rows="5" placeholder="“type your about"></textarea>
        </div>
        <div class="form-group pl-25">
            <label for="homepage_about_us_vision" class="control-label">2.1 Tầm nhìn</label>
            <textarea class="form-control" name="homepage_about_us_vision" id="homepage_about_us_vision" data-bind="value: toolbar.current().homepage_about_us_vision" rows="3" placeholder="“type your vision”"></textarea>
        </div>
        <div class="form-group pl-25">
            <label for="homepage_about_us_mission" class="control-label">2.2 Sứ mệnh</label>
            <textarea class="form-control" name="homepage_about_us_mission" id="homepage_about_us_mission" data-bind="value: toolbar.current().homepage_about_us_mission" rows="3" placeholder="“type your mission”"></textarea>
        </div>
       <div class="form-group pl-25">
            <label for="homepage_about_us_link" class="control-label">2.3 Link nút Read More</label>
            <input type="text" class="form-control" name="homepage_about_us_link" id="homepage_about_us_link" data-bind="value: toolbar.current().homepage_about_us_link" placeholder="/about-us" />
        </div>
       <div class="form-group mt-15">
            <label for="homepage_product_quantity" class="control-label">3. Số lượng sản phẩm hiển thị</label>
            <input type="text" class="form-control" name="homepage_product_quantity" id="homepage_product_quantity" data-bind="value: toolbar.current().homepage_product_quantity" placeholder="9" />
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center mt-15">Banner 1</label>
            </div>
            <img
                id="banner_homepage_1"
                name="banner_homepage_1"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_homepage_1' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.current().banner_homepage_1}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.current().banner_homepage_1 && toolbar.current().banner_homepage_1 != '#') ? toolbar.current().banner_homepage_1 : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
        <div class="text-center">
            <div>
                <label class="control-label text-center mt-15">Banner 2</label>
            </div>
            <img
                id="banner_homepage_2"
                name="banner_homepage_2"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_homepage_2' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.current().banner_homepage_2}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.current().banner_homepage_2 && toolbar.current().banner_homepage_2 != '#') ? toolbar.current().banner_homepage_2 : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
        <div class="text-center">
            <div>
                <label class="control-label text-center mt-15">Banner 3</label>
            </div>
            <img
                id="banner_homepage_3"
                name="banner_homepage_3"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_homepage_3' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.current().banner_homepage_3}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.current().banner_homepage_3 && toolbar.current().banner_homepage_3 != '#') ? toolbar.current().banner_homepage_3 : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
</div>