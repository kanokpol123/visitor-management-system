{{-- /*
    * v_select_menu.blade.php
    * Display form select record menu by security guard
    * @input : -
    * @output : Display of v_qr_code.blade.php
    * @author : Sukunya Phimtikho 64160173
    * @Create Date : 2023-04-04
*/ --}}

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/select_menu.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<!--  Header  -->

<header class="d-flex flex-wrap justify-content-center py-3 mb-4">
    <div class="row" style="width: 100%">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sys-name" align="center">
            <div class="row" align="center">
                <h4 class="mt-1 v-logo"> VMS </h4>
            </div>
            <div class="row" style="width: 100%;">
                <div>
                    <h4 class="mt-1 v-name"> Visitor Management System </h4>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 header-name">
            <div class="col-12" style="text-align: right;">
                <i class="bi bi-person-circle" id="bi-icon"></i>
                <span class="nav-name"> TEST</span>
                <a href="/" class="link-logout">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</header>

<body>
<div class="container">
    <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions">
        <i class="bi bi-list" style="color:white; font-size:24px;"></i>
    </button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
         aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header" style="border-bottom: 1px solid;">
            <div class="sidebar-header">
                <i style="font-size:30px;  font-weight:600;" class="bi bi-person-circle" id="bi-icon"></i>
                <span class="sidebar-nameuser">Nitiphum Sumpunnang</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="background-color:#333F4C;">
                <div class="sidebar-logout">
                    <i class="bi-box-arrow-left"
                       style="margin-right: 10%;margin-left: 5%; font-size:24px;"></i>Logout
                </div>
            </div>
        </div>
    </div>


    {{-- container  --}}
    <div class="box">
        <div class="row align-items-center" style="width:100%; margin:none;">
            <div class="container head"> เลือกเมนูที่ต้องการ
                <img class="m-guard" src="https://sv1.picz.in.th/images/2023/04/04/mgumSv.png">
            </div>
        </div><br>

        <div class="container text-center">
            <div class="row d-flex justify-content-center" id="r-bt">
                <div class="col-6 col-sm-6" align="right">

                    {{-- button IN --}}
                    <section button1 type="button">

                        <a href="/qr_code" class="btn btn-outline-dark enlarge">
                            <br>
                        <h1 class="b-name">เพิ่มผู้มาติดต่อใหม่</h1>
                        <h2>คลิกทีปุ่มเพื่อเพิ่มผู้ติดต่อใหม่</h2>
                        <div class="row g-input">
                            <img src="https://media.discordapp.net/attachments/1085800512106016790/1093730064228700230/gifgit_2.gif?width=1246&height=701"
                                 width="100%">
                        </div>
                        <i class="bi bi-plus-square-fill bi-icon"></i>
                        </a>
                    </section>

                </div>

                {{-- button OUT --}}
                <div class="col-6 col-sm-6" id="b-exit">
                    <section button1 type="button" class="btn btn-outline-dark enlarge">
                        <br>
                        <h1 class="b-name">คืนบัตร</h1>
                        <h2>กดที่นี่สำหรับผู้มาติดต่อคืนบัตร</h2>
                        <div class="row g-output">
                            <img src="https://media.discordapp.net/attachments/1085800512106016790/1093730028539346995/gifgit.gif?width=1246&height=701"
                                 width="100%">
                        </div>
                        <i class="bi bi-arrow-90deg-up bi-icon" id="arrow"></i>
                    </section>
                </div>
            </div>
            {{-- <form action="{{ route('v_select_menu') }}" method="POST">
    @csrf

</form> --}}
        </div>

    </div>
</body>

</html>
