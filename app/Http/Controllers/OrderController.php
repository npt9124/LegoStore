<?php

namespace App\Http\Controllers;

use App\Models\Lego2;
use Illuminate\Http\Request;
use App\Models\Order;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;

use App\Http\Requests;
session_start();
class OrderController extends Controller
{
    public function add_order()
    {
        return view('add_order');
    }

    public function all_order()
    {
        $all_order = DB::table('order')->get();
        return view('all_order', ['all_order' => $all_order]);

    }
    public function save_order(Request $request)
    {
        $data = array();
        $data['id'] = $request->id;
        $data['product_name'] = $request->product_name;
        $data['time_order'] = $request->time_order;
        $data['status'] = $request->status;
        $data['customer_name'] = $request->customer_name;
        $data['phone_number'] = $request->phone_number ;

        DB::table('order')->insert($data);
        Session::put('message','Thêm Order thành công');
        return Redirect::to('add-order');
    }
    public function add_ordered()
    {
        return view('add_ordered');
    }
    public function all_ordered()
    {
        $all_ordered = DB::table('ordered')->get();
        return view('all_ordered', ['all_ordered' => $all_ordered]);
    }
    public function save_ordered(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|max:255',
            'lego_name' => 'required|max:255',
            'price' => 'required|max:255',
            'lego_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantity' => 'required|max:255',
            'into_money' => 'required|max:255',
            'status' => 'required|max:255',
            'time_order' => 'required|max:255',


        ]);
        if ($validator->fails()) {
            return redirect()->route('add-ordered')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('lego_image')) {
            $file = $request->file('lego_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('GD/images'), $fileName);
            $imagePath = 'images/' . $fileName;

        } else {
            $imagePath = null;
        }
        $ordered = new Ordered;
        $ordered->id = $request->id;
        $ordered->lego_name = $request->lego_name;
        $ordered->price = $request->price;
        $ordered->quantity =$request->quantity;
        $ordered->into_money =$request->into_money;
        $ordered->status =$request->status;
        $ordered->time_order =$request->time_order;
        $ordered->save();

        return redirect()->route('add-ordered')->with('message', 'Added successfully');
    }
}
