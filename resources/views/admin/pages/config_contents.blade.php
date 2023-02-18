@extends('cms::layouts.crud')

@section('main')
@include('admin.blocks.hide_nav_menu')
<script type="text/javascript">
function Toolbar(){
    var self = this;
    self.activeTab = ko.observable('footer');
    self.contact_us = ko.observable({});
    self.about_us   = ko.observable({});
    self.product    = ko.observable({});
    self.header     = ko.observable({});
    self.footer     = ko.observable({});
    self.init = function(){
        // 
    };

    self.switch_tab = function(tab){
        self.activeTab(tab);
    };

    self.get_config_data = function(){
        var config_inputs = $("#configs").find("input");
        var configs = {};
        $.each(config_inputs, function(idx, cfg){
            let val = '';
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
        return configs;
    };
    self.save_config = function(){
        var configs = self.get_config_data();
        configs['_token'] = "{!! csrf_token() !!}",
        $.ajax({
            url: "{{ uri() }}/save-config",
            type: "post",
            data: configs,
            beforeSend: showAppLoading, complete: hideAppLoading,
            success: function (data) {
                toastr[data.status](data.message);
            }
        });
    };
}
var toolbar = new Toolbar();
</script>
<div id="block-manager" style="padding: 15px 15px 0px; user-select: none;">
    @include('admin.forms.config_content')
</div>

@endsection