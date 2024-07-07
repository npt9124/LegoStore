@extends('Admin')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List order
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
                <th style="color: black;">Time order</th>
                <th style="color: black;">Status</th>
                <th style="color: black;">Customer name</th>
                <th style="color: black;">Phone number</th>
                <th style="color: black;"></th>
                <th style="color: black;"></th>
                <th style="width:30px;"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($all_order as $key => $order_pro)
                <tr>
                    <td>{{$order_pro->id}}</td>
                    <td>{{$order_pro->product_name}}</td>
                    <td>{{$order_pro->time_order}}</td>
                    <td>{{$order_pro->status}}</td>
                    <td>{{$order_pro->customer_name}}</td>
                    <td>{{$order_pro->phone_number}}</td>
                    <td>
                        <a href="{{ URL::to('/change-status/'.$order_pro->id) }}" class="btn btn-primary">Change status</a>
               <td>
                        <a href="{{ URL::to('/change-status/'.$order_pro->id) }}" class="btn btn-primary">Cancel</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </tbody>
    </table>
    </div>
    <footer class="panel-footer">
        <div class="row">

            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>

        </div>
    </footer>
    </div>
    </div>
@endsection
