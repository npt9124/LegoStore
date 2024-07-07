@extends('Admin')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               List product
            </div>

{{--            <div class="row w3-res-tb">--}}
{{--                <div class="col-sm-5 m-b-xs">--}}
{{--                    <select class="input-sm form-control w-sm inline v-middle">--}}
{{--                        <option value="0">Add</option>--}}
{{--                        <option value="1">Edit</option>--}}
{{--                        <option value="2">Delete</option>--}}

{{--                    </select>--}}
{{--                    <button class="btn btn-sm btn-default">Apply</button>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="input-sm form-control" placeholder="Search">--}}
{{--                        <span class="input-group-btn">--}}
{{--            <button class="btn btn-sm btn-default" type="button">Go!</button>--}}
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
{{--                        <th style="width:20px;">--}}
{{--                            <label class="i-checks m-b-none">--}}
{{--                                <input type="checkbox"><i></i>--}}
{{--                            </label>--}}
{{--                      </th>--}}
                        <th style="color: black;">Id</th>
                        <th style="color: black;">Product name</th>
                        <th style="color: black;">Image</th>
                        <th style="color: black;">Describe</th>
                        <th style="color: black;">Quantity</th>
                        <th style="color: black;">Price</th>
                        <th style="color: black;">Edit</th>
                        <th style="color: black;">Delete</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $key => $lego_pro)
                        <tr>
{{--                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>--}}
                            <td>{{$lego_pro->lego_id}}</td>
                            <td>{{$lego_pro->lego_name}}</td>
                            <td>
                                <img style="height:200px;width:200px" src="{{ asset('/public/GD/'.$lego_pro->lego_image) }}" alt="image">
                            </td>
{{--                            <td>  @foreach ($all_product as $product)--}}

{{--                                    <img src="{{ asset( $product->lego_image) }}" alt="lego_image">--}}

{{--                                @endforeach--}}
{{--                            </td>--}}
                            <td>{{$lego_pro->lego_desc}}</td>
                            <td>{{$lego_pro->lego_quantity}}</td>
                            <td>{{$lego_pro->price}}</td>



                            <td>
                                <a href="{{URL::to('/edit-product/'.$lego_pro->lego_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active" style="font-size: 20px"></i>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-product/'.$lego_pro->lego_id)}}" class="active styling-edit"   ui-toggle-class="">
                                    <i class="fa fa-trash text-danger  text-active "  style="font-size: 20px"></i>
                                </a>
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
