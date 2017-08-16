<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\ArticleCateTag;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleCategoriesPost;
use App\Repositories\Eloquent\ArticleCategoryRepositoryEloquent;


class ArticleCategoriesController extends Controller
{

    protected $articleCategoryRepositoryEloquent;

    public function __construct(ArticleCategoryRepositoryEloquent $ArticleCategoryRepositoryEloquent)
    {
        $this->articleCategoryRepositoryEloquent=$ArticleCategoryRepositoryEloquent;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cate_list = $this->articleCategoryRepositoryEloquent->getAllCate();
        return view('admin.article_categories.index',compact('cate_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model_cate = $this->articleCategoryRepositoryEloquent->model();
        $cate_first = $model_cate::where('parent_id',0)->orderBy('order','asc')->get();
        return view('admin.article_categories.create',compact('cate_first'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * 保存分类
     *
     * @param  \App\Http\Requests\ArticleCategoriesPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleCategoriesPost $request)
    {
        $responseData = $this->articleCategoryRepositoryEloquent->saveCate($request);
        return response()->json($responseData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate_info = $this->articleCategoryRepositoryEloquent->find($id);
        return view('admin.article_categories.edit',compact('cate_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArticleCategoriesPost  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleCategoriesPost $request, $id)
    {
        $responseData = $this->articleCategoryRepositoryEloquent->updateCate($id,$request);
        return redirect()->action('Admin\ArticleCategoriesController@index')->with('status','更新成功');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
