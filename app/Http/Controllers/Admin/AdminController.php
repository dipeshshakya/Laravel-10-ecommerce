<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        return view('admin.index');
    }


    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    Public function AdminProfile(){
        $id = Auth::user()->id;
        $data = User::find($id);
        return view ('admin.profile',compact('data'));

    }


    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data -> username = $request -> username;
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data ->address = $request ->address;
        $data -> phone = $request -> phone;

        if($request->file('photo')){
            $file = $request ->file('photo');
            $filename = date ('YmdHi').$file->getClientOriginalName();
            $file -> move(public_path('upload/admin/image'),$filename);
            $data['photo']=$filename;
        }
        $data->save();
        return redirect()->back();
    }
}
