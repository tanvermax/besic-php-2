<!-- REGISTRATION PAGE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
            font-family: Arial, sans-serif;
        }

        .register-card {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        }

        .logo {
            width: 85px;
            height: 85px;
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: auto;
            font-size: 32px;
        }

        .form-control {
            height: 55px;
            border-radius: 14px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #3b82f6;
        }

        .btn-register {
            height: 55px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            color: white;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-register:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <div class="register-card">

        <div class="logo mb-4">
            <i class="fa-solid fa-user-plus"></i>
        </div>

        <h2 class="text-center fw-bold mb-2">
            Create Account
        </h2>

        <p class="text-center text-muted mb-4">
            Join with us today
        </p>

        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter your full name">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email">
            </div>



            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Create password">
            </div>



            <button class="btn btn-register w-100 mb-4">
                Create Account
            </button>

        </form>

        <p class="text-center text-muted mb-0">
            Already have an account?
            <a href={{ route('login') }} class="fw-bold text-decoration-none">
                Login
            </a>
        </p>

    </div>

</body>

</html>