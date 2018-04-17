<?php

namespace App\Http\Controllers;

use App\Discountlist;
use App\Referemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class Client extends Controller
{
    //

    public function showRaffaral(Request $r){

        $clientId =  $r->clt;
        $sendinfoid = $r->id;
        $code = $r->disCode;
        $codeStartDate = $r->disStartDate;
        $codeEndDate = $r->disEndDate;

        return view('clintside')
            ->with('clientid', $clientId)
            ->with('code', $code)
            ->with('startDate', $codeStartDate)
            ->with('endDate', $codeEndDate)
            ->with('sendinfoid', $sendinfoid);
    }

    public function saveEmail(Request $r){


        $offerid= $r->id;
        $clientId= $r->clt;

        $code = $r->code;
        $codeStartDate = $r->startDate;
        $codeEndDate = $r->endDate;


        $email =  $r->example_emailBS;
        $a = json_decode( $email, true );

        $discountlist = new Discountlist();
        $discountlist->fksendinfoid= $offerid;
        $discountlist->datetime= date(now());
        $discountlist->save();

        $data=array('discountcode'=>$code,'codeStartDate'=>$codeStartDate,'codeEndDate'=>$codeEndDate,);
        foreach ($a as $value){
            $referemail = new Referemail();
            $referemail->email = $value;
            $referemail->fkdiscountlistid = $discountlist->discountlistid;
            $referemail->discountCode = $code;
            $referemail->discountStartDate = $codeStartDate;
            $referemail->discountEndDate = $codeEndDate;
            $referemail->save();

            Mail::send("email.referEmailTamplate",$data, function($message) use ($value)
            {
//                $message->from('Techcloud', 'Discount Offer');
                $message->to( $value, "Tech CLoud ltd")->subject('Discount Offer!');
            });

        }





        return view('email.thankyou');
    }

    public function reffaralEmail(){

        $discountlist = Discountlist::select('*','sendinfo.*','clientinfo.*', 'sendinfo.datetime as sdate', 'discountlist.datetime as ddate',  'clientinfo.email as cemail')
            ->leftjoin('sendinfo','sendinfo.sendinfoid','=','discountlist.fksendinfoid')
            ->leftjoin('clientinfo','clientinfo.clinetinfoid','=','sendinfo.sentto')
            ->get();


        $referemail=Referemail::select(DB::raw('GROUP_CONCAT(referemail.email SEPARATOR " , ") AS refferedMail'),'fkdiscountlistid')
            ->leftjoin('discountlist','discountlist.discountlistid','=','referemail.fkdiscountlistid')
            ->groupBy('fkdiscountlistid')->get();

        //return $referemail;

        return view('showreffaral')
            ->with('dislist', $discountlist)
            ->with('referemail', $referemail);

    }

    public function OrderView(){

        return view('order');
    }

    public function ordersave(Request $r){


    }
}
