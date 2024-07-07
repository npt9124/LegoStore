@extends('Admin')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Order
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
                        <form role="form" action="{{URL::to('/save-order')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="id" name="id" class="form-control" id="id" placeholder=" id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder=" product_name">
                            </div>
                            <div class="form-group">
                                <label for="time_order" class="col-sm-2 control-label">Time order:</label>
                                <div class="col-sm-10">
                                    <input type="date" name="time_order" id="time_order" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" id="status" placeholder=" status">
                            </div>
                            <div class="form-group">
                                <label for="customer_name">Customer name</label>
                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=" customer_name">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder=" Quantity">

                            </div>
                            <button type="submit" name="add_product" class="btn btn-info">Add</button>
                        </form>
                    </div>

@endsection
