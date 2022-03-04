<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;


class MpesaController extends Controller
{
    //let's start...

    //To access any mpesa api, we need to have a token
    public function getAccessToken(){
        $ch= curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER,['Authorization: Basic VWdpUkJBTXZ5RzRsZTZndFRHSmNyc0hJNEdId0pYTFc6dVp6aHZieVBnYlFOdHlNTA==']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        return $response->access_token;

    }
    /*
    * Mpesa Daraja Api has more than one APIs based on its services.
      These APIS include MPESA EXPRESS (Stkpush), B2C, B2B ....
      To interact with these different APIS requests are made to
      different urls. In a nutshell, requests will be made to
      different destinations. Nevertheless, the http request header of
      all the requests remains the same. So to avoid writing the http
      header again and again for all the APIs, we can extract out the
      code for inflating the http header and making an Http connection
      in a separate method called  makeHTTP.
      Credit to *Ben*
     */

    //make an Http connection
    public function makeHttp($url, $body){
        //Different apis, different urls...

        $url = 'https://sandbox.safaricom.co.ke/mpesa/' . $url;
        $curl= curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-type:application/json','Authorization: Bearer b3w3F497TQMo4KKnZBwfKh2nfMKI'),
                CURLOPT_RETURNTRANSFER =>true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response= curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }

    public function stkpush(Request $request){
        $phoneNumber= "254769584101";

        $timestamp = date('YmdHis');
        $BusinessShortCode = env('MPESA_STK_SHORTCODE');
        $password = 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwMzAyMTQwNDQw';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = $phoneNumber;
        $PartyB = env('MPESA_STK_SHORTCODE');
        $PhoneNumber = $phoneNumber;
        $CallBackURL = 'https://mydomain.com/path';
        $AccountReference = 'Adibas';
        $TransactionDesc = 'Give me all your money ';
        $LipaNaMpesaPasskey=env('MPESA_PASSKEY');
        $Remarks='successful';

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks);


        return $stkPushSimulation;
    }

}
