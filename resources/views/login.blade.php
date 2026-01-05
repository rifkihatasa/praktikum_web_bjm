<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login | Inventaris</title>

    <!-- Fonts -->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- SB Admin 2 -->
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Modern Style -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }

        .login-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 45px rgba(0,0,0,.25);
            background: rgba(255,255,255,.96);
        }

        .login-left {
            background:
                linear-gradient(
                    rgba(78, 115, 223, 0.85),
                    rgba(34, 74, 190, 0.85)
                ),
                url('/sbadmin/login.jpeg') center / cover no-repeat;

            color: #fff;
            padding: 50px;
            text-align: center;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-left h2 {
            font-weight: 800;
            letter-spacing: 1px;
        }

        .login-left img {
            max-width: 70%;
            margin-top: 40px;
        }

        .form-control-user {
            height: 48px;
            border-radius: 50px;
            padding: 0 20px;
            font-size: 14px;
        }

        .btn-login {
            height: 48px;
            border-radius: 50px;
            font-weight: 700;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            border: none;
            transition: .3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0,0,0,.25);
        }

        .login-title {
            font-weight: 800;
            color: #4e73df;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-10 col-md-11">
            <div class="card login-card">
                <div class="row no-gutters">

                    <!-- LEFT -->
                    <div class="col-lg-6 d-none d-lg-block login-left">
                        <h2>INVENTARIS</h2>
                        <p class="mt-3">Sistem Manajemen Barang</p>
                        {{-- <img src="/sbadmin/login.jpeg" alt="Logo"> --}}
                    </div>

                    <!-- RIGHT -->
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h4 class="login-title">LOGIN AKUN</h4>
                            </div>

                            <form action="/login" method="POST">
                                @csrf

                                <div class="form-group">
                                    <input type="text"
                                           name="username"
                                           class="form-control form-control-user"
                                           placeholder="Username"
                                           required>
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                           name="password"
                                           class="form-control form-control-user"
                                           placeholder="Password"
                                           required>
                                </div>

                                <button type="submit"
                                        class="btn btn-login btn-block text-white">
                                    Masuk
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/sbadmin/js/sb-admin-2.min.js"></script>

</body>
</html>
