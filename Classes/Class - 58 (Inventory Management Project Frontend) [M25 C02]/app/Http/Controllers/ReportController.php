<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function salesReport(Request $request){
        $user_id = $request->header('user_id');

        $from_date = date('Y-m-d', strtotime($request->from_date));
        $to_date = date('Y-m-d', strtotime($request->to_date));

        $total = Invoice::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)->whereDate('created_at', '<=', $to_date)->sum('total');
        $vat = Invoice::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)->whereDate('created_at', '<=', $to_date)->sum('vat');
        $payable = Invoice::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)->whereDate('created_at', '<=', $to_date)->sum('payable');
        $discount = Invoice::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)->whereDate('created_at', '<=', $to_date)->sum('discount');

        $list = Invoice::where('user_id', $user_id)->whereDate('created_at', '>=', $from_date)->whereDate('created_at', '<=', $to_date)->with('customer')->get();

        $data = [
            'total' => $total,
            'vat' => $vat,
            'payable' => $payable,
            'discount' => $discount,
            'list' => $list,
        ];

        $pdf = Pdf::loadView('report.sales_report', $data);

        return $pdf->download('sales_report.pdf');
        
    }
}