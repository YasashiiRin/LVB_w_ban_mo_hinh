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
        <p>Page Users</p>
    </div>
    <div class="page-users">
     @foreach ($get_list_user as $ur)
        <div class="list-user">
            <div class="list-item">
            <div class="list-item--info">
            <div class="info-pd">
                <div class="pd-title">
                    <p>Name</p>
                </div>
                <div class="pd-detail">
                {{$ur->full_name}}
                </div>
            </div>
            <div class="info-pd">
             <div class="pd-title">
                    <p>Email</p>
                </div>
                <div class="pd-detail">
                    {{$ur->email}}
                </div>    
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Phone</p>
                </div>
                <div class="pd-detail">
                     {{$ur->phone}}
                </div> 
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Address</p>
                </div>
                <div class="pd-detail">
                    {{$ur->address}}
                </div>     
            </div>
            <div class="info-pd">
                <div class="pd-title">
                    <p>Ngaysinh</p>
                </div>
                <div class="pd-detail">
                     {{$ur->Ngaysinh}}
                </div> 
            </div>
            <div class="info-pd">         
                <div class="pd-title">
                    <p>Password</p>
                </div>
                <div class="pd-detail">
                   {{$ur->password}}
                </div> 
            </div>
           </div>
            </div>
            <div class="active">
                <div class="update-btn btn">
                    <a href="{{ route('updateUser',$ur->id) }}"> Update </a>
                </div>
                <div class="delete-btn btn">
                     <a href="{{ route('deleteUser',$ur->id) }}"> Delete </a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="admin-btn btn">
        <i class="fa-solid fa-arrow-left" style = "color: #545454;"><a href="{{ route('admin') }}"> Admin </a></i>     
        </div>
        <div class="add-btn btn">
            <a href="{{ route('adduser') }}"> Thêm </a>
        </div>
    </div>
   </div>
</body>
</html>