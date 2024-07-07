<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

use App\Http\Requests;
session_start();

use function Termwind\style;

class CategoryProduct extends Controller
{
    public function add_ctg_product()
    {
        return view('add_ctg_product');
    }

    public function all_ctg_product()
    {
        $all_ctg_product = DB::table('categoryproduct')->get();
        return view('all_ctg_product', ['all_ctg_product' => $all_ctg_product]);

    }

    public function save_ctg_product(Request $request)
    {
        $data = array();
        $data['cate_name'] = $request->cate_name;
        $data['cate_desc'] = $request->cate_desc;
        $data['cate_status'] = $request->cate_status;
        DB::table('categoryproduct')->insert($data);
        Session::put('message','Them danh muc san pham thanh cong');
        return Redirect::to('add-ctg-product');
    }
    public function unactive_ctg_product($category_product_id){
        DB::table('categoryproduct')->where('cate_id',$category_product_id)->update(['cate_status' =>1]);
        Session::put('message','Kich hoat danh muc san pham that bai');
        return Redirect::to('all-ctg-product');
    }
    public function active_ctg_product($category_product_id){
        DB::table('categoryproduct')->where('cate_id',$category_product_id)->update(['cate_status' =>0]);
        Session::put('message','Kich hoat danh muc san pham thanh cong');
        return Redirect::to('all-ctg-product');
    }
    public function edit_ctg_product($category_product_id)
    {
        $edit_ctg_product = DB::table('categoryproduct')->where('cate_id', $category_product_id)->get();
        return view('edit_ctg_product', ['edit_ctg_product' => $edit_ctg_product]);
    }
    public function update_ctg_product(Request $request,$category_product_id){
        $data = array();
        $data['cate_name'] = $request->cate_name;
        $data['cate_desc'] = $request->cate_desc;
        DB::table('categoryproduct')->where('cate_id',$category_product_id)->update($data);
        Session::put('message','Cap nhat danh muc san pham thanh cong');
        return Redirect::to('all-ctg-product');
    }
    public function delete_ctg_product($category_product_id)
    {
        DB::table('categoryproduct')->where('cate_id',$category_product_id)->delete();
        Session::put('message','Xoa danh muc san pham thanh cong');
        return Redirect::to('all-ctg-product');
    }
    }
