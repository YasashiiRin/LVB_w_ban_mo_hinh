<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/admin.css">
    <script src="https://kit.fontawesome.com/a818f1a066.js" crossorigin="anonymous"></script>
    <title>admin</title>
</head>
<body>
   <div class="page">
    <div class="title">
        <p>Page Product</p>
    </div>
    <div class="page-users">
     @foreach ($get_list_product as $pd)
            <div class="list-user">
            <div class="list-item">
           <div class="list-item--info">
            <div class="info-pd">
                <div class="pd-title">
                    <p>Name</p>
                </div>
                <div class="pd-detail">
                   {{$pd->name}}
                </div>
            </div>
            <div class="info-pd">
            <div class="pd-title">
                    <p>id_type</p>
                </div>
                <div class="pd-detail">
                   {{$pd->id_type}}
                </div>    
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>description</p>
                </div>
                <div class="pd-detail">
                  {{$pd->description}}
                </div> 
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>unit_price</p>
                </div>
                <div class="pd-detail">
                 {{$pd->unit_price}}
                </div>     
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>promotion_price</p>
                </div>
                <div class="pd-detail">
                {{$pd->promotion_price}}
                </div> 
            </div>
            <div class="info-pd">         
                <div class="pd-title">
                    <p>typeB</p>
                </div>
                <div class="pd-detail">
                     {{$pd->typeB}}
                </div> 
            </div>
           </div>
           <div class="list-item-image">
                  <div class="img-pd">
                    <img src="source/image/product/{{$pd->image}}" alt="">
                  </div>
           </div>
            </div>
            <div class="active">
                <div class="update-btn btn">
                   <a href="{{ route('updateproduct', ['id' => $pd->id]) }}"> Update </a>
                </div>
                <div class="delete-btn btn">
                     <a href="{{ route('deleteProduct',$pd->id) }}"> Delete </a>
                </div>
            </div>
            </div>
        @endforeach
        <div class="admin-btn btn">
        <i class="fa-solid fa-arrow-left" style = "color: #545454;"><a href="{{ route('admin') }}"> Admin </a></i>     
        </div>
        <div class="add-btn btn">
            <a href="{{ route('addproduct') }}"> Thêm </a>
        </div>
    </div>
   </div>
</body>
</html>