<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AdminAuthController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('v1.index.admin.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = auth()->guard('admin')->user();

            Session::put('success','You are Login successfully!!');
            return redirect()->route('dashboard');

        } else {
            return back()->with('error','your username and password are wrong.');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success','You are logout successfully');
        return redirect(route('adminLogin'));
    }
}
