@extends('admin.layouts.header')

@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="text-c">
            <input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
            <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20">
                @if (isset($data['tools']) && count($data['tools']) > 0)
                    @foreach ($data['tools'] as $tool)
                        <span class="l"> <a href="javascript:;" onclick="admin_add(' {{ $tool["title"] }}','{{ $tool["href"] }}','800','500')" class="btn btn-primary radius">
                        <i class="Hui-iconfont">&#xe600;</i>  {{ $tool['title'] }}</a></span>
                    @endforeach
                @endif

           <span class="r">共有数据：<strong></strong> {!! $data['lists']->total() !!}</strong> 条</span> </div>
        <table class="table table-border table-bordered table-bg">
            <thead>
            <tr>
                <th scope="col" colspan="10">管理员列表</th>
            </tr>
            <tr class="text-c">
                <th width="40">ID</th>
                <th width="150">登录账户</th>
                <th width="150">名称</th>
                <th width="90">谷歌码</th>
                <th width="150">邮箱</th>
                <th>角色</th>
                <th width="130">个人权限</th>
                <th width="130">加入时间</th>
                <th width="100">是否已启用</th>
                <th width="300">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data['lists'] as $item)
                <tr class="text-c">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nike_name }}</td>
                    <td>
                    @if ($item->creat_id == 0 )
                        {{ $item->google }}
                    @else
                        *******
                    @endif</td>
                    <td>{{ $item->email }}</td>

                    <td>
                        @if (isset($item->group_name))
                            <span class="label label-success radius">{{$item->group_name}}</span>
                        @else
                        <span class="label radius">暂无角色</span>
                        @endif
                    </td>


                    <td>
                        @if ($item->privileges != "" || $item->privileges != null )
                            <span class="label label-success radius">有</span>
                        @else
                            <span class="label radius">没有</span>
                        @endif</td>
                    <td>
                        @if ($item->creat_id==0)
                            1997-00-00 00:00:00
                        @else
                            {{ $item->created_at }}
                        @endif</td>
                    <td>
                        @if ($item->status == 1)
                            <span class="label label-success radius">已启用</span>
                        @else
                            <span class="label radius">已停用</span>
                        @endif</td>
                    <td >


                            @if ($item->creat_id == 0 )
                                ******
                            @else

                                @if($item->creat_id  == $admin->id)
                                    @if ($item->status == 1)
                                        <a style="text-decoration:none" onClick="admin_stop(this,{{ $item->id }})" href="javascript:;" title="停用">停用</a>
                                    @else
                                        <a style="text-decoration:none" onClick="admin_start(this,{{ $item->id }})" href="javascript:;" title="启用">启用</a>
                                    @endif
                                        <a title="修改密码" href="javascript:;" onclick="administrator_password('修改密码','administrator_password/{{ $item->id }}','10001','600','270')" class="ml-5" style="text-decoration:none">修改密码</a>

                                        <a title="角色分配" href="javascript:;" onclick="admin_edit('角色分配','administrator_role_select/{{ $item->id }}','10001','600','270')" class="ml-5" style="text-decoration:none">角色分配</a>
                                        <a title="个人权限分配" href="javascript:;" onclick="administrator_auth_privileges('个人权限分配','administrator_auth_privileges/{{ $item->id }}','800')" class="ml-5" style="text-decoration:none">个人权限分配</a>
                                 @endif

                            @endif
{{--                        <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.html','1','800','500')" class="ml-5" style="text-decoration:none">修改密码</a>--}}

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $data['lists']->links('vendor.pagination.bootstrap5') !!}
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        /*
     参数解释：
     title	标题
     url		请求的url
     id		需要操作的数据id
     w		弹出层宽度（缺省调默认值）
     h		弹出层高度（缺省调默认值）
 */
        /*管理员-增加*/
        function admin_add(title,url,w,h){
            layer_show(title,url,w,h);
        }
        /*管理员-删除*/
        function admin_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                $.ajax({
                    type: 'POST',
                    url: '',
                    dataType: 'json',
                    success: function(data){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });
            });
        }

        /*管理员-编辑*/
        function admin_edit(title,url,id,w,h){
            layer_show(title,url,w,h);
        }
        /*修改密码*/
        function administrator_password(title,url,id,w,h){
            layer_show(title,url,w,h);
        }
        /*个人权限分配*/
        function administrator_auth_privileges(title,url,id,w,h){
            layer_show(title,url,w,h);
        }

        function administrator_role_select(title,url,id,w,h){
            layer_show(title,url,w,h);
        }

        /*管理员-停用*/
        function admin_stop(obj,id){
            layer.confirm('确认要停用吗？',function(index){
                //此处请求后台程序，下方是成功后的前台处理……
                $.ajax({
                    type: 'POST',
                    url: 'administrator_status/'+id,
                    dataType: 'json',
                    data:{status:'stop'},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        // $(obj).parents("tr").remove();
                        console.log(data)
                        if (data.msg){
                            layer.msg(data.msg,{icon:1,time:1000});
                        }


                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });

                setTimeout(

                    function () {
                        var index = parent.layer.getFrameIndex(window.name);
                        location.reload();
                        parent.layer.close(index);
                    }

                    ,1000)
            });
        }

        /*管理员-启用*/
        function admin_start(obj,id){
            layer.confirm('确认要启用吗？',function(index){
                //此处请求后台程序，下方是成功后的前台处理……
                $.ajax({
                    type: 'POST',
                    url: 'administrator_status/'+id,
                    dataType: 'json',
                    data:{status:'open'},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        // $(obj).parents("tr").remove();
                        console.log(data)
                        if (data.msg){
                            layer.msg(data.msg,{icon:1,time:1000});
                        }

                        setTimeout(

                            function () {
                                var index = parent.layer.getFrameIndex(window.name);
                                location.reload();
                                parent.layer.close(index);
                            }

                            ,1000)


                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });

                // $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                // $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                // $(obj).remove();
                // layer.msg('已启用!', {icon: 6,time:1000});
            });
        }
    </script>
@stop



