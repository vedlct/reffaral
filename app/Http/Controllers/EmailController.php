<?php
namespace App\Http\Controllers;


use App\Clientinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;


class EmailController extends Controller
{
    public function add(){

        return view('email.add');
    }
    public function insert(Request $request){

        $rules=[
            'name' => 'required|max:45',
            'email' => 'required|max:128',

        ];

        $messages = [
            // 'dimensions' => 'Image dimention should be over 800px',
        ];

        $validator = Validator::make($request->all(), $rules,$messages)->validate();

        $Clientinfo=new Clientinfo();

        $Clientinfo->clientname=$request->name;
        $Clientinfo->email=$request->email;

        $Clientinfo->save();

        Session::flash('message', 'ClientInfo added successfully');
        return back();



    }

}