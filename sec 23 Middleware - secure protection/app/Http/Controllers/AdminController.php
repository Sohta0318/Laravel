<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index(){
return 'You are administrator';
    }

    public function session(Request $request){
        // $request->session()->put('edwin','master admin');
        // echo $request->session()->get('edwin');

        // session(['edwin2'=>'master instructor']);
        // echo session('edwin2');

        // $request->session()->forget('edwin2');
        // $request->session()->flush();
        // return $request->session()->all();

        // $request->session()->flash('message','Post has been created');
        // return $request->session()->get('message');

        // $request->session()->reflash('message','Post has been created');
        // $request->session()->keep('message','Post has been created');
    }
}