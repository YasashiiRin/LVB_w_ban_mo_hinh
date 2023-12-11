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
        <p>Page Order</p>
    </div>
    <div class="page-users">
     @foreach ($get_list_order as $lod)
            <div class="list-user">
            <div class="list-item">
           <div class="list-item--info">
            <div class="info-pd">
                <div class="pd-title">
                    <p>ID Customer</p>
                </div>
                <div class="pd-detail">
                   {{$lod->id_customer}}
                   {{$lod->id}}
                </div>
            </div>
            <div class="info-pd">
            <div class="pd-title">
                    <p>Date-order</p>
                </div>
                <div class="pd-detail">
                   {{$lod->date_order}}
                </div>    
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Total</p>
                </div>
                <div class="pd-detail">
                  {{$lod->total}}
                </div> 
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Payment</p>
                </div>
                <div class="pd-detail">
                 {{$lod->payment}}
                </div>     
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Note</p>
                </div>
                <div class="pd-detail">
                {{$lod->note}}
                </div> 
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>State</p>
                </div>
                <div class="pd-detail">
                {{$lod->State}}
                </div> 
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Name Customer</p>
                </div>
                <div class="pd-detail">
                @foreach ($get_list_customer as $cus)
                @if($lod->id_customer== $cus->id)
                {{$cus->name}}
                @endif
                @endforeach
                </div>     
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>address Customer</p>
                </div>
                <div class="pd-detail">
                @foreach ($get_list_customer as $cus)
                @if($lod->id_customer== $cus->id)
                {{$cus->address}}
                @endif
                @endforeach
                </div>     
            </div>

           </div>
            </div>
            <div class="active">
                <div class="update-btn btn">
                   <a href="{{ route('updateOrder', ['id' => $lod->id_customer]) }}"> Update </a>
                </div>
                <div class="delete-btn btn">
                     <a href="{{ route('deleteOrder',$lod->id) }}"> Delete </a>
                </div>
                <div class="delete-btn btn">
                     <a href="{{ route('changeStateOrder',$lod->id) }}"> Status change </a>
                </div>
            </div>
            </div>
        @endforeach
        <div class="admin-btn btn">
        <i class="fa-solid fa-arrow-left" style = "color: #545454;"><a href="{{ route('admin') }}"> Admin </a></i>     
        </div>
        <div class="add-btn btn">
            <a href="{{ route('getaddOrder') }}"> Thêm </a>
        </div>
    </div>
   </div>
</body>
</html>