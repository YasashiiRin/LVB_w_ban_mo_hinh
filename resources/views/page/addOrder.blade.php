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
            <form action="{{ route('postaddOrder') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>--------------------AddCustomer--------------------</p>
            <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="typeB">gender</label>
                    <input type="text" name="gender">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address">
                </div>
                <div class="form-group">
                    <label for="phone_number">phone_number</label>
                    <input type="number" name="phone_number">
                </div>
                <div class="form-group">
                    <label for="note">note</label>
                    <input type="text" name="note">
                </div>
                <p>--------------------Addbill--------------------</p>
                <div class="form-group">
                    <label for="total">total</label>
                    <input type="number" name="total">
                </div>
                <div class="form-group">
                    <label for="payment">payment</label>
                    <input type="text" name="payment">
                </div>
                <div class="form-group">
                    <label for="note">note</label>
                    <input type="text" name="note">
                </div>
                <p>--------------------AdddetailBill--------------------</p>
                <div class="form-group">
                    <label for="id_product">id_product</label>
                    <input type="number" name="id_product">
                </div>
                <div class="form-group">
                    <label for="quantity">quantity</label>
                    <input type="number" name="quantity">
                </div>
                <div class="form-group">
                    <label for="unit_price">unit_price</label>
                    <input type="number" name="unit_price">
                </div>               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">AddProduct</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>