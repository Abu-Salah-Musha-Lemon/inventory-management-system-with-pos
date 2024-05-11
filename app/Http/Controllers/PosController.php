<?php

namespace App\Http\Controllers;

use App\Models\pos;
use Illuminate\Http\Request;
use DB;
class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $product= DB::table('products')->get();
       
        return view('pos.pos',compact('product'));
    }

    public function pendingOrder(){

        $pending = DB::table('order')
                ->join('customers','order.customer_id','customers.id')
                ->select('customers.*','order.*')
                ->where('order_status','pending')->get();
        return view('pos.all_pending_order',compact('pending'));

    }

    public function viewOrder($id){

        $order = DB::table('order')
                ->join('customers','order.customer_id','customers.id')
                ->select('customers.*','order.*')
                ->where('order.id',$id)
                ->first();

                $orderDetails = DB::table('order_details')
                ->join('products', 'order_details.product_id', 'products.id')
                ->select('products.product_name', 'order_details.*')
                ->where('order_details.order_id', $id)
                ->get();
            
                // echo"<pre>";
                // print_r($order);
                // echo"<pre>";
                // print_r($orderDetails);
        return view('pos.view_pending_order',compact('order','orderDetails'));

    }


    public function paidOrder($id) {
        $aproned = DB::table('order')->where('id',$id)->update(['order_status'=>'success']);
        return Redirect()->route('paidOrder');
    }

    public function paidAllOrder(){
        $success = DB::table('order')
                    ->join('customers','order.customer_id','customers.id')
                    ->select('customers.*','order.*')
                    // if you are not use all the data of customer and order, use this method because
                    // customer and order id are same . so data can not get form data base 
                    // ->select('customers.*','order.*','order.id as order_id')
                    ->where('order_status','success')
                    ->get();

        return view('pos.all_paid_order',compact('success'));
    }


}
