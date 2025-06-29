<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register Animasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }
        .bg-anim {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0; left: 0;
            z-index: 0;
            background: url('https://images.unsplash.com/photo-1749456289357-4e5cbffe9fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat;
            animation: zoomBg 10s infinite alternate;
            filter: brightness(0.7);
        }
        @keyframes zoomBg {
            0% { transform: scale(1);}
            100% { transform: scale(1.1);}
        }
        .login-container {
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="bg-anim"></div>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card login-container shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-2">Register</h2>
                        <p class="text-center text-secondary">Only Admin</p>
                        <form action={{route('register')}} method="POST">
                          @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" name='username' required value="{{old('username')}}">
                                @error('username')
                                    <p class="text-danger">{{$message   }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name='password' required>
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
