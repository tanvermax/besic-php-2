<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="/dist/output.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .users-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .user-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .user-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .delete-btton {
            background-color: #ed7d7d;
            padding: 10px;
            border-radius: 10px;
            border: 1px;
            color: #f5f7fa;
        }

        .user-body {
            padding: 20px;
        }

        .user-info {
            margin-bottom: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .user-info strong {
            color: #667eea;
        }

        .view-btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background: #667eea;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 15px;
            transition: background 0.3s ease;
        }

        .view-btn:hover {
            background: #5a67d8;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>📱 All Users</h1>
            <p>Total Users: {{ $users->count() }}</p>
        </div>

        <div class="users-grid">
            @foreach($users as $user)
            <div class="user-card">
                <div class="user-header flex">
                    <div>
                        <h3>{{ $user->name }}</h3>
                        <small>ID: #{{ $user->id }}</small>
                    </div>
                    <button class="delete-btton">delete</button>
                </div>
                <div class="user-body">
                    <div class="user-info">
                        <strong>📧 Email:</strong> {{ $user->email }}
                    </div>
                    @if($user->info)
                    <div class="user-info">
                        <strong>📍 Address:</strong> {{ $user->info->address }}
                    </div>
                    <div class="user-info">
                        <strong>📞 Phone:</strong> {{ $user->info->phone }}
                    </div>
                    <div class="user-info">
                        <strong>zip-code:</strong> {{ $user->info->zip_code ?? "null" }}
                    </div>
                    @else
                    <div class="user-info">
                        <em>No additional information</em>
                    </div>
                    @endif
                    <div class="flex">
                        <a
                            class="view-btn">
                            View Details →
                        </a>
                        <a


                            class="view-btn">
                            edit →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>