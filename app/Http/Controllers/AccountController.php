<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function accidx(Request $req){
        $acc= [
            'firstname' => ['required', 'alpha_num','max:25'],
            'middlename' => ['alpha_num', 'max:25'],
            'lastname' => ['required', 'alpha_num', 'max:25'],
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'alpha_num','min:8'],
            'gender' => ['required'],
            'role' => ['required'],
            'displaypicture' => ['required']
        ];

        $account = [
            'email' => $req->email,
            'password' => $req->password
        ];

        $accounts = Validator::make($req->all(), $acc);

        if($accounts->fails()){
            return back()->withErrors($accounts);
        }

        $newacc = new User();
        $newacc->first_name = $req->firstname;
        if($req->middlename != null){
            $newacc->middle_name = $req->middlename;
        }
        $newacc->last_name = $req->lastname;
        $newacc->email = $req->email;
        $newacc->password = bcrypt($req->password);
        $newacc->gender_id = $req->gender;
        $newacc->role_id = $req->role;
        $newacc->display_picture_link = $req->displaypicture;

        $newacc->save();
        Auth::attempt($account, true);
        return redirect("user");
    }

    public function log(Request $req){

        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if(Auth::attempt($credentials)){
            return redirect("user");
        }else{
            return redirect('login');
        }
    }

    public function out(){
        Auth::logout();
        return redirect("/");
    }

}
