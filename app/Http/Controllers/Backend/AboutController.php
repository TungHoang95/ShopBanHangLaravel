<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
class AboutController extends Controller
{
    public function getList()
    {
        $data['about'] = About::all();
        return view('backend.about.about',$data);
    }
    public function getUpdate($id)
    {
        $data['about'] = About::find($id);
        return view('backend.about.update',$data);
    }
    public function postUpdate(request $r,$id)
    {
        $about = About::find($id);
        $about->introduce = $r->description;

        if($r->hasFile('image'))
        {
         $file = $r->file('image');
         $duoi = $file->getClientOriginalExtension();
         if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg' )
         {
            return redirect('backend/about/update')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png , jpeg');
         }
         $name = $file->getClientOriginalName();
         $image = $name;
         while(file_exists("/backend/img".$image))
         {
            $image = $name;
            }
            $file->move("/backend/img",$image);
            $about->image = $image;
        }
        $about->save();
        return redirect()->back()->with('thongbao','Bạn đã sửa thành công');
    }
}
