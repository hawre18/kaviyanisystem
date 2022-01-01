<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::orderby('updated_at','desc')->paginate(20);
        return view('v1.index.admin.orders.index',compact(['orders']));
    }
    public function getOrderLists($id)
    {
        $order=Order::with('user','city','province','products.photos','address')->whereId($id)->first();
        return view('v1.index.admin.orders.list',compact(['order']));
    }

    public function send($id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->update(array('sents' => 1));
        return redirect()->back();

    }
    public function newOrder()
    {
        $orders=Order::where('sents',0)->orderby('created_at','asc')->paginate(10);
        return view('v1.index.admin.orders.index',compact(['orders']));
    }
    public function orderPay($id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->update(array('status' => 1));
        return redirect()->back();
    }

    public function unpaidOrders()
    {
        $orders=Order::where('status',0)->orderby('created_at','asc')->paginate(10);
        return view('v1.index.admin.orders.index',compact(['orders']));
    }
}
