@extends('Admin')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Them danh muc san pham
            </header>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-ctg-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ten danh muc</label>
                            <input type="text" name="cate_name" class="form-control" id="exampleInputEmail1" placeholder=" Ten danh muc">
                        </div>
                        <div class="form-group">
                            <label  style="resize: none" row="8" for="exampleInputPassword1">Mo ta danh muc</label>
                            <textarea  name="cate_desc" class="form-control" id="exampleInputPassword1" placeholder="Mo ta danh muc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"> Hien thi</label>
                            <select class="form-control input-sm m-bot15" name="cate_status">
                                <option value="0" >An</option>
                                <option value="1"  >Hien thi</option>
                            </select>
                        </div>
                        <button type="submit" name="add_ctg_product" class="btn btn-info">Them</button>
                    </form>
                </div>

@endsection
