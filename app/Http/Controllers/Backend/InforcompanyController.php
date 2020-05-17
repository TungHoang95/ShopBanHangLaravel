<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Inforcompany;
use App\Http\Controllers\Controller;

class InforcompanyController extends Controller
{
    public function getList()
    {
        $data['infor'] = Inforcompany::all();
        return view('backend.inforcompany.inforcompany',$data);
    }
    public function getUpdate($id)
    {
        $data['infor'] = Inforcompany::find($id);
        return view('backend.inforcompany.update',$data);
    }
    public function postUpdate(request $r,$id)
    {
        $data['infor'] = Inforcompany::find($id);
        $data['infor']->email = $r->email;
        $data['infor']->address = $r->address;
        $data['infor']->phone = $r->phone;
        $data['infor']->link = $r->link;

        $data['infor']->save();
        // return redirect('/inforcompany/update/'.$id)->with('thongbao','Bạn đã sửa thành công');
        return redirect()->back()->with('thongbao','Bạn đã sửa thành công');
    }
}
