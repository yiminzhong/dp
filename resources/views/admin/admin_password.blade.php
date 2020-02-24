@extends('admin.layouts.header')

@section('content')
    <article class="page-container">
        <form action="administrator_password/{{$change_admin->id}}" method="post" class="form form-horizontal" id="form-change-password">
            @csrf
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
                <div class="formControls col-xs-8 col-sm-9"> {{$change_admin->nike_name}} </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>登陆账户：</label>
                <div class="formControls col-xs-8 col-sm-9"> {{$change_admin->name}} </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword" id="newpassword">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword2" id="new-password2">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
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
            $("#form-change-password").validate({
                rules:{
                    newpassword:{
                        required:true,
                        minlength:6,
                        maxlength:16
                    },
                    newpassword2:{
                        required:true,
                        minlength:6,
                        maxlength:16,
                        equalTo: "#newpassword"
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



