<?php

namespace App\Http\Controllers;

use App\Models\deliveryman;
use App\Http\Requests\StoredeliverymanRequest;
use App\Http\Requests\UpdatedeliverymanRequest;
use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    public Function dashboard(){
        $deliveryman = deliveryman::all()->first();
        return view('User.profile')->with('deliveryman',$deliveryman);
    }

    public Function deliverymanEdit(Request $request){
        $deliveryman = deliveryman::where('id', $request->id)->first();
        return view('User.deliverymanEdit')->with('deliveryman',$deliveryman);
    }

}
