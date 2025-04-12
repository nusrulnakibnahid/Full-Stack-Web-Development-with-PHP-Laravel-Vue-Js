<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function customerData(){
        $customers = DB::table('customers')
            ->join('orders','customers.customer_id','=','orders.customer_id')
            ->select('customers.customer_id','customers.name','customers.email','customers.phone','orders.order_id','orders.order_date','orders.total_amount')
            ->get();
        return response()->json($customers);
    }

    function customerDataLeftJoin(){
        $customers = DB::table('customers')
            ->leftJoin('orders','customers.customer_id','=','orders.customer_id')
            ->select('customers.customer_id','customers.name','customers.email','customers.phone','orders.order_id','orders.order_date','orders.total_amount')
            ->get();
        return response()->json($customers);
    }

    function customerDataRightJoin(){
        $customers = DB::table('customers')
            ->rightJoin('orders','customers.customer_id','=','orders.customer_id')
            ->select('customers.customer_id','customers.name','customers.email','customers.phone','orders.order_id','orders.order_date','orders.total_amount')
            ->get();
        return response()->json($customers);
    }

    function customerDataCrossJoin(){
        $color_size = DB::table('colors')
            ->crossJoin('sizes')
            ->select('colors.color','sizes.size')
            ->get();
        return response()->json($color_size);
    }

    function getOrders(){
        $orderDatas = DB::table('orders as o')
            ->join('customers as c','o.customer_id','=','c.customer_id')
            ->join('order_details as od','o.order_id','=','od.order_id')
            ->join('books as b','od.book_id','=','b.book_id')
            ->select(
                'o.*',
                'c.name as customer_name',
                'c.phone as customer_phone',
                'c.email as customer_email',
                'od.order_details_id',
                'od.book_id',
                'od.quantity',
                'od.line_total',
                'b.title as book_title',
                'b.price as book_price',
            )->orderBy('o.order_id','desc')
            ->get();

        $orders = [];
        foreach ($orderDatas as $orderData){
            $orderID = $orderData->order_id;
            if (!isset($orders[$orderID])){
                $orders[$orderID] = [
                    'order_id' => $orderData->order_id,
                    'customer_name' => $orderData->customer_name,
                    'customer_phone' => $orderData->customer_phone,
                    'customer_email' => $orderData->customer_email,
                    'orders_details' => [],
                ];
            }

            $orders[$orderID]['orders_details'][] = [
                'order_details_id'=>$orderData->order_details_id,
                'book_title'=>$orderData->book_title,
                'book_price'=>$orderData->book_price,
                'quantity'=>$orderData->quantity,
                'line_total'=>$orderData->line_total,
            ];
        }

        return response()->json(array_values($orders));

    }

    function getOrderSecondWay(){
        $orders = DB::table('orders as o')
            ->join('customers as c','o.customer_id','=','c.customer_id')
            ->select('o.*','c.name as customer_name','c.phone as customer_phone','c.email as customer_email',)
            ->get()
            ->map(function ($order){
                $order->order_details_sobuj = DB::table('order_details as od')
                    ->join('books as b','od.book_id','=','b.book_id')
                    ->where('od.order_id',$order->order_id)
                    ->select('od.*','b.title as book_title','b.price as book_price')
                    ->get();
                return $order;
            });

        return response()->json($orders);
    }
}
