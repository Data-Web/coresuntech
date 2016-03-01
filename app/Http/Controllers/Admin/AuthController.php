<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('admins/auth/login');
    }

    public function store(AuthRequest $request)
    {
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('admin');
        } else {
            return redirect('admin/login')->with('message', trans('auth.login_failed'));
        }
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
