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
            <form action="{{ route('postupdateOrder') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" value="{{$get_list_cus->name}}">
                    <input type="text" hidden name="id" value="{{$get_list_cus->id}}">
                </div>
                <div class="form-group">
                    <label for="typeB">gender</label>
                    <input type="text" name="gender" value="{{$get_list_cus->gender}}">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" value="{{$get_list_cus->email}}">
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" value="{{$get_list_cus->address}}">
                </div>
                <div class="form-group">
                    <label for="phone_number">phone_number</label>
                    <input type="number" name="phone_number" value="{{$get_list_cus->phone_number}}">
                </div>
                <div class="form-group">
                    <label for="note">note</label>
                    <input type="text" name="note" value="{{$get_list_cus->note}}">
                </div>
                <div class="form-group">
                    <label for="note">State</label>
                    <input type="text" name="State" value="{{$get_list_bill->State}}">
                    <input type="text" hidden name="idbill" value="{{$get_list_bill->id}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">UpdateOrder</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>