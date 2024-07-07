<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
USE Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use function Termwind\style;

session_start();
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin_login');
    }
    public function show_dashboard(){
        return view('dashboard');
    }
    public function dashboard(Request $request){
        $username = $request->username;
        $ad_pass = md5($request->ad_pass);
        $result = DB::table('Admin_table')->where('username', $username)->where('ad_pass', $ad_pass)->first();

        if ($result) {
            Session::put('fullname', $result->fullname);
            Session::put('ad_id', $result->ad_id);
            return redirect('/dashboard');
        } else {
            Session::put('message', 'Vui lòng nhập lại mật khẩu');
            return redirect('/dashboard');
        }
    }
    public function logout(){
        Session::put('fullname', null);
        Session::put('ad_id', null);
        return redirect('/Admin_login');
    }
}
