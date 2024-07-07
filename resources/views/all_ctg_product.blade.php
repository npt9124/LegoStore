@extends('Admin')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               Liet ke danh muc san pham
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Add</option>
                        <option value="1">Edit</option>
                        <option value="2">Delete</option>

                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
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
                <table class="table table-striped b-t b-light " ">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Product name</th>
                        <th>Task</th>
                        <th>Add</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_ctg_product as $key => $cate_pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{$cate_pro->cate_name}}</td>
                            <td><span class="text-ellipsis">
                @if($cate_pro->cate_status == 0)
                                        <a href="{{URL::to('/unactive-ctg-product/'.$cate_pro->cate_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                    @else
                                        <a  href="{{URL::to('/active-ctg-product/'.$cate_pro->cate_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    @endif
            </span></td>
                            <td>
                                <a href="{{URL::to('/add-ctg-product/')}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-plus text-success text-active" style="font-size: 20px"></i>
                                </a>
                            </td>

                        <td>
                            <a href="{{URL::to('/edit-ctg-product/'.$cate_pro->cate_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active" style="font-size: 20px"></i>
                            </a>
                        </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-ctg-product/'.$cate_pro->cate_id)}}" class="active styling-edit" style="font-size: 25px;margin-left: 5px"  ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i></a>
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
