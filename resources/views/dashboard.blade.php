@extends('Admin')
@section('admin_content')
    <header class="panel-heading" style="background-color: #e1e1e1; width: 300px; margin-left: auto; margin-right: auto; text-align: center;">
        Account Information
    </header>
    <style>
        .underline-link {
            text-decoration: underline;
        }
    </style>
    <div class="form-group">
        <label for="exampleInputEmail1" >Display name</label>
        <input type="text" name="Name" class="form-control" id="exampleInputEmail1" placeholder="Nguyễn Phương Thanh" value="Nguyễn Phương Thanh">
        <p class="underline-link" href="#">Thay đổi</p>
    </div>
    <div class="form-group">
        <label for="number">Avatar</label>
        <input  type="file" name="lego_image" class="form-control " id="lego_image" placeholder=" lego_image">

    </div>
@endsection
