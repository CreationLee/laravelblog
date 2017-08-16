<script>
    var createurl = "{{route('article_categories.create')}}";
    var saveurl = "{{url('admin/article_categories')}}"
</script>
@extends('admin.layouts.main')

{{--样式--}}
@section('style')
    <!-- DataTables CSS -->
    <link href="{{asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

@endsection
{{--内容部分开始--}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">分类管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(session('status'))
                        {{session('status')}}
                    @endif
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>名称</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($cate_list))
                            @foreach($cate_list as $cate)
                                <tr class="odd gradeX">
                                    <td>{{$cate->id}}</td>
                                    <td class="center">{{$cate->name}}</td>
                                    <td class="center">
                                        <a href="{{route('article_categories.edit',['id'=>$cate->id])}}">修改</a>
                                        <a href="{{route('article_categories.destroy',$cate->id)}}">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{--添加界面--}}
        <div class="col-md-6 add_menu_html">
            <div class="text-center middle-box" style="margin-top: 150px">
                <h4 style="color: #555"> 在这里添加或者编辑分类内容 </h4>
                <button type="button" class="btn btn-success mt-ladda-btn ladda-button create_menu" data-style="expand-up">
                    <span class="ladda-label">
                        <i class="fa fa-plus"></i> 添加分类
                    </span>
                    <span class="ladda-spinner"></span>
                </button>
            </div>
        </div>
    </div>
@endsection

{{--前端资源--}}
@section('script')
<!-- DataTables JavaScript -->
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('admin/article_categories/scripts/categories.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
@endsection