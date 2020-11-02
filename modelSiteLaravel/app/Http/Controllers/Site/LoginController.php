<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function enter(Request $req)
    {   
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
            return redirect()->route('admin.cursos');
        } 

        return redirect()->route('login.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
