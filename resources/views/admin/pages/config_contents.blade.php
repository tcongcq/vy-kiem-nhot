@extends('cms::layouts.crud')

@section('main')
@include('admin.blocks.hide_nav_menu')
<style type="text/css">
    .form-control{border-radius: 0px;}
</style>
<script type="text/javascript">
function Toolbar(){
    var self = this;
    self.activeTab = ko.observable('homepage');
    self.current   = ko.observable({});
    self.homepage   = ko.observable({});
    self.contact_us = ko.observable({});
    self.about_us   = ko.observable({});
    self.product    = ko.observable({});
    self.header     = ko.observable({});
    self.footer     = ko.observable({});
    self.init = function(){
        self.get_config('{{ \App::getLocale() }}');
    };

    self.switch_tab = function(tab){
        self.activeTab(tab);
    };

    self.generate_data = function(data){
        let current = {};
        data.forEach((val, idx)=>{
            current[val.code] = val.value;
        });
        self.current(current);
    };

    self.get_config_data = function(){
        var config_inputs = $("#configs").find("input,textarea");
        var config_imgs   = $("#configs").find("img");
        var configs = {};
        $.each(config_inputs, function(idx, cfg){
            let val = '';
            if ($(cfg).prop("tagName") == 'TEXTAREA')
                val = $(cfg).val();
            else
                switch($(cfg).attr('type')) {
                    case 'checkbox':
                        val = $(cfg).prop('checked') ? 1:0;
                        break;
                    case 'text':
                        val = $(cfg).val();
                        break;
                    default:
                        val = $(cfg).val();
                        break;
                }
            configs[$(cfg).attr('name')] = val;
        });
        $.each(config_imgs, function(idx, img){
            let val = $(img).attr('data-src');
            configs[$(img).attr('name')] = val ? val : '';
        });
        return configs;
    };
    self.get_config = function(_lang){
        let lang = _lang ? _lang : $('#languageChoosen').val();
        $.ajax({
            url: "{{ uri() }}/config",
            data: {
                language: lang
            },
            beforeSend: showAppLoading, complete: hideAppLoading,
            success: function (res) {
                self.generate_data(res.data);
            }
        });
    };
    self.save_config = function(){
        var configs = self.get_config_data();
        configs['_token'] = "{!! csrf_token() !!}",
        $.ajax({
            url: "{{ uri() }}/save-config",
            type: "post",
            data: {
                configs: configs,
                language: $('#languageChoosen').val()
            },
            beforeSend: showAppLoading, complete: hideAppLoading,
            success: function (data) {
                toastr[data.status](data.message);
            }
        });
    };
    self.change_lang = function(e){
        let lang = $(e.target).val();
        self.get_config(lang);
    };
}
var toolbar = new Toolbar();
toolbar.init();
</script>
<div id="block-manager" style="padding: 15px 15px 0px; user-select: none;">
    @include('admin.forms.config_content')
</div>

@endsection