<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect(route('email.send'));

    }



    public function password(){

        return view('auth.passChange');

    }

    public function changepassword(Request $r){
        $user=User::findOrFail(Auth::user()->id);

        $currentPass= Hash::make($r->currentPassword);
        $newPass=Hash::make($r->password);
        if(Hash::check($r->currentPassword, $user->password)){

            $user->password= $newPass;
            $user->save();
            Session::flash('message', 'Password Changed successfully');
            return back();
        }

        Session::flash('message', 'Password did not match');
        return back();
    }
}
