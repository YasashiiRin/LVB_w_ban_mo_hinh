<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/admin_style.css">
    <title>Admin</title>
</head>
<body>
    <div class="page-admin">
        <div class="title">
            <p>Manager</p>
        </div>
        <div class="page-admin-manager">
            <div class="page-admin-user" data-href="{{ route('userManagement') }}" >
                 <p>Users</p>
            </div>
            <div class="page-admin-product" data-href="{{ route('productManagement') }}">
                 <p>Products</p>
            </div>
            <div class="page-admin-order" data-href="{{ route('managementOder') }}">
                 <p>Orders</p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.page-admin-user').click(function() {
                 var url = $(this).data('href');
                 window.location.href = url;
             });
             $('.page-admin-product').click(function() {
                 var url = $(this).data('href');
                 window.location.href = url;
             });
             $('.page-admin-order').click(function() {
                 var url = $(this).data('href');
                 window.location.href = url;
             });
        });
    </script>
</body>
</html>