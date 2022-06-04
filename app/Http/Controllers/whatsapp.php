<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alldata;

class whatsapp extends Controller
{
    //
    function saveData(Request $request){

        $validated = $request->validate([
            'message' => 'required',
            'phone' => 'required|max:20',
        ]);
        
        $msg = $request->message;
        $phone = $request->area_code.$request->phone;

        if($request->exist=="yes"){
            $save = alldata::create([
                'msg' => $msg,
                'phone' => $phone,
            ]);        
    

        }
       

            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.ultramsg.com/instance7760/messages/chat",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "token=0osvafcctb34ufa4&to=".$phone."&body=".$msg."&priority=10&referenceId=",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
            ));    
            $response = curl_exec($curl);
            $err = curl_error($curl);    
            curl_close($curl);
    
            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
                return view('success', ['phone'=>$phone]);
            }
   

 
       
    }


    // to check all data 
    function allList(){
        $list = alldata::orderBy('id', 'desc')->get();
        return view('allList', ['list'=>$list]);
    }





}
