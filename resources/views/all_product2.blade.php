@extends('Admin')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Order
            </div>

            </span>
        </div>
    </div>
    </div>
    <div class="table-responsive">
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>

        <table class="table table-striped b-t b-light ">
            <thead >
            <tr >

                <th style="color: black;">Id</th>
                <th style="color: black;">Product name</th>
                <th style="color: black;">Price</th>
                <th style="color: black;">Image</th>
                <th style="color: black;"></th>
                <th style="color: black;"></th>
                <th style="width:30px;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($all_product2 as $key => $lego_pro2)
                <tr>
                    {{--                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>--}}
                    <td>{{$lego_pro2->lego_id}}</td>
                    <td>{{$lego_pro2->lego_name}}</td>
                    <td>{{$lego_pro2->price}}</td>
                    <td>
                        <img style="height:200px;width:200px" src="{{ asset('/public/GD/'.$lego_pro2->lego_image) }}" alt="image">
                    </td>
                    <td>                        <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-product2/'.$lego_pro2->lego_id)}}" class="active styling-edit"   ui-toggle-class="">
                            <i class="fa fa-trash text-danger text-active " style="font-size: 20px"></i>

                    </td>

<td>
    <a href="{{ URL::to('/add-order'.$lego_pro2->lego_id) }}" class="btn btn-primary">Order</a>

</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <footer class="panel-footer">
        <div class="row">

            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>
    </div>
@endsection
