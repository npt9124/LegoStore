<?php

namespace App\Http\Controllers;
use App\Models\Lego;
use App\Models\Lego2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;

use App\Http\Requests;
session_start();

class ManageProduct extends Controller
{
    public function add_product()
    {
        return view('add_product');
    }

    public function all_product()
    {
        $all_product = DB::table('lego')->get();
        return view('all_product', ['all_product' => $all_product]);

    }

    public function save_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lego_id' => 'required|max:255',
            'lego_name' => 'required|max:255',
            'lego_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lego_desc' => 'required|max:255',
            'lego_quantity' => 'required|max:255',
            'price' => 'required|max:255',

        ]);
        if ($validator->fails()) {
            return redirect()->route('add-product')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('lego_image')) {
            $file = $request->file('lego_image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('GD/images'), $fileName);
            $imagePath = 'images/' . $fileName;

        }else{
            $imagePath = null;
        }
        $lego = new Lego;
        $lego->lego_id = $request->lego_id;
        $lego->lego_name = $request->lego_name;
        $lego->lego_image =  $imagePath;
        $lego->lego_desc = $request->lego_desc;
        $lego->lego_quantity = $request->lego_quantity;
        $lego->price = $request->price;


        $lego->save();

        return redirect()->route('add-product')->with('message', 'Added successfully');



    }

        public function unactive_ctg_product($product_id){
        DB::table('lego')->where('lego_id',$product_id)->update(['lego_status' =>1]);
        Session::put('message','Kich hoat san pham that bai');
        return Redirect::to('all-product');
    }
    public function active_product($product_id){
        DB::table('lego')->where('lego_id',$product_id)->update(['lego_status' =>0]);
        Session::put('message','Kich hoat san pham thanh cong');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id)
    {
        $edit_product = DB::table('lego')->where('lego_id', $product_id)->get();
        return view('edit_product', ['edit_product' => $edit_product ]);
    }
    public function update_product(Request $request,$product_id){
        $data = array();
        $data['lego_name'] = $request->lego_name;
        $data['lego_desc'] = $request->lego_desc;
        DB::table('lego')->where('lego_id',$product_id)->update($data);
        Session::put('message','Cap nhat  san pham thanh cong');
        return Redirect::to('all-product');
    }
    public function delete_product($product_id)
    {
        DB::table('lego')->where('lego_id',$product_id)->delete();
        Session::put('message','Xoa san pham thanh cong');
        return Redirect::to('all-product');

}
}
