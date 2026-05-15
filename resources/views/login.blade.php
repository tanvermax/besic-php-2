<!-- LOGIN PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        body{
            min-height:100vh;
            background: linear-gradient(135deg,#4f46e5,#7c3aed);
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial, sans-serif;
        }

        .auth-card{
            width:100%;
            max-width:420px;
            background:white;
            border-radius:24px;
            padding:40px;
            box-shadow:0 20px 60px rgba(0,0,0,0.2);
        }

        .logo{
            width:80px;
            height:80px;
            background:linear-gradient(135deg,#4f46e5,#7c3aed);
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            border-radius:50%;
            margin:auto;
            font-size:30px;
        }

        .form-control{
            height:55px;
            border-radius:14px;
            border:1px solid #ddd;
        }

        .form-control:focus{
            box-shadow:none;
            border-color:#4f46e5;
        }

        .btn-login{
            height:55px;
            border:none;
            border-radius:14px;
            background:linear-gradient(135deg,#4f46e5,#7c3aed);
            color:white;
            font-weight:600;
            transition:0.3s;
        }

        .btn-login:hover{
            transform:translateY(-2px);
        }

        .social-btn{
            width:50px;
            height:50px;
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            border:1px solid #ddd;
            background:white;
            transition:0.3s;
        }

        .social-btn:hover{
            background:#f5f5f5;
        }
    </style>
</head>
<body>

    <div class="auth-card">

        <div class="logo mb-4">
            <i class="fa-solid fa-user"></i>
        </div>

        <h2 class="text-center fw-bold mb-2">Welcome Back</h2>

        <p class="text-center text-muted mb-4">
            Login to continue
        </p>

        <form action={{ route('authenticate') }} method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Email Address
                </label>

                <input 
                    type="email" 
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                >
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Password
                </label>

                <input 
                    type="password" 
                    name="password"
                    class="form-control"
                    placeholder="Enter your password"
                >
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div>
                    <input type="checkbox">
                    Remember me
                </div>

                <a href="#" class="text-decoration-none">
                    Forgot Password?
                </a>
            </div>

            <button class="btn btn-login w-100 mb-4">
                Login
            </button>

        </form>

        <div class="text-center mb-4">
            <span class="text-muted">or continue with</span>
        </div>

        <div class="d-flex justify-content-center gap-3 mb-4">

            <a href="#" class="social-btn">
                <i class="fab fa-google"></i>
            </a>

            <a href="#" class="social-btn">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="#" class="social-btn">
                <i class="fab fa-github"></i>
            </a>

        </div>

        <p class="text-center text-muted mb-0">
            Don't have an account?
            <a href={{ route('registration') }} class="fw-bold text-decoration-none">
                Register
            </a>
        </p>

    </div>

</body>
</html>