<?php
namespace App\Http\Controllers;


use App\Clientinfo;
use App\Sendinfo;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Session;

use Carbon\Carbon;




class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){

        return view('email.add');
    }

    public function show(){
        $clientInfo=Clientinfo::select('clinetinfoid','clientname','email')->orderBy('clientname','ASC')->get();

        return view('email.show')
                ->with('clientInfo',$clientInfo);
    }

    public function update(Request $r){
        $client=Clientinfo::findOrFail($r->id);
        $client->clientname	=$r->name;
        $client->email	=$r->email;
        $client->save();

        Session::flash('message', 'Updated Successfully!');
        return back();
    }

    public function sendMailShow(){

        $clientInfo=Clientinfo::select('clinetinfoid','clientname','email')->orderBy('clientname','ASC')->get();

        return view('email.sendMail')
            ->with('clientInfo',$clientInfo);
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
        $template=$r->template;

        $discountEndDate=$r->discountEndDate;
        $discountStartDate=$r->discountStartDate;


        $clients=$r->client;
        $text=$r->text;
        //$data=array('text'=>$text);

        $month=Carbon::now()->format('m');
        $date=Carbon::now()->format('d');




        foreach ($clients as $clientId) {

            $random = rand(1000,9999);


            $client = Clientinfo::findOrFail($clientId);
            $SendInfo = new Sendinfo();
            $SendInfo->offeramount = $discount;
            $SendInfo->datetime = date(now());
            $SendInfo->sentto = $client->clinetinfoid;
            $randomDiscountCode=$month.$date.$client->clinetinfoid.$random;
            $SendInfo->discountCode =$randomDiscountCode;
            $SendInfo->discountStartDate =$discountStartDate;
            $SendInfo->discountEndDate =$discountEndDate;
            $SendInfo->save();
            $cid = $client->clinetinfoid;
            $data=array('text'=>$text,'clt'=>$cid,'dicountCode'=>$randomDiscountCode,'discountStartDate'=>$discountStartDate,'discountEndDate'=>$discountEndDate,'offerid'=>$SendInfo->sendinfoid);

            if ($template == Template[0]){
                $inviteForDiscount="email.emailTamplate";
            }
            Mail::send($inviteForDiscount,$data, function($message) use ($client)
            {
//                $message->from('Techcloud', 'Discount Offer');
                $message->to($client->email, $client->clientname)->subject('Discount Offer!');
            });

        }
        Session::flash('message', 'Discount Offer Send successfully');

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

    public function sendEmail(){

        Mail::send('email.emailTamplate', ['key' => 'value'], function($message)
        {
            $message->to('md.sakibrahman@gmail.com', 'John Smith')->subject('Welcome!');
        });
    }

    public function delete(Request $r){
        $client=Clientinfo::findOrFail($r->id);
        $client->delete();
        Session::flash('message', 'Deleted Successfully!');
        return back();

    }

}