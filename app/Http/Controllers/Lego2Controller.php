<?php

namespace App\Http\Controllers;

use App\Models\Lego2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

use App\Http\Requests;
session_start();
class Lego2Controller extends Controller
{
    public function add_product2()
    {
        return view('add_product');
    }
    public function all_product2()
    {
        $all_product2 = DB::table('lego2')->get();
        return view('all_product2', ['all_product2' => $all_product2]);

    }
    public function save_product2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lego_id' => 'required|max:255',
            'lego_name' => 'required|max:255',
            'price' => 'required|max:255',
            'lego_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',


        ]);
        if ($validator->fails()) {
            return redirect()->route('add-product2')->withErrors($validator)->withInput();
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
        $lego2 = new Lego2;
        $lego2->lego_id = $request->lego_id;
        $lego2->lego_name = $request->lego_name;
        $lego2->price = $request->price;
        $lego2->lego_image = $imagePath;
        $lego2->save();

        return redirect()->route('add-product2')->with('message', 'Added successfully');
    }
}
