<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fb;
        }

        .sidebar{
            height:100vh;
            background:#212529;
            padding:20px;
            
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            margin:15px 0;
            padding:10px;
            border-radius:8px;
        }

        .sidebar a:hover{
            background:#0d6efd;
        }

        .card-box{
            padding:20px;
            border-radius:12px;
            color:white;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">

            <h3 class="text-white">Dashboard</h3>
            <hr class="text-white">

            <a href="/dashboard">Dashboard</a>
            <a href="/home">Home</a>
            <a href="/products/create">Add Product</a>
            <a href="/users">Users</a>
            <a href="/settings">Settings</a>

        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>