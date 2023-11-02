{{-- /*
* v_add_new_visitor.blade.php
* @input : -
* @output : Display of v_add_new_visitor.blade.php
* @author : Autchai Sea-Pan 64160293
* @Create Date : 2023-09-04
*/ --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/visitor_style.css" />
    <script src="js/script.js" defer></script>
    <title>เพิ่มผู้ติดต่อใหม่</title>
</head>
<style>
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
        position:fixed;
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

    .sidebar-logout:hover , .sidebar-logout:active{
        background-color: #11336B;
        color: white;
    }

    .sidebar-header{
        text-align:left;
        display: flex;
        align-items: center;
        width:60%
    }

    .sidebar-nameuser{
        font-size:16px;
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
<body>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="d-flex justify-content-center">
    <div class="col-5 p-2">
        <form method="POST" action="/add" class="form">
            @csrf
            <section>
                <div class="p-3">
                    <h4 class="text-center">ผู้มาติดต่อใหม่</h4>
                    <!-- Progress bar -->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step progress-step-active" data-title="รายชื่อ"></div>
                        <div class="progress-step" data-title="รายละเอียด"></div>
                        <div class="progress-step" data-title="พาหนะ"></div>
                        <div class="progress-step" data-title="ยืนยัน"></div>
                    </div>
                </div>
            </section>

            <!-- รายชื่อผู้มาติดต่อ -->


            <div class="form-step form-step-active">
                <div class="fs-cover">
                    <div class="row">
                        <div class="col">
                            <h2 class="fs-title">รายชื่อผู้มาติดต่อ</h2>
                            <h3 class="fs-subtitle">กรุณาให้ผู้ติดต่อทำการเสียบบัตรเพื่อเพิ่มข้อมูล</h3>
                        </div>

                        <div class="col">
                            <img src="https://s2.gifyu.com/images/card-gif.gif" width="200px" height="200px"
                                 class="img-fluid cover_image" alt="Responsive image" border="0" />
                        </div>
                    </div>
                </div>

                <div class="qr-cover">
                    <img src="https://sv1.picz.in.th/images/2023/04/04/mi90ml.png" alt="qr_card_vector.png"
                         border="0" style="width: 10px; height: 10px;"> คิวอาร์โค๊ดไอดี | ID-{{$id}}
                </div>

                <!-- ฟอร์มกรอกรายชื่อ-->
                <div>


                    <!-- เเสดงรูปภาพตัวอย่าง ภาพหน้าตรง -->
                    <div class="d-flex justify-content-md-center p-3">
                        <img src="https://sv1.picz.in.th/images/2023/04/09/mDzKsy.jpg" border=1 class="preview" id="imagePreview" width="148px" height="178px">
                    </div>

                    <!-- รับรูปภาพจาก Clipboard API -->
                    <div class="p-2">
                        <input class="form-control" type="file" name="myFile" id="myFile">
                    </div>

                    <!-- กรอกหมายเลขบัตรประชาชน -->
                    <div class="col p-2">
                        <label for="username">เลขบัตรประชาชน</label>
                        <input class="form-control" type="text" name="number" id="number" />
                        <span id="number-error"></span>
                    </div>

                    <!-- กรอกชื่อ -->
                    <div class="row p-2">
                        <!-- กรอกคำนำหน้า -->
                        <div class="col-2">
                            <label for="my-input">คำนำหน้า</label>
                            <input class="form-control" type="text" name="my-input" id="my-input" />
                            <span id="my-input-error"></span>
                        </div>

                        <!-- กรอกชื่อจริง -->
                        <div class="col">
                            <label for="firstname">ชื่อ</label>
                            <input class="form-control" type="text" name="firstname" id="firstname" />
                            <span id="firstname-error"></span>
                        </div>

                        <!-- กรอกนามสกุล -->
                        <div class="col">
                            <label for="lastanme">นามสกุล</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" />
                            <span id="lastname-error"></span>
                        </div>
                    </div>


                    <div class="row p-2">

                        <!-- กรอกวันเกิด -->
                        <div class="col">
                            <label for="datepicker">วันเกิด</label>
                            <input class="form-control" type="text" name="datepicker" id="datepicker" />
                            <span id="datepicker-error"></span>
                        </div>

                        <!-- กรอกศาสนา -->
                        <div class="col">
                            <label for="religion">ศาสนา</label>
                            <input class="form-control" type="text" name="religion" id="religion" />
                            <span id="religion-error"></span>
                        </div>
                    </div>

                    <!-- กรอกที่อยู่ -->
                    <div class="form-group p-2">
                        <label for="address">ที่อยู่</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                        <span id="address-error"></span>
                    </div>

                    <!-- ปุ่มเพิ่มข้อมูล -->
                    <div class="p-2">
                        <input class="form-control btn-success" type="reset" name="add" id="add"
                               value="＋ เพิ่มข้อมูล" onclick="callAddSetPreview()">
                    </div>

                    <!-- กล่องเเจ้งเตือน -->
                    <div id="add-alert" role="alert">
                    </div>

                    <!-- ตารางข้อมูล -->
                    <table id="tbl" class="table" border="1">
                        <tr>
                            <td><strong>หมายเลขบัตรประชาชน</strong></td>
                            <td><strong>ชื่อจริง</strong></td>
                            <td><strong>นามสกุล</strong></td>
                        </tr>
                    </table>

                    <!-- ปุ่มถัดไป -->
                    <div class="">
                        <a href="#" class="btn btn-next width-50 ml-auto">ถัดไป</a>
                    </div>

                </div>
            </div>

            <!-- รายละเอียด -->
            <div class="form-step">
                <div class="fs-cover">
                    <div class="row">
                        <div class="col">
                            <h2 class="fs-title">รายละเอียด</h2>
                            <h3 class="fs-subtitle"> กรอกรายละเอียดผู้ที่มาติดต่อเพื่อใช้เป็นหลักฐาน</h3>
                        </div>

                        <div class="col">
                            <img src="https://s10.gifyu.com/images/gifgit-2-2.gif" width="200px" height="200px"
                                 class="img-fluid cover_image" alt="Responsive image" border="0" />
                        </div>
                    </div>
                </div>

                <div class="qr-cover">
                    <img src="https://sv1.picz.in.th/images/2023/04/04/mi90ml.png" alt="qr_card_vector.png"
                         border="0" style="width: 10px; height: 10px;"> คิวอาร์โค๊ดไอดี | ID-{{$id}}
                </div>

                <div>
                    <div class="p-2">
                        <label for="company_name">ชื่อบริษัท</label>
                        <input class="form-control" type="text" name="company_name" id="company_name" />
                    </div>

                    <div class="p-2">
                        <label for="contact_name">ชื่อผู้รับการติดต่อ</label>
                        <input class="form-control" type="text" name="contact_name" id="contact_name" />
                    </div>

                    <div class="p-2">
                        <label for="telephone">เบอร์โทรศัพท์</label>
                        <input class="form-control" type="text" name="telephone" id="telephone" />
                    </div>

                    <div class="p-2">
                        <label for="purpose">จุดประสงค์</label>
                        <input class="form-control" type="text" name="purpose" id="purpose"></textarea>
                    </div>

                    <div class="btns-group">
                        <a href="#" class="btn btn-prev">ย้อนกลับ</a>
                        <a href="#" class="btn btn-next">ถัดไป</a>
                    </div>
                </div>
            </div>


            <div class="form-step">
                <div class="fs-cover">
                    <div class="row">
                        <div class="col">
                            <h2 class="fs-title">พาหนะ</h2>
                            <h3 class="fs-subtitle">กรอกข้อมูลเบื้องต้นของยานพาหนะที่ผู้ติดต่อใช้</h3>
                        </div>

                        <div class="col">
                            <img src="https://s10.gifyu.com/images/car-1.gif" width="200px" height="200px"
                                 class="img-fluid cover_image" alt="Responsive image" border="0" />
                        </div>
                    </div>
                </div>

                <div class="qr-cover">
                    <img src="https://sv1.picz.in.th/images/2023/04/04/mi90ml.png" alt="qr_card_vector.png"
                         border="0" style="width: 10px; height: 10px;"> คิวอาร์โค๊ดไอดี | ID-{{$id}}
                </div>

                <div class="p-2">
                    <label for="car_type">ชนิด</label>
                    <input class="form-control" type="text" name="car_type" id="car_type" />
                </div>

                <div class="p-2">
                    <label for="brand">ยี่ห่อรถ</label>
                    <input class="form-control" type="text" name="brand" id="brand" />
                </div>

                <div class="p-2">
                    <label for="color">สีรถ</label>
                    <input class="form-control" type="text" name="color" id="color" />
                </div>

                <div class="p-2">
                    <label for="license_plate" rows="4">ทะเบียนรถ</label>
                    <input class="form-control" type="text" name="license_plate" id="license_plate" />
                </div>

                <div class="btns-group">
                    <a href="#" class="btn btn-prev">ย้อนกลับ</a>
                    <a href="#" class="btn btn-next">ถัดไป</a>
                </div>
            </div>


            <div class="form-step">
                <div class="d-flex justify-content-center p-2">
                    <div class="row">
                        <div class="col">
                            <img class="guard_img" src="https://sv1.picz.in.th/images/2023/04/07/mOVa7E.png"
                                 height="324px" width="241px">
                        </div>
                        <div class="col">
                            ต้องการที่จะยืนยันการดำเนินการเเละ<strong>บันทึก</strong>ข้อมูลหรือไม่?
                            <div>
                            </div>
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">ย้อนกลับ</a>
                            <!-- <input type="submit" value="Submit" class="btn" onclick="send_data()" /> -->
                            <button type="button" class="btn" onclick="send_data()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            </section>
            </section>
        </form>
    </div>
</div>
</div>


</body>

<script>
    var count_visitor = 0;
    var visitor_array = [];
    let json_visitor_array;
</script>

<script>
    function callAddSetPreview() {
        clearPreviewImage();
        addVisitor();
        save_visitor();
    }
</script>


<script>
    function save_visitor() {
        let data = {
            'number': $("#number").val(),
            'my-input': $("#my-input").val(),
            'firstname': $("#firstname").val(),
            'lastname': $("#lastname").val(),
            'datepicker': $("#datepicker").val(),
            'religion': $("#religion").val(),
            'address': $("#address").val(),
            '_token': '<?php echo csrf_token() ?>'
        };

        console.log(data);
        let json_data = JSON.stringify(data);

        $.ajax({
            url: '/addvis',
            method: 'POST',
            data: {
                'number': $("#number").val(),
                'my-input': $("#my-input").val(),
                'firstname': $("#firstname").val(),
                'lastname': $("#lastname").val(),
                'datepicker': $("#datepicker").val(),
                'religion': $("#religion").val(),
                'address': $("#address").val(),
                '_token': '<?php echo csrf_token() ?>'
            },
            dataType: 'json',
            success: function(response) {
                console.log("success");
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }

    function send_data() {

        json_visitor_array = JSON.stringify(visitor_array);

        alert("บันทึกข้อมูลลงในฐานข้อมูลเรียบร้อยเเล้ว");
        let data = {
            'visitor': json_visitor_array,
            'company_name': $("#company_name").val(),
            'contact_name': $("#contact_name").val(),
            'telephone': $("#telephone").val(),
            'purpose': $("#purpose").val(),
            'car_type': $("#car_type").val(),
            'brand': $("#brand").val(),
            'color': $("#color").val(),
            'license_plate': $("#license_plate").val(),
            '_token': '<?php echo csrf_token() ?>'
        };


        $.ajax({
            url: '/add',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                console.log("success");
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });

    }

    function uploadImage() {
        var file = document.getElementById("myFile").files[0];
        var formData = new FormData();
        formData.append("image", file);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/save-image");
        xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send(formData);
    }
</script>

<!-- // javascript สร้างตาราง -->
<script type="text/javascript">
    function addVisitor() {
        var visitor_info = [];
        var table = document.getElementById("tbl");
        var index = 0;
        if (validateNumber() && validatePrefix() && validateFirstname() && validateLastname() &&
            validateBirthday() && validateReligion() && validateAddress()) {
            var row = table.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5;
            var cell6;
            var cell7;
            var cell10 = row.insertCell(4);
            cell1.innerHTML = document.getElementById("number").value;
            cell2.innerHTML = document.getElementById("my-input").value;
            cell3.innerHTML = document.getElementById("firstname").value;
            cell4.innerHTML = document.getElementById("lastname").value;
            cell5 = document.getElementById('datepicker').value;
            cell6 = document.getElementById('religion').value;
            cell7 = document.getElementById('address').value;
            cell10.innerHTML = '<input type="button" id="delPOIbutton" value="Delete" onclick="deleteRow(this)" />'
            visitor_info.push(cell1.innerHTML, cell2.innerHTML, cell3.innerHTML,cell4.innerHTML, cell5.innerHTML, cell6.innerHTML, cell7.innerHTML);
            visitor_array.push(visitor_info);
            uploadImage();
            console.log("------------------");
            console.log(visitor_array);
            console.log("------------------");
            alert("ทำการเพิ่มข้อมูลเเล้ว")
            count_visitor++;
            // alert(count_visitor);
        }
    }

    function deleteRow(row) {
        var i = row.parentNode.parentNode.rowIndex;
        document.getElementById('tbl').deleteRow(i);

        for(var i = 0 ; i < row ; i++){
            visitor_array.splice(i, i+1);
            count_visitor--;
        }
    }


</script>


<!-- javascript เกี่ยวกับรูปภาพหน้าตรงบัตรประชาชน -->
<script>
    const clipboardImageInput = document.getElementById("myFile");

    clipboardImageInput.addEventListener("paste", (event) => {
        // Prevent the default paste behavior
        event.preventDefault();

        // Get the pasted image from the clipboard
        const clipboardData = event.clipboardData || window.clipboardData;
        const pastedData = clipboardData.items[0];

        // Check if the pasted data is an image
        if (pastedData.type.indexOf("image") === 0) {
            // Convert the pasted data to a file and set it as the input value
            const pastedImageFile = pastedData.getAsFile();
            clipboardImageInput.files[0] = pastedImageFile;
        }

    });
</script>

<script>
    window.addEventListener("paste", e => {
        if (e.clipboardData.files.length > 0) {
            const fileInput = document.querySelector("#myFile");

            fileInput.files = e.clipboardData.files;

            if (e.clipboardData.files[0].type.startsWith("image/")) {
                setPreviewImage(e.clipboardData.files[0]);
            } else {
                clearPreviewImage();
            }
        }
    });

    function setPreviewImage(file) {
        const fileReader = new FileReader();

        fileReader.readAsDataURL(file);
        fileReader.onload = () => {
            document.querySelector("#imagePreview").src = fileReader.result;
        };
    }

    function clearPreviewImage() {
        document.querySelector("#imagePreview").src = "https://sv1.picz.in.th/images/2023/04/09/mDzKsy.jpg";
    }
</script>



<!-- สคริปตรวจสอบข้อมูลผู้ติดต่อ -->
<script>
    var numberError = document.getElementById('number-error')
    var prefixError = document.getElementById('my-input-error')
    var firstnameError = document.getElementById('firstname-error')
    var lastnameError = document.getElementById('lastname-error')
    var birthdayError = document.getElementById('datepicker-error')
    var religionError = document.getElementById('religion-error')
    var addressError = document.getElementById('address-error')
    const btn = document.getElementById('number');

    function validateNumber() {
        var number = document.getElementById('number').value;
        if (number.length == 0) {
            numberError.style.visibility = 'visible';
            numberError.innerHTML = '*กรุณากรอกเลขบัตรประชาชน';
            setTimeout(function() {
                numberError.style.visibility = 'hidden';
            }, 3000);
            return false;
        } else if (number.length != 13) {
            numberError.style.visibility = 'visible';
            numberError.innerHTML = '*เลขบัตรประชาชนต้องมีเลข 13 หลัก เท่านั้น ';
            setTimeout(function() {
                numberError.style.visibility = 'hidden';
            }, 5000);
            return false;
        }
        return true;

    }

    function validatePrefix() {
        var prefix = document.getElementById('my-input').value;

        if (prefix.length == 0) {
            prefixError.style.visibility = 'visible';
            prefixError.innerHTML = '*กรุณากรอกคำนำหน้า';
            setTimeout(function() {
                prefixError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }

        return true;
    }

    // ตรวจเช็คชื่อจริง
    function validateFirstname() {
        var firstname = document.getElementById('firstname').value;

        if (firstname.length == 0) {
            firstnameError.style.visibility = 'visible';
            firstnameError.innerHTML = '*กรุณากรอกชื่อ';
            setTimeout(function() {
                firstnameError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }
        return true;
    }

    function validateLastname() {
        var lastname = document.getElementById('lastname').value;

        if (lastname.length == 0) {
            lastnameError.style.visibility = 'visible';
            lastnameError.innerHTML = '*กรุณากรอกนามสกุล';
            setTimeout(function() {
                lastnameError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }
        return true;
    }

    function validateBirthday() {
        var birthday = document.getElementById('datepicker').value;

        if (birthday.length == 0) {
            birthdayError.style.visibility = 'visible';
            birthdayError.innerHTML = 'กรุณากรอก วว/ดด/ปปปป ที่เกิด';
            setTimeout(function() {
                birthdayError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }
        return true;
    }

    function validateReligion() {
        var religion = document.getElementById('religion').value;

        if (religion.length == 0) {
            religionError.style.visibility = 'visible';
            religionError.innerHTML = '*กรุณากรอกชื่อ';
            setTimeout(function() {
                religionError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }
        return true;
    }

    function validateAddress() {
        var address = document.getElementById('address').value;

        if (address.length == 0) {
            addressError.style.visibility = 'visible';
            addressError.innerHTML = '*กรุณากรอกที่อยู่';
            setTimeout(function() {
                addressError.style.visibility = 'hidden';
            }, 3000);
            return false;
        }
        return true;
    }
</script>

<script>
    function addAlert() {

        let button = document.querySelector("#add");
        let container = document.querySelector("#add-alert");
        container.innerHTML = `<div class="alert alert-success">
                <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
                </div>`;
    }
</script>

</body>

</html>
