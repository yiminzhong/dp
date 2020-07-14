@extends('admin.layouts.header')

@section('content')
    <section class="container-fluid page-404 minWP text-c">

        <p class="error-description">{{$msg}}</p>
        <p class="error-info">您可以：
            <a href="javascript:;" onclick="history.go(-1)" class="c-primary">&lt; 返回上一页</a>

        </p>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function return_close(url){

            window.parent.location.reload();

        }
    </script>
@stop



