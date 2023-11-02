{{-- /*
* v_qr_code.blade.php
* Display form select menu
* @input :
* @output : หน้าจอบันทึกรายละเอียดข้อมูลตอนเข้า
* @author : Supawee Sangrapee 64160300
* @Create Date : 20023-05-04
*/ --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charmonman&family=Niramit&family=Pacifico&family=Prompt:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/soria" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="./css/test.css"> --}}
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- jQuery and DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="./css/qr_code_page.css">
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

@if(session('is_active'))
    <div class="alert alert-danger d-flex align-items-center" data-bs-delay="1000" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
            การ์ดนี้กำลังถูกใช้งานอยู่
        </div>
    </div>
@endif

<body>

<!-- Container -->
<div class="container">
    <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="bi bi-list" style="color:white; font-size:24px;"></i>
    </button>
    <form>
        <!-- @csft -->
    </form>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
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
                    <i class="bi-box-arrow-left" style="margin-right: 10%;margin-left: 5%; font-size:24px;"></i>Logout
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        {{-- QR Code --}}
        <form medthod="post" action="{{ url('addVis') }}">
        <div class="d-flex justify-content-center">
            <div class="qr_code_bg">
                <img class="qr_code_img" src="https://imgz.io/images/2023/04/04/qr_card.png" alt="qr_card.png"
                    border="0">
                <b class="b">ทำการใส่ไอดีคิวอาร์โค้ด</b>

                {{-- ID Card --}}
                <div class="id_card_box">
                    <div>
                        <img src="https://sv1.picz.in.th/images/2023/04/04/mi90ml.png" alt="qr_card_vector.png"
                            border="0" style="width: 25px; height: 25px; margin: 7px 8px 7px 9px;">
                    </div>
                    <div class="p" style="margin: -32px 12px 12px 44px">
                        <p>คิวอาร์โค้ดไอดี |</p>
                    </div>
                    <div class="p" style="margin: -40px 12px 12px 175.5px">
                        <input type="text" class="form-control form-control-underline" id="id" name="id">
                    </div>
                </div>
            </div>
        </div>

        {{--Button--}}
        <div class="d-flex justify-content-center" style="margin: 27px 10px 12px 0px">
            <a href="{{route('v_select_menu')}}">
            <button class="btn cancel_btn" type="button">ย้อนกลับ</button>
            <button class="btn next_btn" type="submit">ถัดไป</button>
            </a>
        </div>
        </form>
    </div>
</div>
</body>
</html>
