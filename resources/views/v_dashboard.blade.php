{{-- /*
* v_dashboard.blade.php
* Display report data summary
* @input : -
* @output : Display of v_dashboard.blade.php
* @author : Kanokpol Promtha 64160267
* @Create Date : 2023-09-04
*/ --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div class="container">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charmonman&family=Niramit&family=Pacifico&family=Prompt:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/soria" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/test.css">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- jQuery and DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <title>Dashboad</title>
    {{-- HEader --}}
</head>

<style>
    #banner_1 {
        background: rgb(61, 134, 236);
        border-radius: 25px;
        color: #ffffff;
        background-image: url("https://cdn.discordapp.com/attachments/1042099329952911361/1093382492582596648/image.png");
        font-family: 'Prompt', sans-serif;
        box-shadow: 0px 6px 0px #89B6FB;
    }

    .img-banner {
        width: 130px;
        margin: 5%;
    }

    h1 {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 2px;
        font-weight: 800;
        font-size: 50px;
    }

    h3 {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 2px;
        font-size: 20px;
        margin: 2% 2% 2% 2%;
    }

    h2 {
        font-family: 'Prompt', sans-serif;
        font-size: 23px;
        font-weight: 800;
        letter-spacing: 2px;
        margin: 2% 2% 2% 2%;
    }

    h4 {
        font-family: 'Soria', sans-serif;
    }



    .p_time {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 2px;
        font-size: 56px;
        margin: 2% 2% 2% 2%;
        font-weight: 800;
    }

    .p_date {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 2px;
        font-size: 20px;
        margin: 2% 2% 2% 2%;
        font-weight: 100;
    }

    .p_temp {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 1px;
        font-size: 30px;
        margin: 2% 2% 2% 2%;
        font-weight: 500;
        margin-top: -10%;
        margin-bottom: 0%;
    }

    .p_des {
        font-family: 'Prompt', sans-serif;
        letter-spacing: 1px;
        font-size: 15px;
        margin: 2% 2% 2% 2%;
        font-weight: 500;
    }

    .img_margin {
        margin: -20% 2% 2% 2%;
    }

    #banner_2 {
        background: #E2E2E2;
        border-radius: 25px;
        color: #565555;
        font-family: 'Prompt', sans-serif;
        column-rule: inset 2px #ffffff;

    }

    #grid {
        display: grid;
        height: 100px;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 500px;
        column-gap: 20px;
    }

    #grid>div {
        margin-top: 20pX;
        border-radius: 25px;
        background: rgb(61, 134, 236);
    }

    #color_head {
        color: white;
    }

    #time {
        color: #565555;
    }

    #date {
        color: #565555;
        font-weight: bold;
    }

    #weather {
        color: #565555;
    }

    #day {
        color: #565555;
    }

    #row_pos {
        column-rule: black;
    }

    #rule_1 {
        border-right-color: #ffffff;
        border-radius: 1%;
        border-right: 5px solid #f4f4f4;
    }

    #font_value {
        font-size: 40px;
        font-family: 'Prompt', sans-serif;
        color: #565555;
    }

    @import url('https://fonts.cdnfonts.com/css/soria');

    .bi {
        color: black;
        margin: auto;
    }

    .nav-name {
        color: black;
        padding-top: 9.5px;
        padding-right: 10px;
        font-weight: bold;
        font-size: 24px;
        font-family: 'Soria', sans-serif;
    }

    .v-logo {
        text-align: center;
        font-weight: normal;
        font-family: 'Soria', sans-serif;
        font-style: normal;
        font-size: 70px;
        line-height: 24px;
        color: #11336B;
    }

    .v-name {
        padding: 5px;
        font-family: 'Soria', sans-serif;
        font-style: normal;
        font-size: 16px;
        line-height: 12px;
        background: #11336B;
        color: white;
        margin-left: 30%;
        margin-right: 30% !important;
        margin-top: 2% !important;
    }

    .link-logout {
        font-weight: bold;
        font-size: 24px;
        color: #11336B;
        font-family: 'Soria', sans-serif;
        font-style: normal;
        margin-right: 10%;
    }

    .btn-menu {
        display: none;
        border: unset;
        background-color: #11336B !important;
        border-radius: 5px;
        color: white;
        position: fixed;
        top: 10px;
        right: 10px;
    }

    .btn-menu2 {
        /* display: none; */
        border: unset;
        background-color: #11336B !important;
        border-radius: 5px 0px 0px 5px;
        color: white;
        padding-right: 3% !important;
    }

    .btn-dropdown {
        border: unset;
        background-color: #11336B !important;
        color: white;
        border-radius: 0px 5px 5px 0px;
    }

    a:link {
        text-decoration: none;
    }

    .sidebar-logout {
        background-color: white;
        color: black;
        font-size: 22px;
        height: 4rem;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
    }

    .sidebar-logout:hover,
    .sidebar-logout:active {
        background-color: #11336B;
        color: white;
    }

    .sidebar-header {
        text-align: left;
        display: flex;
        align-items: center;
        width: 60%
    }

    .sidebar-nameuser {
        font-size: 16px;
    }

    @media(max-width: 768px) {
        .header-name {
            display: none;
        }

        .btn-menu {
            display: block;
        }
    }

    @media(max-width: 413px) {
        .v-name {
            font-size: 16px !important;
            margin-left: 10%;
            margin-right: 10% !important;
        }
    }
