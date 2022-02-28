<?php

namespace App\Http\Controllers;
use App\Models\Voucher;

use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Voucher::where('code', $request->coupon_code)->first();

        //dd($coupon);
        if (!$coupon) {
            return back()->withErrors('Invalid coupon code. Please try again.');
        }

        //dispatch_now(new UpdateCoupon($coupon));
        session()->put('coupon',[
            'name' => $coupon->code,
            'discount' => $coupon->discount(\Cart::getTotal()),
        ]);

        return back()->with('success_message', 'Coupon has been applied!');
     }


    public function destroy()
    {
        session()->forget('coupon');

        return back()->with('success_message', 'Coupon has been removed.');
    }
}
