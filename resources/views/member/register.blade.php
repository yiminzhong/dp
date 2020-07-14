<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/html5.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/PIE_IE678.js')}}"></script>
    <![endif]-->
    <link href="{{asset('static/H-ui.ucenter/static/h-ui/css/H-ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/H-ui.ucenter/static/h-ui.ucenter/css/H-ui.ucenter.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/H-ui.ucenter/lib/Hui-iconfont/1.0.8/iconfont.css')}}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <link href="{{asset('static/H-ui.ucenter/static/h-ui/css/H-ui.ie.css')}}" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>易敏忠出品</title>
    <meta name="keywords" content="易敏忠出品">
    <meta name="description" content="易敏忠出品">
</head>
<body>
<div class="login-wraper">
    <div class="login-form radius box-shadow">
        <div class="clearfix pt-20">
            <i class="iconpic iconpic-logo"></i>
        </div>
        <div class="row clearfix form-title">账户注册</div>

        @if(session()->has('warning'))
            {{ session('warning') }}
        @endif
        @if(session()->has('success'))
            {{ session('success') }}
        @endif

        <form class="form form-horizontal" action="registered" method="post" id="form-reg">
            @csrf
            <div class="row clearfix">
                <input type="recommend" class="input-text radius size-L" name="recommend" id="recommend" value="" placeholder="注册码">
            </div>
            <div class="row clearfix">
                <input type="name" class="input-text radius size-L" name="name" id="name" value="" placeholder="账户名称">
            </div>
            <div class="row clearfix">
                <input type="nike_name" class="input-text radius size-L" name="nike_name" id="nike_name" value="" placeholder="昵称">
            </div>
            <div class="row clearfix">
                <input type="email" class="input-text radius size-L" name="email" id="email" value="" placeholder="能收到邮件">
            </div>
            <div class="row clearfix">
                <input type="iphone" class="input-text radius size-L" name="iphone" id="iphone" value="" placeholder="手机号">
            </div>
            <div class="row clearfix">
                <input type="password" class="input-text radius size-L" name="password" id="password" value="" placeholder="密码">
            </div>
            <div class="row clearfix">
                <input type="password" class="input-text radius size-L" name="password2" id="password2" value="" placeholder="确认密码">
            </div>
            <div class="row clearfix">
                <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">

                @if($errors->has('captcha'))
                    <div class="col-md-12">
                        <p class="text-danger text-left"><strong>{{$errors->first('captcha')}}</strong></p>
                    </div>
                @endif


            </div>
            <div class="row clearfix">
                <input type="text" class="input-text radius size-L" name="captcha" id="captcha" value="" placeholder="输入验证码">
            </div>
            <div class="row clearfix">
                <button class="btn btn-primary btn-block radius size-L">注 册</button>
                <div class="line mt-20"></div>
            </div>

            <div class="row clearfix">已有账户 <a href="login.html"><strong>登 录</strong></a></div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/H-ui.ucenter/static/h-ui/js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('static/H-ui.ucenter/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $("#form-reg").validate({
            rules: {
                iphone: {
                    required: true,
                    iphone: true,
                },
                name: {
                    required: true,
                    name: true,
                },
                nike_name: {
                    required: true,
                    nike_name: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                captcha: {
                    required: true,
                    captcha: true,
                },
                password: {
                    required: true,
                    rangelength: [6, 16]
                },
                password2:{
                    required:true,
                    equalTo: "#password"
                },
            },
            messages: {
                name: {
                    required: "用户名不能为空",
                    name: "用户名",
                },
                email: {
                    required: "邮箱不能为空",
                    email: "邮箱格式不正确",
                },
                password: {
                    required: "密码不能为空",
                    rangelength: "6-16个字符"
                }
            },
            onkeyup: false,
            focusCleanup: false,
            submitHandler: function(form) {
                $(".label.error").hide();
                //在这里执行表单提交
            }
        });
    });
</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2016-03-20 -->
