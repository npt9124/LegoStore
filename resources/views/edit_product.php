<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .panel-heading {
            font-size: 24px;
            font-weight: bold;
            padding: 10px 20px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }

        .panel-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-update {
            background-color: #007bff;
            color: #fff;
        }

        .btn-update:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .text-center {
            text-align: center;
        }

        /* Updated CSS for shorter input and textarea */
        .form-control-short {
            max-width: 200px;
        }

        .textarea-short {
            max-width: 400px;
            height: 100px;
        }
    </style>
</head>

<body>
<div class="row" style="color: #C26D6D" >
    <div class="col-lg-12" >
        <section class="panel" >
            <a href="/" class="btn btn-primary" style="margin-top: 20px;margin-left: 20px">Quay lại </a>
            <header  class="panel-heading" style="text-align: center;font-size: 40px;margin-top: 30px">
                Cập nhật sản phẩm
            </header>

            @if(Session::has('message'))
            <span class="text-alert">{{ Session::get('message') }}</span>
            {{ Session::forget('message') }}
            @endif

            <div class="panel-body">
                @foreach($edit_ctg_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form"
                          action="{{URL::to('/update-product/'.$edit_value->lego_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-left: 600px;font-size: 30px">Tên danh mục</label>
                            <input type="text" name="cate_name" class="form-control form-control-short"
                                   id="exampleInputEmail1" placeholder="Tên danh mục" style="margin-left: 600px"
                                   value="{{ $edit_value->cate_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-left: 600px;font-size: 30px">Mô tả danh mục</label>
                            <textarea name="cate_desc" class="form-control textarea-short"
                                      id="exampleInputPassword1" placeholder="Mô tả danh mục" style="margin-left: 600px">{{ $edit_value->cate_desc }}</textarea>
                        </div>
                        <button type="submit" name="update_ctg_product" class="btn btn-info"style="margin-left: 600px;font-size: 20px">Cập nhật</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
</body>

</html>
