<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $orders = Order::select('*')->orderBy('id', 'desc')->paginate(10);
        $orders = Order::with(['city_zone'])->orderBy('id', 'desc')->paginate(8);
        return view('admin.pages.order.show-order')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('city_zones')
            ->select('city_id', 'city_name')
            ->distinct()
            ->orderBy('city_name')
            ->get();
        $dhaka_zone = DB::table('city_zones')
            ->select('zone_id', 'zone_name')
            ->where('city_id', 1)
            ->orderBy('zone_name')
            ->get();

        return view('admin.pages.order.add-order', compact('cities', 'dhaka_zone'));
    }

    // Get Subject
    public function get_zone(Request $request)
    {
        $id = $request->id;
        $zones = DB::table('city_zones')
            ->select('zone_name')
            ->where('city_id', $id)
            ->get();

        return response()->json($zones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $dt = Carbon::now();

        $itemType = $request->input('itemType');
        $delivery_type = $request->input('deliveryType');
        $store_id = $request->input('storeId');
        $merchant_order_id = $request->input('merchantOrderId');
        $recipient_name = $request->input('recipientName');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('txtCity');
        $zone = $request->input('txtZone');
        $aria = $request->input('txtAria');
        $qty = $request->input('itemQty');
        $sp_instraction = $request->input('spInstruction');
        $weight = $request->input('itemWeight');
        $description = $request->input('itemDesc');
        $price = $request->input('txtPrice');
        $amount = $request->input('amount');
        $create = $dt->toDateString();
        $update = $dt->toDateString();

        $isDuplicate = DB::table('orders')
            ->select('*')
            ->where('item_type', $itemType)
            ->where('merchant_order_id', $merchant_order_id)
            ->where('recipient_name', $recipient_name)
            ->where('recipient_phone', $phone)
            ->where('recipient_address', $address)
            ->where('amount_to_collect', $amount)

            ->where('created_at', $create)
            ->get();
        //return dump(count($isDuplicate));

        // $data = array("name" => $name,"address" => $address,"created_at"=> Carbon::now(),"updated_at"=> now());
        //DB::table('student')->insert($data);
        if (count($isDuplicate) > 0) {
            return redirect()->back()->with('error', 'Data already exist');
        } else {
            $this->validate($request, [
                'itemType' => 'required|max:155',
                'deliveryType' => 'required|max:155',
                'storeId' => 'required|max:155',
                'merchantOrderId' => 'required|max:155',
                'recipientName' => 'required|max:155',
                'phone' => 'required|regex:/(01)[0-9]{9}/',
                'address' => 'required|max:400',
                'txtCity' => 'required|max:400',
                'txtZone' => 'required|max:400',
                // 'txtAria' => 'required|max:400',
                'itemQty' => 'required|max:400',
                'spInstruction' => 'required|max:400',
                'itemWeight' => 'required|max:400',
                'itemDesc' => 'required|max:400',
                'txtPrice' => 'numeric|required',
                'amount' => 'numeric|required',
            ]);
            //  

            //
            $order = new Order;
            $order->item_type = $itemType;
            $order->delivery_type = $delivery_type;
            $order->store_id = $store_id;
            $order->merchant_order_id = $merchant_order_id;
            $order->recipient_name = $recipient_name;
            $order->recipient_phone = $phone;
            $order->recipient_address = $address;
            $order->recipient_city = $city;
            $order->recipient_zone = $zone;
            $order->recipient_area = $aria;
            $order->item_quantity = $qty;
            $order->special_instruction = $sp_instraction;
            $order->item_weight = $weight;
            $order->item_description = $description;
            $order->price = $price;
            $order->amount_to_collect = $amount;
            $order->created_at = $create;
            $order->updated_at = $update;
            $order->save();


            return redirect()->back()->with('success', 'Order Saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        return view('admin.pages.order.edit-order', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt = Carbon::now();

        $itemType = $request->input('itemType');
        $delivery_type = $request->input('deliveryType');
        $store_id = $request->input('storeId');
        $merchant_order_id = $request->input('merchantOrderId');
        $recipient_name = $request->input('recipientName');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('txtCity');
        $zone = $request->input('txtZone');
        $aria = $request->input('txtAria');
        $qty = $request->input('itemQty');
        $sp_instraction = $request->input('spInstruction');
        $weight = $request->input('itemWeight');
        $description = $request->input('itemDesc');
        $price = $request->input('txtPrice');
        $amount = $request->input('amount');
        $create = $dt->toDateString();
        $update = $dt->toDateString();

        $isDuplicate = DB::table('orders')
            ->select('*')
            ->where('item_type', $itemType)
            ->where('merchant_order_id', $merchant_order_id)
            ->where('recipient_name', $recipient_name)
            ->where('recipient_phone', $phone)
            ->where('recipient_address', $address)
            ->where('amount_to_collect', $amount)

            ->where('created_at', $create)
            ->get();
        //return dump(count($isDuplicate));

        // $data = array("name" => $name,"address" => $address,"created_at"=> Carbon::now(),"updated_at"=> now());
        //DB::table('student')->insert($data);
        if (count($isDuplicate) > 0) {
            return redirect()->back()->with('error', 'Data already exist');
        } else {
            $this->validate($request, [
                'itemType' => 'required|max:155',
                'deliveryType' => 'required|max:155',
                'storeId' => 'required|max:155',
                'merchantOrderId' => 'required|max:155',
                'recipientName' => 'required|max:155',
                'phone' => 'required|regex:/(01)[0-9]{9}/',
                'address' => 'required|max:400',
                'txtCity' => 'required|max:400',
                'txtZone' => 'required|max:400',
                // 'txtAria' => 'required|max:400',
                'itemQty' => 'required|max:400',
                'spInstruction' => 'required|max:400',
                'itemWeight' => 'required|max:400',
                'itemDesc' => 'required|max:400',
                'txtPrice' => 'numeric|required',
                'amount' => 'numeric|required',
            ]);
            //  

            //
            $order = Order::find($id);
            $order->item_type = $itemType;
            $order->delivery_type = $delivery_type;
            $order->store_id = $store_id;
            $order->merchant_order_id = $merchant_order_id;
            $order->recipient_name = $recipient_name;
            $order->recipient_phone = $phone;
            $order->recipient_address = $address;
            $order->recipient_city = $city;
            $order->recipient_zone = $zone;
            $order->recipient_area = $aria;
            $order->item_quantity = $qty;
            $order->special_instruction = $sp_instraction;
            $order->item_weight = $weight;
            $order->item_description = $description;
            $order->price = $price;
            $order->amount_to_collect = $amount;
            $order->created_at = $create;
            $order->updated_at = $update;
            $order->update();

            return redirect()->back()->with('success', 'Order Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->back();
    }
}
