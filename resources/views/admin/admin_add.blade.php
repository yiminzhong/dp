@extends('admin.layouts.header')

@section('content')
    <article class="page-container">
        <form class="form form-horizontal" id="form-admin-add" >
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="字母账户" id="adminName" name="adminName">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="名称" id="adminName2" name="adminName2">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>谷歌码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$google}}" placeholder="" id="adminGoogle" name="adminGoogle" readonly="readonly">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>谷歌二维码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <img src="{{$google2fa_url}}" alt="">
                </div>
            </div>

{{--            <div class="row cl">--}}
{{--                <label class="form-label col-xs-4 col-sm-3">角色：</label>--}}
{{--                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">--}}
{{--			<select class="select" name="adminRole" size="1">--}}
{{--                <option value="0">请选择角色</option>--}}
{{--                @foreach($identity as $v)--}}
{{--				    <option value="{{$v['id']}}">{{$v['group_name']}}</option>--}}
{{--                @endforeach--}}
{{--			</select>--}}
{{--			</span> </div>--}}
{{--            </div>--}}
{{--            <div class="row cl">--}}
{{--                <label class="form-label col-xs-4 col-sm-3">备注：</label>--}}
{{--                <div class="formControls col-xs-8 col-sm-9">--}}
{{--                    <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>--}}
{{--                    <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </article>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });

            $("#form-admin-add").validate({
                rules:{
                    adminName:{
                        required:true,
                        minlength:4,
                        maxlength:16
                    },
                    adminName2:{
                        required:true,
                        minlength:2,
                        maxlength:16
                    },
                    // password:{
                    //     required:true,
                    // },
                    // password2:{
                    //     required:true,
                    //     equalTo: "#password"
                    // },
                    // sex:{
                    //     required:true,
                    // },
                    // phone:{
                    //     required:true,
                    //     isPhone:true,
                    // },
                    // email:{
                    //     required:true,
                    //     email:true,
                    // },
                    adminRole:{
                        required:true,
                    },
                    adminGoogle:{
                        required:true,
                    },
                },
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){
                    $(form).ajaxSubmit({
                        type: 'post',
                        // dataType: 'json',
                        // contentType: "application/json",

                        url: "" ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){

                            if (data['ok'] == 1){
                                layer.msg('添加成功!',{icon:1,time:1000});
                            }else {
                                layer.msg('添加失败!',{icon:1,time:1000});
                            }
                        },
                        error: function(XmlHttpRequest, textStatus, errorThrown){

                            layer.msg('error!',{icon:1,time:1000});

                        }

                    });
                    setTimeout(

                        function () {
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.$('.btn-refresh').click();
                            parent.layer.close(index);
                        }

                    ,1000)

                }
            });
        });
    </script>
@stop



