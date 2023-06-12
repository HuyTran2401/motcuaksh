<!doctype html>
<html lang="en"> 
<head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../motcuaksh/lib/img/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/demo/demo.css">
    <script type="text/javascript" src="../motcuaksh/lib/jquery.min.js"></script>
    <script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../motcuaksh/lib/assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="../motcuaksh/lib/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../motcuaksh/lib/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../motcuaksh/lib/assets/css/demo.css">
    <title>ĐÁNH GIÁ</title>
</head>
<body>
    <div class="wrapper">
        <div class="main-header" data-background-color="blue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10">
                       <a href="#" class="logo" style="color: white; width: 90%; font-size:30px !important">
                            <img src="../motcuaksh/lib/img/ttpvhcc-kessach.png" style="margin-left:10px;padding:0;width:80px;height:80px;color: white; ">
                            <span style="font-size: 30px; padding: 0 0 0 70px;">CHUNG TAY CẢI CÁCH THỦ TỤC HÀNH CHÍNH</span>
                        </a>
                    </div>
                    <div class="col-2" style="display: flex; align-items: center;" id="btn_quantri">
                            <img src="../motcuaksh/lib/img/logovnpt_edit.png" style="padding: 0 0 0 60px; width: auto; max-height: 55px;">
                    </div>
                </div>
            
            </div>
        </div>
        <div class="main-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 text-center py-5" style="display: flex;
    flex-direction: column;
    justify-content: center;">
                        <div id="avartar"></div>
                        <div id="tennv"></div>
                        <div id="ten_donvi"></div>
                        <input id="id_canbo" type="hidden"  />
                        <input id="donvi_canbo" type="hidden" />
                        <input id="stt_vuagoi" type="hidden" />
                    </div>
                    <div class="col-md-9" style="height: calc(100vh - 90px); display: flex;
    flex-direction: column;">
                        <div class="row my-1">
                            <div class="col-2 text-right" style="display: flex;
    flex-direction: column;
    justify-content: center; align-items: center;">
                                <img src="../motcuaksh/lib/img/matcuoi.jpg" class="imageemo">
                            </div>
                            <div class="col-10">
                                <button type="button" class="button py-3" onclick="button(1)" >Hài lòng với dịch vụ </button>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-2 text-right" style="display: flex;
    flex-direction: column;
    justify-content: center; align-items: center;">
                                <img src="../motcuaksh/lib/img/iconhailong.jpg" class="imageemo">
                            </div>
                            <div class="col-10">
                                <button type="button" class="button py-3" onclick="button(2)" >Hài lòng với thái độ phục vụ </button>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-2 text-right" style="display: flex;
    flex-direction: column;
    justify-content: center; align-items: center;">
                               <img src="../motcuamtu/lib/img/matbuon.png" class="imageemo">
                            </div>
                            <div class="col-10">
                                <button type="button" class="button py-3" onclick="button(3)" >Không hài lòng về nghiệp vụ  của nhân viên </button>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-2 text-right" style="display: flex;
    flex-direction: column;
    justify-content: center; align-items: center;">
                                <img src="../motcuamtu/lib/img/matbuon.png" class="imageemo">
                            </div>
                            <div class="col-10">
                                <button type="button" class="button py-3" onclick="button(4)" >Không hài lòng về thời gian giao dịch </button>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-2 text-right" style="display: flex;
    flex-direction: column;
    justify-content: center; align-items: center;">
                                <img src="../motcuamtu/lib/img/hinhgopy.jpg" class="imageemo">
                            </div>
                            <div class="col-10">
                                 <button type="button" class="button" id="ykiendonggop">Ý kiến góp ý</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_themykien" class="easyui-window" title="NHẬP GÓP Ý" data-options="modal:true,closed:true,iconCls:'icon-add',method:'post'" style="width:350px;height:40%;padding:5px;">
            <div class="easyui-layout" data-options="fit:true">
                <div data-options="region:'center'" style="padding:5px;">
                    <table style="width: 100%" border="0">
                        <tr>
                            <td>
                              <input class="easyui-textbox" name="noidung" id="noidung" required="true" multiline="true" 
                              style="width:300px;height: 90px;">
                            </td>
                        </tr>
                    </table>
                </div>
                <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                    <a class="easyui-linkbutton" data-options="iconCls:'icon-save'" href="javascript:void(0)" onclick="luu_noidungdanhgia()" style="width:80px" id="luudm_dichvu" name="luudm_dichvu">LƯU</a>
                    <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="close_formnhapykien()" style="width:80px">ĐÓNG</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../motcuaksh/lib/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/core/popper.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/core/bootstrap.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/atlantis.min.js"></script>
    <script src="../motcuaksh/lib/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        var madonvi_load = <?php  if(isset($_SESSION["madonvi"])) { echo $_SESSION["madonvi"]; } else { echo 0; } ?>;
        var madonvi_cookie = "";
        if (madonvi_load == "0"){
            var value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    madonvi_cookie = ck_arr[1];
                }
            }
        } else {
            madonvi_cookie = madonvi_load;
        }
        $(document).ready(function (){           
            getCookie();
            load_stt_vuagoi(); 
            loadthongtinnhanvien();     
            setInterval(function() {
                kiemtratgiohanhchinh();   
            }, 1000);
			function kiemtratgiohanhchinh() { 
                    function addZero(i) {
                      if (i < 10) {i = "0" + i}
                      return i;
                    } 
                    var today = new Date();
                    var currentDay = today.getDay();
                    var starttime ='07:00:00'       
                    var startend  ='17:30:00'   
                    var timethuc =  addZero(today.getHours()) + ":" + addZero(today.getMinutes()) + ":" + addZero(today.getSeconds());
                    if (currentDay >= 1 && currentDay <= 5) { // từ Thứ Hai đến Thứ Sáu
                      if (timethuc >= starttime && timethuc < startend) { // từ 7 giờ sáng đến 5 giờ chiều
                        // thực thi chổ này
                        load_stt_vuagoi();
                      } else {
                        //alert("Đây không phải là giờ hành chính trong tuần.");
                      }
                    } else {
                        ///alert("Đây không phải là giờ hành chính trong tuần.");
                    }
            }   
            $("#ykiendonggop").click(function (evt) {
                swal({
                    title: 'Mời bạn nhập ý kiến đóng góp',
                    html: '<br><input class="form-control" placeholder="Nhập ý kiến" id="input-field">',
                    content: {
                        element: "input",
                        attributes: {
                            placeholder: "Nhập ý kiến",
                            type: "text",
                            id: "input-field",
                            className: "form-control"
                        },
                    },
                    buttons: {
                        confirm: {
                            text: "ĐỒNG Ý",
                            className : 'btn btn-info'
                        },
                        cancel: {
                            text: "HỦY",
                            visible: true,
                            className: 'btn btn-info'
                        }
                    }
                }).then((OK) => {
                    if (OK) {
                        var ykien_type = $('#input-field').val();
                        luu_noidungdanhgia(ykien_type);
                    } else {
                        swal.close();
                    }
                });
            });
            $("#btn_quantri").click(function (evt) {
                window.location.href = "go?check=_ketqua";
            });
         });
        function getCookie(TT_HANHCHINH) {
            const value = `${document.cookie}`;
            var sub = value.includes('TT_HANHCHINH');
            if (sub == true) {
               return true;
            } else {               
                window.location="go?check=_dangnhap";                
            }
        }
        function luu_noidungdanhgia(ykien_type){
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var id_quay = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    id_quay = ck_arr[0];
                }
            }
            var id_canbo = $("#id_canbo").val();
            var donvi_canbo = $("#donvi_canbo").val();
            var stt_vuagoi = $("#stt_vuagoi").val()
            if (stt_vuagoi == ""){
                stt_vuagoi = 0;
            } else {
                stt_vuagoi = $("#stt_vuagoi").val();
            }
            var madonvi = madonvi_cookie;
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_danhgiaykien",
                    madonvi: madonvi,
                    id_quay: id_quay,
                    id_canbo: id_canbo,
                    donvi_canbo:donvi_canbo,
                    stt_vuagoi:stt_vuagoi,
                    bnt_id:5,
                    noidung:ykien_type
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                var kq = j_data.ketqua;
                if (kq == 1) {
                    swal("Cảm ơn bạn đã đánh giá!", "UBND THỊ XÃ VĨNH CHÂU", {
                        icon : "success",
                        buttons: false,
                        timer: 3000
                    });
                } else {
                    swal("Bạn đã thực hiện đánh giá rồi!", "UBND THỊ XÃ VĨNH CHÂU", {
                        icon : "success",
                        buttons: false,
                        timer: 3000
                    });
                }
            });
        }
        function button(bnt_id){  
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var id_quay = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    id_quay = ck_arr[0];
                }
            }
            var id_canbo = $("#id_canbo").val();
            var donvi_canbo = $("#donvi_canbo").val();
            var stt_vuagoi = $("#stt_vuagoi").val();
            var madonvi= madonvi_cookie;
            var noidung = '';
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_danhgiaykien",
                    madonvi: madonvi,
                    id_quay: id_quay,
                    id_canbo: id_canbo,
                    donvi_canbo:donvi_canbo,
                    stt_vuagoi:stt_vuagoi,
                    bnt_id:bnt_id,
                    noidung:noidung
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                var kq = j_data.ketqua;
                if (kq == 1){
                    swal("Cảm ơn bạn đã đánh giá!", "UBND HUYỆN KẾ SÁCH", {
                        icon : "success",
                        buttons: false,
                        timer: 3000
                    });
                } else {
                    swal("Bạn đã thực hiện đánh giá rồi!", "UBND HUYỆN KẾ SÁCH", {
                        icon : "success",
                        buttons: false,
                        timer: 3000
                    });
                }
            });
        }   
        function load_stt_vuagoi(){
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    cookie = ck_arr[0];
                }
            }
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "Fload_stt_vuagoi",
                    madonvi: madonvi_cookie,
                    cookie: cookie
                }
            }).done(function(data){
                var j_data = JSON.parse(data);             
                $("#stt_vuagoi").val(j_data[0].STT);
            });
        }
        function loadthongtinnhanvien(){
            const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    cookie = ck_arr[0];
                }
            }
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "load_thongtinnhanvien",
                    cookie: cookie
                }
            }).done(function(data){
            var j_data = JSON.parse(data);
            var a = $('#tennv');
            var b = $('#ten_donvi');                    
            var cc = $('#avartar');
            $("#tennv",a).remove();
            $("#tennv",b).remove();                     
            $("#avartar",cc).remove();
            $("#id_canbo").val(j_data[0].id_canbo);
            $("#donvi_canbo").val(j_data[0].donvi_canbo);
            $("#tennv").append(j_data[0].hoten_canbo);
            $("#ten_donvi").append(j_data[0].ten_donvi);
            cc.append('<img class="imgavatar" alt="Embedded Image" src="' + j_data[0].img_canbo + '" >');
            });
        }
        function close_formnhapykien(){
            $('#modal_themykien').window('close');
        }
        function launchFullscreen(element) {
            if(element.requestFullscreen) {
                element.requestFullscreen();
            } 
            else if(element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } 
            else if(element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen();
            } 
            else if(element.msRequestFullscreen) {
                element.msRequestFullscreen();
            }
        }
        function exitFullscreen() {
            if(document.exitFullscreen) {
                document.exitFullscreen();
            } 
            else if(document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } 
            else if(document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
    </script>
    <style type="text/css">
        .call-mobile {
            position: fixed;
            top: 325px;
            height: 40px;
            right: 70px;
            line-height: 40px;
            color: #fff;
            left: 92%;
            z-index: 9999;
            text-align: center;
        }
        #container2 {
            position: relative;
            margin:0 auto;
            line-height: 1.4em;
        }
        @media only screen and (max-width: 479px){
            #container2 { width: 90%; }
        }
        .button {
            background-color:#EDFABF; /* Green */
            border: 2px solid #D9F287;
            width: 100%;
            height: 100%;
            color: #0000FF;
            padding: 5px 10px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 23px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-family:digital-7;
        }
        .button:hover {
            background-color: #DCC659;
        }
        .button1 {
            background-color: #EDFABF;
            border: 2px solid #D9F287;
        }
        #button2{
            background-color:#1175E8;
            border: 1px solid #4CAF50;
            font-size: 40px;
        }
        .button1:hover {
            background-color: #DCC659;
        }
        .td{
            text-transform: capitalize;
        }
        .imageemo{
            width: 100%;
            max-width: 85px;
        }
        .imgavatar {
            width: 100%;
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }
        #tennv{
            font-size: 14px;
			color: #0b441f;
			padding: 10px 0;
        }
        #ten_donvi{
            font-size: 13px;
			font-weight: 900;
			color: #023a81;
        }
        #btn_quantri {
            opacity: 1;
            cursor: pointer;
            display: inline-block;
            line-height: 56px;
            order: 3;
            width: unset;
            margin-left: auto;
        }
    </style>
</body> 
</html>