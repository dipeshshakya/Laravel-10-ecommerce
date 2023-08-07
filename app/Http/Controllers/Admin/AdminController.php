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
}