</style>

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
<div class="container" id="banner_1">
    <div class="row align-items-center">
        <div class="col-12 col-md-2 text-center mb-3 mb-md-0">
            <img src="https://sv1.picz.in.th/images/2023/04/07/mO4CZZ.png" class="img-fluid" style="width: 50%">
        </div>
        <div class="col-12 col-md-5 mb-3 mb-md-0">
            <div class="text-left px-3">
                <h1>ภาพรวมของระบบ</h1>
                <h2>แสดงภาพรวมของระบบ</h2>
            </div>
        </div>
        <div class="col-12 col-md-2 text-center">
        </div>
        <div class="col-12 col-md-3 text-center" style="padding: 10px">
            <a href='/v_detail_visitor'>
                <input type="image"
                       src="https://cdn.discordapp.com/attachments/1042099329952911361/1093373330909835264/image.png"
                       alt="Submit" class="img-fluid" style="width: 50%">
            </a>
        </div>
    </div>
</div>

<!-- อันนี้แบนแนอร์นะ -->
<div class="container" id="banner_2" style="margin-top: 30px;">
    <div class="row" id="">
        <!-- เวลา -->
        <div class="col-4 col-sm" id="rule_1">
            <h2>ประเทศไทย</h2>
            <p class="p_time" id="time"></p>
            <script>
                function updateTime() {
                    var now = new Date();
                    var hours = now.getHours();
                    var minutes = now.getMinutes();
                    var seconds = now.getSeconds();
                    var ampm = hours >= 12 ? 'PM' : 'AM'; // check if it's afternoon or morning

                    // convert to 12-hour format
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'

                    // add leading zeroes to minutes and seconds
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    seconds = seconds < 10 ? '0' + seconds : seconds;

                    // display the time
                    var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
                    document.getElementById('time').innerHTML = timeString;
                }

                updateTime();
                setInterval(updateTime, 1000); // update the time every second
            </script>
        </div>

        <!-- วันที่ -->
        <div class="col-3 col-sm" id="rule_1">
            <h2 style="margin-top: 13px;">วันนี้</h2>
            <p class="p_date" id="date"
               style="font-size: 30px; margin-top :30px; font-family: 'Prompt', sans-serif;"></p>
            <script>
                function updateDate() {
                    var now = new Date();
                    var date = now.getDate();
                    var month = now.getMonth() + 1; // months are zero-indexed
                    var year = now.getFullYear();

                    // add leading zeroes to month and date
                    month = month < 10 ? '0' + month : month;
                    date = date < 10 ? '0' + date : date;

                    // display the date
                    var dateString = year + '-' + month + '-' + date;
                    document.getElementById('date').innerHTML = dateString;
                }

                updateDate();
            </script>
        </div>

        <!-- สภาพอากาศ -->
        <div class="col-5 col-sm" id="weather">

            <div class="col-12-sm-9">
                <h2>สภาพอากาศ : จังหวัด ชลบุรี</h2>
                <div class="row" id="row_pos" style="margin-top: 30px;">
                    <div class="col-8 col-sm-6">
                        <img class="img_margin" id="weather-icon" alt="weather icon" width="120">
                    </div>
                    <div class="col-4 col-sm-6">
                        <div>
                            <p class="p_temp" id="temperature"></p>
                            <p class="p_des" id="description"></p>
                        </div>

                    </div>
                </div>

                {{-- รับค่าสภาพอากาศ --}}
                <script>
                    const api_key = 'd0ccf51af7d4289f818a43cdfea5f4f3';
                    const city = 'Chonburi'; // replace with your desired city
                    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${api_key}&units=metric`;
                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            const temperature = data.main.temp;
                            const description = data.weather[0].description;
                            const humidity = data.main.humidity;
                            const iconCode = data.weather[0].icon;
                            const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;

                            const temperatureElement = document.getElementById('temperature');
                            temperatureElement.innerText = `${temperature}°C`;

                            const descriptionElement = document.getElementById('description');
                            descriptionElement.innerText = `${description}`;


                            const iconElement = document.getElementById('weather-icon');
                            iconElement.src = iconUrl;
                            iconElement.alt = description;
                        })
                        .catch(error => console.error(error));
                </script>
            </div>

        </div>

    </div>
</div>

{{-- pie chat --}}
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-4">
            <script>
                window.onload = function() {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        title: {
                            text: "จำนวนที่เข้ามาติดต่อ",
                            horizontalAlign: "left"
                        },
                        data: [{
                            type: "doughnut",
                            startAngle: 60,
                            //innerRadius: 60,
                            indexLabelFontSize: 8.5,
                            indexLabel: "{label} - #percent%",
                            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                            dataPoints: [{
                                y: {{$roleCount}},
                                label: "คืนบัตรเเล้ว"
                            },
                                {
                                    y: {{$roleCount}},
                                    label: "อยู่ด้านใน"
                                },
                                {
                                    y: {{$roleCount}},
                                    label: "เกิน 6 ชั่วโมง"
                                },
                                {
                                    y: {{$roleCount}},
                                    label: "ระบุหมายเหตุ"
                                }
                            ]
                        }]
                    });
                    chart.render();

                }
            </script>
            <div id="chartContainer" style="height: 370px; width: 100%; font-family: 'Soria', sans-serif;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
        {{-- report visitor --}}
        <div class="col-8">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-5 sm-3"
                             style="background: #E2E2E2; border-radius: 25px; margin-bottom:3%;margin-right:3%;">
                            <div style="height: 150px; margin-top:5%; font-family: 'Prompt', sans-serif;">
                                <i class="bi bi-circle-fill" style="color: #2462c0"></i>
                                คืนบัตรเเล้ว
                                {{--  --}}
                                <div id="font_value">
                                    {{$roleCount}} คน<img
                                        src="https://cdn.discordapp.com/attachments/1042099329952911361/1093952798640582686/image.png"
                                        width="110px" />
                                </div>
                            </div>

                        </div>
                        <div class="col-5 sm-3"
                             style="background:#E2E2E2; border-radius: 25px;  margin-bottom:3%; ">
                            <div style="height: 150px; margin-top:5%; font-family: 'Prompt', sans-serif;">
                                <i class="bi bi-circle-fill" style="color: #c01212c8"></i>
                                กำลังอยู่ด้านใน
                                {{--  --}}

                                <div id="font_value" style="padding-top: 6%">
                                    {{$roleCount}} คน <img
                                        src="https://cdn.discordapp.com/attachments/1042099329952911361/1093952847730704414/image.png"
                                        width="90px" />
                                </div>
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-5 sm-3" style="background:#E2E2E2; border-radius: 25px; margin-right:3%;">
                            <div style="height: 150px; margin-top:5%; font-family: 'Prompt', sans-serif;">
                                <i class="bi bi-circle-fill" style="color: #7a9b33e2"></i>
                                เกิน 6 ชั่วโมง
                                <div style="font-size: 40px">
                                    {{$roleCount}} คน <img
                                        src="https://cdn.discordapp.com/attachments/1042099329952911361/1093952912427847741/image.png"
                                        width="90px" />
                                </div>
                            </div>
                        </div>
                        <div class="col-5 sm-3" style="background:#E2E2E2; border-radius: 25px;">
                            <div style="height: 150px; margin-top:5%; font-family: 'Prompt', sans-serif;">
                                <i class="bi bi-circle-fill" style="color: #1c8488"></i>
                                ระบุหมายเหตุ
                                {{--  --}}
                                <div id="font_value">
                                    {{$roleCount}} คน <img
                                        src="https://cdn.discordapp.com/attachments/1042099329952911361/1093952943885123634/image.png"
                                        width="90px" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4"style="background: #6AA6FF; border-radius: 25px;">
                    <div class="row">
                        <div
                            style="height: 150px; font-family: 'Prompt', sans-serif; color: white; font-size:18px">
                            มีการดำเนินการเข้ามาติดต่อเเล้ว
                            <div style="color: #ffffff; font-size:40px;">
                                {{$roleCount}} คน <img
                                    src="https://cdn.discordapp.com/attachments/1042099329952911361/1093951678534922250/image.png"
                                    width=120%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
