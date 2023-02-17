<style type="text/css">
    .w-74{ width: 74px; }
    .attachment {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-align: center;
    }
    .attachment img{ width: 100%; height: auto; }
    .attachment .el {
        margin-bottom: 2px;
        margin-top: 2px;
        position: relative;
        user-select: none;
        display: inline-block;
        margin-left: 1px;
        margin-right: 1px;
    }
    .attachment .el .image-view{
        width: 100%;
        height: 74px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .attachment .el .btn-times{
        position: absolute;
        left: calc(50% - 15px);
        top: calc(50% - 15px);
        padding: 5px 10px;
        background: #a94442;
        color: #fff;
        border-radius: 50%;
        opacity: 0;
        transition: all 0.5s;
        cursor: pointer;
    }
    .attachment .el:hover .btn-times{
        opacity: 1;
    }
</style>
<div class="row">
    <div class="col-md-4 frm-desc">
        <div class="media">
            <div class="media-body">
                <h3 class="media-heading mt-0">Tin tức</h3>
                <p>- Quản lý danh sách bài viết trên hệ thống.</p>
                <p>- Thêm, cập nhật các bài viết trong hệ thống.</p>
            </div>
        </div>
        <div class="text-center">
            <div>
                <label class="control-label text-center" style="margin-top: 15px;">Avatar</label>
            </div>
            <img
                id="avatar"
                width="200"
                height="140"
                style="background-repeat: no-repeat; background-size: cover; background-position: center; cursor: pointer;"
                onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&backgroundID=avatar' ) }}')"
                data-bind="attr:{class: 'media-oject', 'data-src':current().avatar}, style:{'background-image': 'url({{url('/')}}/' + ((current().avatar && current().avatar != '#') ? current().avatar : 'assets/images/admin/no-image.png') + ')'}"
            />  
        </div>
    </div>
    <div class="col-md-4">
    	<legend>Thông tin cơ bản</legend>
        <div class="form-group">
            <label for="title" class="control-label">Tên bài viết <sup class="text-danger">(*)</sup></label>
            <input type="text" class="form-control" name="title" id="title" data-bind="value: current().title, event: {'change': toolbar.title_change}" placeholder="Tên bài viết..." required>
        </div>
        <div class="form-group">
            <label for="alias" class="control-label">Alias</label>
            <input type="text" class="form-control" name="alias" id="alias" data-bind="value: current().alias" placeholder="Alias..." required>
        </div>
        <div class="form-group">
            <label for="order_num" class="control-label">Sắp xếp</label>
            <input type="number" class="form-control" name="order_num" id="order_num" data-bind="value: current().order_num" placeholder="Sắp xếp..." min="0">
        </div>
        <div class="form-group">
            <label for="post_category_id" class="control-label">Danh mục bài viết <sup class="text-danger">(*)</sup></label>
            <select class="form-control selectpicker" name="post_category_id" id="post_category_id" data-live-search="true" data-bind="value: current().post_category_id" required>
            @foreach($post_categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->language }} - {{ $cat->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="language" class="control-label">Ngôn ngữ</label>
            <select class="form-control selectpicker" name="language" id="language" data-live-search="true" data-bind="value: current().language">
            @foreach($languages as $lang)
                <option value="{{ $lang->code }}">{{ $lang->name }}</option>
            @endforeach
            </select>
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
            <label for="introduce" class="control-label">Tóm tắt nội dung (SEO description)</label>
            <textarea type="text" rows="7" class="form-control" name="introduce" id="introduce" data-bind="value: current().introduce" placeholder="Tóm tắt nội dung..."></textarea>
        </div>
    </div>
    <div class="col-md-12">
    	<hr/>
    	<legend>Nội dung bài viết</legend>
    	<div class="row">
		    <div class="col-md-4">
                <div class="form-group">
                    <label for="attachments" class="control-label">Album ảnh</label>
                    <div class="btn btn-default form-control" name="attachments" id="attachments"
                        onclick="open_popup('{{ url('admin/filemanager?secret='.bcrypt(env('APP_KEY')).'&fieldID=addimage&callback=choose_image&typeSelect=multi' ) }}')"
                    >Thêm file</div>
		        </div>
                <div class="media attachment">
                <!-- ko if: toolbar.album_images().length > 0 -->
                    <!-- ko foreach: toolbar.album_images -->
                    <div class="w-74 el">
                        <span class="btn-times" data-bind="click: toolbar.remove_image"><i class="fa fa-times"></i></span>
                        <div class="image-view" 
                            data-bind="style:{'background-image': toolbar.get_image($data)}"
                        ></div>
                    </div>
                    <!-- /ko -->
                <!-- /ko -->
                <!-- ko if: toolbar.album_images().length == 0 -->
                    <div class="text-center" style="min-height: 78px;">Album ảnh trống.</div>
                <!-- /ko -->
                </div>
		    </div>
		    <div class="col-md-8">
		        <div class="form-group">
		            <label for="content" class="control-label">Nội dung</label>
		            <textarea type="text" rows="5" class="form-control ckeditor" name="content" id="content" data-bind="value: current().content" placeholder="Nội dung..."></textarea>
		        </div>
		    </div>
    	</div>
    </div>
</div>