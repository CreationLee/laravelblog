@extends('admin.layouts.main')
@section('content')
<div class="row">
     <div class="col-lg-12">
         <h1 class="page-header">Forms</h1>
     </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            {{--form-header--}}
            <div class="panel-heading">
                添加文章
            </div>
            {{--form--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form">
                            <div class="form-group">
                                <label>Text Input</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
