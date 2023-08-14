<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.index',compact('data'));
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
            @unlink(public_path('upload/admin/image/'.$data->photo));
            $filename = date ('YmdHi').$file->getClientOriginalName();
            $file -> move(public_path('upload/admin/image'),$filename);
            $data['photo']=$filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    Public function AdminChangePassword(){
        $id = Auth::user()->id;
        $data = User::find($id);
        return view ('admin.changePassword',compact('data'));
    }

    public function AdminUpdatePassword(Request $request){
        $request -> validate([
            'old_password' => 'required',
            'new_password' => 'required | same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        // match the old password
        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message' => 'Old password does not match',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        // update new password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request -> new_password)
        ]);
        $notification = array(
            'message' => 'Password change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    
        
    }
}
