<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <div class="page">
        <div class="page-add">
            <form action="{{ route('addproduct') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            @if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}}
						@endforeach
					</div>
					@endif
					@if(Session::has('thanhcong'))
					<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="name">id_type</label>
                    <input type="number" name="id_type">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description">
                </div>
                <div class="form-group">
                    <label for="unit_price">unit_price</label>
                    <input type="number" name="unit_price">
                </div>
                <div class="form-group">
                    <label for="promotion_price">promotion_price</label>
                    <input type="number" name="promotion_price">
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="typeB">typeB</label>
                    <input type="number" name="typeB">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">AddProduct</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>