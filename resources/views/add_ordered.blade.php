@extends('Admin')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Ordered
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
                        <form role="form" action="{{URL::to('/save-ordered')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id">Id</label>
                                <input type="number" name="id" class="form-control" id="id" placeholder=" id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text" name="lego_name" class="form-control" id="exampleInputEmail1" placeholder=" lego_name">
                            </div>
                            <div class="form-group">
                                <label for="number">Price</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder=" Giá">

                            </div>
                            <div class="form-group">
                                <label for="lego_image" class="col-sm-2 control-label">Image:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="lego_image" id="lego_image" accept="image/*" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="number">Quantity</label>
                                <input type="number" name="lego_quantity" class="form-control" id="lego_quantity" placeholder=" Quantity">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Into money</label>
                                <input type="number" name="into_money" class="form-control" id="into_money" placeholder=" into_money">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="text" name="status" class="form-control" id="status" placeholder=" status">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Time order</label>
                                <input type="date" name="time_order" class="form-control" id="time_order" placeholder=" time_order">
                            </div>
                            <button type="submit" name="add_product" class="btn btn-info">Add</button>
                        </form>
                    </div>

@endsection
