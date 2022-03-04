<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalPaymentController extends Controller
{
    public function create(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $this->paypalClient->setApiCredentials(config('paypal'));
        $token = $this->paypalClient->getAccessToken();
        $this->paypalClient->setAccessToken($token);
        $order = $this->paypalClient->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                 [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> $data['amount']
                    ],
                     'description' => 'test'
                ]
            ],
        ]);
        $mergeData = array_merge($data,['status' => TransactionStatus::PENDING, 'vendor_order_id' => $order['id']]);
        DB::beginTransaction();
        Order::create($mergeData);
        DB::commit();
        return response()->json($order);

        $this->paypalClient->setApiCredentials(config('paypal'));
        $token = $this->paypalClient->getAccessToken();
        $this->paypalClient->setAccessToken($token);

        $order = $this->paypalClient->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                 [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> $data['amount']
                    ],
                     'description' => 'test'
                ]
            ],
        ]);
        //return redirect($order['links'][1]['href'])->send();
       // echo('Create working');
    }

    public function capture(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];
        $this->paypalClient->setApiCredentials(config('paypal'));
        $token = $this->paypalClient->getAccessToken();
        $this->paypalClient->setAccessToken($token);
        $result = $this->paypalClient->capturePaymentOrder($orderId);

//            $result = $result->purchase_units[0]->payments->captures[0];
        try {
            DB::beginTransaction();
            if($result['status'] === "COMPLETED"){
                $transaction = new Transaction;
                $transaction->vendor_payment_id = $orderId;
                $transaction->payment_gateway_id  = $data['payment_gateway_id'];
                $transaction->user_id   = $data['user_id'];
                $transaction->status   = TransactionStatus::COMPLETED;
                $transaction->save();
                $order = Order::where('vendor_order_id', $orderId)->first();
                $order->transaction_id = $transaction->id;
                $order->status = TransactionStatus::COMPLETED;
                $order->save();
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        return response()->json($result);
    }

}
