@extends('admin.layouts.header')

@section('content')
    <article class="page-container">
        <form action="{{$tools['tools']['url']}}" method="post" class="form form-horizontal" id="form-admin-role-add">
            @csrf

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">可分配个人权限：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    @foreach($s as $k=>$v)

                            <dl class="permission-list">
                            <dt>
                                <label>
                                    {{$v['title']}}</label>
                            </dt>
                            <dd>
                                @foreach($v['child'] as $a=>$b)
                                <dl class="cl permission-list2">
                                    <dt>
                                        <label class="">
                                            <input type="checkbox" value="{{$b['action']}}"
                                                   @if(in_array("*",$checked) && count($checked) == 1) checked disabled @elseif( in_array($b['action'],$checked) ) checked @endif name="title[]" id="title[]">
                                            {{$b['title']}}</label>

                                    </dt>
                                    <dd>
                                        @if(isset($b['child']))
                                            @foreach($b['child'] as $c=>$d)
                                                <label class="">
                                                    <input type="checkbox" value="{{$d['action']}}" @if(in_array("*",$checked) && count($checked) == 1) checked disabled @elseif(in_array($b['action'],$checked)) checked @endif name="title[]" id="title[]">
                                                    {{$d['title']}}</label>
                                            @endforeach
                                        @endif
                                    </dd>
                                </dl>
                                @endforeach
                            </dd>
                        </dl>
                    @endforeach
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
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

                        url: "{{$tools['tools']['url']}}" ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){

                            if (data['ok'] == 1){
                                layer.msg('添加成功!',{icon:1,time:1000});
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

                        ,1000)
                }
            });
        });
    </script>
@stop



