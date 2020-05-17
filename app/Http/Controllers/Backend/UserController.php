<?php

namespace App\Http\Controllers\Backend;
use App\Http\Requests\{AddUserRequest,EditUserRequest};
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
      public function getListUser()
    {
        $data['users'] = User::paginate(3);
    	return view('backend.user.listuser',$data);
    }
      public function getAddUser()
    {
    	return view('backend.user.adduser');
    }
    public function postAddUser(AddUserRequest $r)
    {
       $user = new User;

       $user->email = $r->email;
       $user->password = bcrypt($r->password);
       $user->full = $r->full;
       $user->address = $r->address;
       $user->phone = $r->phone;
       $user->level = $r->level;

       $user->save();
       return redirect('admin/user')->with('thongbao','Bạn đã thêm thành công');
    }
      public function getEditUser($id_user)
    {
        $data['user'] = User::find($id_user);
    	return view('backend.user.edituser',$data);
    }
    public function postEditUser(EditUserRequest $r ,$id_user)
    {
       $user = User::find($id_user);
       
       $user->email = $r->email;
       if($r->password != "")
       {
          $user->password = bcrypt($r->password);
       }

       $user->full = $r->full;
       $user->address = $r->address;
       $user->phone = $r->phone;
       $user->level = $r->level;
       $user->save();
       return redirect()->back()->with('thongbao','Bạn đã sửa thành công');
    }
    public function getDelete($id_user)
    {
        User::destroy($id_user);
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
    }
}
