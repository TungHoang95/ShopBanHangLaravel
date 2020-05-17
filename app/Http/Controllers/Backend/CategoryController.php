<?php

namespace App\Http\Controllers\Backend;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
      public function getCategory()
    {
        $data['categorys'] = Category::all()->toarray();
    	return view('backend.category.category',$data);
    }
    public function postCategory(AddCategoryRequest $r)
    {
        if (GetLevel(Category::all()->toarray(),$r->parent,1) > 2) 
        {
           return redirect()->back()->with('error','Giao diện web không hỗ trợ danh mục lớn hơn 2 cấp');
        }

       $cate = new Category;

       $cate->category_name = $r->category_name;
       $cate->slug = str_slug($r->category_name);
       $cate->parent = $r->parent;
       $cate->save();
       return redirect()->back()->with('thongbao','Bạn đã thêm danh mục:'.$r->category_name);
    }
    public function getEditCategory($id_category)
    {
        $data['cate'] = Category::find($id_category);
        $data['categorys'] = Category::all()->toarray();
    	return view('backend.category.editcategory',$data);
    }
    public function postEditCategory(EditCategoryRequest $r,$id_category)
    {
         if (GetLevel(Category::all()->toarray(),$r->parent,1) > 2) 
        {
           return redirect()->back()->with('error','Giao diện web không hỗ trợ danh mục lớn hơn 2 cấp');
        }

       $cate = Category::find($id_category);

       $cate->category_name = $r->category_name;
       $cate->slug = str_slug($r->category_name);
       $cate->parent = $r->parent;
       $cate->save();
       return redirect()->back()->with('thongbao','Bạn đã sửa danh mục:'.$r->category_name);
    }
    public function DeleteCategory($id_category)
    {
        $cate = Category::find($id_category);
        Category::where('parent',$id_category)->update(['parent' => $cate->parent]);
        Category::destroy($id_category);
        return redirect()->back()->with('thongbao','Bạn đã xóa danh mục thành công');
    }
}
