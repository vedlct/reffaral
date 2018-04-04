<?php
namespace App\Http\Controllers;


use App\Clientinfo;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;


class EmailController extends Controller
{
    public function add(){

        return view('email.add');
    }
    public function sendMailShow(){

        $clientInfo=Clientinfo::select('clinetinfoid','clientname','email')->orderBy('clientname','ASC')->get();
        $template=Template::select('templateid','name')->orderBy('templateid','ASC')->get();
        return view('email.sendMail')
            ->with('clientInfo',$clientInfo)
            ->with('template',$template);
    }
    public function sendRefferEmail(){

//        $clientInfo=Clientinfo::select('clinetinfoid','clientname','email')->orderBy('clientname','ASC')->get();
//        $template=Template::select('templateid','name')->orderBy('templateid','ASC')->get();
        return view('client.refferMail');
//            ->with('clientInfo',$clientInfo)
//            ->with('template',$template);
    }
    public function sendMail(Request $r){

        $discount=$r->discount;
        $templateId=$r->template;
        $clients=$r->client;

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