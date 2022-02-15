<?php

namespace App\Http\Controllers;

use App\Models\ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function idx(){
        $ebooks = ebook::all();

        return view ('home', ['ebook' => $ebooks]);
    }

    public function signinidx(){
        if(!Auth::check()){
            return view ('register');
        }
        return redirect()->back();
    }

    public function loginidx(Request $log){
        if(!Auth::check()){
            return view ('login');
        }
        return redirect()->back();
    }

}
