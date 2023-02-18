<div class="row">
    <div class="col-md-7 m-b-t-5">
        <div class="form-group">
            <label for="show_product_share" class="control-label">1. Hiển thị các nút Share</label>
            <label class='toggle-label'>
                <input type="checkbox" class="form-control" name="show_product_share" id="show_product_share" />
                <span class="back">
                    <span class="toggle"></span>
                    <span class="label on">ON</span>
                    <span class="label off">OFF</span>
                </span>
            </label>
            <p class="help-block"><i>* Diễn giải: hiển thị/ẩn các nút share bài biết về các nền tảng xã hội.</i></p>
        </div>
        <div class="form-group">
            <label for="product_content" class="control-label">2. Nội dung bài viết</label>
            <textarea class="form-control" name="product_content" id="product_content" rows="20" placeholder="Type your organization's introduction"></textarea>
        </div>
    </div>
    <div class="col-md-5 m-b-t-5">
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Ảnh nền</label>
            </div>
            <img
                id="banner_product"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=banner_product' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':toolbar.product().banner_product}, style:{'background-image': 'url({{url('/')}}/' + ((toolbar.product().banner_product && toolbar.product().banner_product != '#') ? toolbar.product().banner_product : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
    <div class="col-md-12">
        
    </div>
</div>