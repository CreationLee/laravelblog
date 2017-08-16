@extends('admin.layouts.main')
@section('content')
<div class="row">
     <div class="col-lg-12">
         <h1 class="page-header">修改分类</h1>
     </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            {{--form-header--}}
            <div class="panel-heading">
                修改分类
            </div>
            {{--form--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="{{route('article_categories.update',$cate_info->id)}}">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $cate_info->id }}">
                            <div class="form-group">
                                <label>名称</label>
                                <input class="form-control" name="name" value="{{$cate_info->name}}">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn btn-primary" >更新分类</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
