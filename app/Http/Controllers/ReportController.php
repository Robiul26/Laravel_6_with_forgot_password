<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Order;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $dt = Carbon::now();
        $orders = DB::table('orders')->select('*')->where('created_at', $dt->toDateString())->get();
        return view('admin.pages.report.order-report')->with('orders', $orders);
    }
    public function invoice()
    {
        $dt = Carbon::now();
        $orders = DB::table('orders')->select('*')->where('created_at', $dt->toDateString())->get();
        //return view('admin.pages.report.invoice', compact('orders'));
        $pdf = PDF::loadView('admin.pages.report.invoice', compact('orders'));
        return $pdf->stream('invoice.pdf');
    }
    public function getGuzzleRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://myexample.com');
        $response = $request->getBody();
       
        dd($response);
    }
}
