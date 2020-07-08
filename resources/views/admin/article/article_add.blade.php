@extends('admin.layouts.header')

@section('content')
    <article class="page-container">
        <form class="form form-horizontal" id="form-article-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" id="articletitle" name="articletitle">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">简略标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" id="articletitle2" name="articletitle2">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="articlecolumn" class="select">
					<option value="0">全部栏目</option>
					<option value="1">新闻资讯</option>
					<option value="11">├行业动态</option>
					<option value="12">├行业资讯</option>
					<option value="13">├行业新闻</option>
				</select>
				</span> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
                <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="articletype" class="select">
					<option value="0">全部类型</option>
					<option value="1">帮助说明</option>
					<option value="2">新闻资讯</option>
				</select>
				</span> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">排序值：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="0" placeholder="" id="articlesort" name="articlesort">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">关键词：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" id="keywords" name="keywords">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="abstract" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
                    <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章作者：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="0" placeholder="" id="author" name="author">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章来源：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="0" placeholder="" id="sources" name="sources">
                </div>
            </div>
{{--            <div class="row cl">--}}
{{--                <label class="form-label col-xs-4 col-sm-2">允许评论：</label>--}}
{{--                <div class="formControls col-xs-8 col-sm-9 skin-minimal">--}}
{{--                    <div class="check-box">--}}
{{--                        <input type="checkbox" id="allowcomments" name="allowcomments" value="">--}}
{{--                        <label for="checkbox-pinglun">&nbsp;</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row cl">--}}
{{--                <label class="form-label col-xs-4 col-sm-2">评论开始日期：</label>--}}
{{--                <div class="formControls col-xs-8 col-sm-9">--}}
{{--                    <input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'commentdatemax\')||\'%y-%M-%d\'}' })" id="commentdatemin" name="commentdatemin" class="input-text Wdate">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row cl">--}}
{{--                <label class="form-label col-xs-4 col-sm-2">评论结束日期：</label>--}}
{{--                <div class="formControls col-xs-8 col-sm-9">--}}
{{--                    <input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'#F{$dp.$D(\'commentdatemin\')}' })" id="commentdatemax" name="commentdatemax" class="input-text Wdate">--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="uploader-thum-container">
                        <div id="fileList" class="uploader-list"></div>
                        <div id="filePicker">选择图片</div>
                        <button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
                    </div>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <script id="editor" type="text/plain" style="width:100%;height:400px;"></script>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
                    <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
                    <button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
    <script type="text/javascript" src="{{asset('static/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $(".permission-list dt input:checkbox").click(function(){
                $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
            });
            $(".permission-list2 dd input:checkbox").click(function(){
                var l =$(this).parent().parent().find("input:checked").length;
                var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
                if($(this).prop("checked")){
                    $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
                    $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
                }
                else{
                    if(l==0){
                        $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
                    }
                    if(l2==0){
                        $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
                    }
                }
            });

            $("#form-admin-role-add").validate({
                rules:{
                    roleName:{
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

                        url: "/office_add/{{$admin->id}}" ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){

                            if (data['ok'] == 1){
                                layer.msg(data['msg'],{icon:1,time:1000});
                            }else {
                                layer.msg(data['msg'],{icon:1,time:1000});
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

                        ,100)
                }
            });
        });
    </script>
@stop



