<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('static/lib/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/lib/respond.min.js')}}"></script>
    <![endif]-->
    <link href="{{ asset('static/static/h-ui/css/H-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('static/static/h-ui.admin/css/H-ui.login.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/static/h-ui.admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('static/lib/Hui-iconfont/1.0.8/iconfont.css')}}" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="{{asset('static/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>龙泽三郎.admin v3.1 后台管理系统</title>
    <meta name="keywords" content="龙泽三郎.admin v3.1,后台管理系统">
    <meta name="description" content="龙泽三郎.admin v3.1，后台管理系统">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">


    <div id="loginform" class="loginBox">

        <form class="form form-horizontal" action="/login" method="post">

            <div class="row cl" style="margin-top: auto">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online" >
                        @if(session()->has('warning'))
                            {{ session('warning') }}
                        @endif
                        @if(session()->has('success'))
                            {{ session('success') }}
                        @endif

                    </label>
                </div>
            </div>

            @csrf
            <div class="row cl" style="margin-top: auto">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="user" name="user" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe63f;</i></label>
                <div class="formControls col-xs-8">
                    <input id="google_password" name="google_password" type="text" placeholder="谷歌验证码" class="input-text size-L">
                </div>
            </div>

            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="remember" id="remember" value="">
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
{{--                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">--}}
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">龙泽gki by 龙泽三郎.admin v3.1</div>
<script type="text/javascript" src="{{asset('static/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/static/h-ui/js/H-ui.min.js')}}"></script>

<script>
    if (window.parent != window)
    {
        window.top.location.href = location.href;
    }
</script>

</body>
</html>
