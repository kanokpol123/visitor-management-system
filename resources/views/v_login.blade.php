{{-- /*
* v_login.blade.php
* Login by username and password.
* @input:
* @output:
* @author: Pisit Namsiri 64160168
* @Create Date: 2023-02-04;
*/ --}}
{{-- /*
* v_login.blade.php
* Make responsive.
* @input:
* @output:
* @author: Pracharapon Pholprasert 64160068
* @Create Date: 2023-04-04;
*/ --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charmonman&family=Niramit&family=Pacifico&family=Prompt:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/soria" rel="stylesheet">

    <link rel="stylesheet" href="./css/login_css.css">

</head>

<body class="body" style="background-color: #F9F4F4">
    <div class="d-flex align-items-center vh-100" style="width: 100%;">
        <div class="container-lg d-flex justify-content-center">
            {{-- Login Card --}}
            <div class="shadow p-3 mb-5 bg-body">
                <div class="row" style="margin: 10px">
                    {{-- Login Form Column --}}
                    <div class="col-md-6 justify-content-center col-input">

                        <div class="row">
                            {{-- System Logo Row --}}
                            <div class="p-2">
                                <h4 class="card-title mt-2 mb-2" id="vms"> VMS </h4>
                            </div>
                            <div class="p-1">
                                <h4 class="card-title mt-1 mb-1 card-name"> Visitor Management System </h4>
                                <hr>
                            </div>
                            {{-- Login Header Row --}}
                            <div class="p-2">
                                <h5 class="card-title mb-1" id="logintxt" style="font-family: 'Prompt', sans-serif">
                                    เข้าสู่ระบบ</h5>
                                <h5 class="card-title" id="infortxt">กรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h5>
                            </div>
                            {{-- Login Form --}}
                            <div class="p-2">
                                {{-- <form action="{{ url(config('app.url').'login') }}" method="post"> --}}
                                <form action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control form-control-underline"
                                            name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-underline"
                                            name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary d-inline-block form-control"
                                        style="background-color: #11336B; margin-bottom: 40px; margin-top: 20px; font-family: 'Prompt', sans-serif">เข้าสู่ระบบ</button>
                                </form>
                            </div>
                            {{-- Copyright Row --}}
                            <div class="p-2 row">
                                <div class="col-sm-2">
                                    <img src="https://media.discordapp.net/attachments/1089119082206482502/1092106573855342652/logossg.png"
                                        class="card-img-top card-logo" alt="">
                                </div>
                                <div class="col-sm-10" style="padding-top: 5px;">
                                    <div class="p" id="copyrighttxt">
                                        Copyright
                                        Ⓒ security smart guard
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Login Picture Column --}}
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="https://media.discordapp.net/attachments/1089119082206482502/1092104886830772275/img.png?width=751&height=701"
                                    class="card-img-top" t="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
