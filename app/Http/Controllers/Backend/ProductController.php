<?php

namespace App\Http\Controllers\Backend;
use App\Http\Requests\{AddProductRequest,EditProductRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Product,Category};
class ProductController extends Controller
{
    public function getProduct()
    {
        $data['products'] = Product::paginate(4);
    	return view('backend.product.listproduct',$data);
    }

    public function getAddProduct()
    {
        $data['categorys'] = Category::all()->toarray();
    	return view('backend.product.addproduct',$data);
    }

    public function postAddProduct(AddProductRequest $r)
    {
       $product = new Product;
       $product->code = $r->code;
       $product->product_name = $r->product_name;
       $product->slug = str_slug($r->product_name);
       $product->price = $r->price;
       $product->sale_price = $r->sale_price;
       $product->featured = $r->featured;
       $product->state = $r->state;
       $product->info = $r->info;
       $product->describe = $r->describe;
       if($r->hasFile('img'))
       {
            $file = $r->img;
            $file_name = str_slug($r->product_name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $product->img = $file_name;
       }
       else
       {
           $product->img = 'no-img.jpg';
       }

       $product->category_id = $r->category;
       $product->save();
       return redirect('admin/product')->with('thongbao','Bạn đã thêm sản phẩm thành công');

    }

    public function getEditProduct($id_product)
    {
        $data['categorys'] = Category::all()->toarray();
        $data['products'] = Product::find($id_product);
    	return view('backend.product.editproduct',$data);
    }
    public function postEditProduct(EditProductRequest $r,$id_product)
    {

       $product = Product::find($id_product);
       $product->code = $r->code;
       $product->product_name = $r->product_name;
       $product->slug = str_slug($r->product_name);
       $product->price = $r->price;
       $product->sale_price = $r->sale_price;
       $product->featured = $r->featured;
       $product->state = $r->state;
       $product->info = $r->info;
       $product->describe = $r->describe;
       if($r->hasFile('img'))
       {
            if($product->img != 'no-img.jpg')
            {
              @unlink('backend/img/'.$product->img);
            }
            $file = $r->img;
            $file_name = str_slug($r->product_name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $product->img = $file_name;
       }

       $product->category_id = $r->category;
       $product->save();
       return redirect()->back()->with('thongbao','Bạn đã sửa thành công');
    }
    public function getDelete($id_product)
    {
        $product = Product::find($id_product);
        $product->delete();
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
    }


}
