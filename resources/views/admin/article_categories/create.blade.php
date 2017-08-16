
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            {{--form-header--}}
            <div class="panel-heading">
                添加分类
            </div>
            {{--form--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" id="createForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <select class="form-control" name="parent_id">
                                    <option value="0">顶级分类</option>
                                    @if(!empty($cate_first))
                                        @foreach($cate_first as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>名称</label>
                                <input class="form-control" name="name">
                            </div>
                            <div class="form-actions noborder">
                                <button type="submit" class="btn createButton btn-primary" >创建分类</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
