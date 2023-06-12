<!doctype html>
<html lang="en"> 
<head>
    <?php include '../motcuaksh/php/pages/header.php';?>      
    <title>BỘ PHẬN MỘT CỬA UBND H.KẾ SÁCH</title>
</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4">
                    <img src="../motcuaksh/lib/img/quyhieudang.png" width="80">
                </div>
                 <div class="col-lg-8 col-md-8">
                    <h5 class="text-primary"><strong>BỘ PHẬN TIẾP NHẬN VÀ TRẢ KẾT QUẢ</strong></h5>
                    <h4 class="text-danger"><strong>UBND HUYỆN KẾ SÁCH</strong></h4>
                </div>
            </div>
        </div>
    </div>
    
<table style="width: 100%;height: 100%" >
                    <tr>
                        <td>
                            <div id="hienthisoquay"  style=" display: grid;
                                 grid-template-columns: auto auto;">
                            </div>
                        </td>
                    </tr>                         
                </table>    
    <script type="text/javascript">                 
        $(document).ready(function (){  
               loadthongtinquaytiepnhan();  
               kiemtratime();
               setInterval(function() {
                 kiemtratgiohanhchinh();  
              }, 10000);
         });  
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
                        loadthongtinquaytiepnhan();
                      } else {
                        //alert("Đây không phải là giờ hành chính trong tuần.");
                      }
                    } else {
                        ///alert("Đây không phải là giờ hành chính trong tuần.");
                    }
            }   
          function kiemtratime() { 
            function addZero(i) {
              if (i < 10) {i = "0" + i}
              return i;
            }        
            var today = new Date();
            var time ='16:00:00'        
            var timethuc =  addZero(today.getHours()) + ":" + addZero(today.getMinutes()) + ":" + addZero(today.getSeconds());
             if(timethuc > time){
               window.location="go?page=_thongbao";
             }
            }           
            $("#hienthisoquay").on('click',"button", function(){
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
                var key_cauhinh = ($(this).attr("id")).split('.//.');
                var bnt_id = key_cauhinh[0];
                var user_online =cookie;
                $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "batsothutu",
                            bnt_id: bnt_id,
                        user_online:user_online
                    }
                }).done(function(data){
                    var j_data = JSON.parse(data);
                    var kq = j_data.ketqua;
                    var kq1 = j_data.quay;
                    var kt = j_data.kiemtra;
                    if (kt == '999') {
                        loadthongtinquaytiepnhan();
                        Swal.fire('Thông báo !','Bạn đã chọn thành công số thứ tự: ' + kq + '  tại quầy số: '+ kq1);
                               
                    } else if(kt == '888'){
                        Swal.fire('Thông báo !','Bạn đã bắt số trực tuyến 2 lần vui lòng đến trực tiếp bộ phận 1 cửa để bắt số, Cảm ơn !');                        
                    } else{
                        Swal.fire('Thông báo !','Xin bạn quay trở lại bắt số vào ngày mai, Cảm ơn !!!');
                    }
                });
            });
        function processbatsothutu_lan2(bnt_id,user_online){
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
            var key_cauhinh = ($(this).attr("id")).split('.//.');
            var bnt_id = key_cauhinh[0];
            var user_online =cookie;
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "batsothutu_1",
                    bnt_id: bnt_id,
                    user_online:user_online
                }
            }).done(function(data){
                  var j_data = JSON.parse(data);
                  var kq = j_data.ketqua;
                  var kq1 = j_data.quay;
                  if (kq >= 1) {
                     loadthongtinquaytiepnhan();
                     $.messager.show({title:'Thông báo',
                                 msg:'Bạn đã chọn thành công số STT :      ' + kq + '  tại quầy Số: '+ kq1,
                                 showType:'show',
                                 timeout:2000,
                                 style:{
                                    right:'',
                                    bottom:''
                                }
                    });
                } else {
                    alert("Lỗi !!!");
                }
            });
        }
        function loadthongtinquaytiepnhan(){
             var data_quay = $("#hienthisoquay");
              $('.hienthisoquay').remove();
            $.ajax({
                    type: 'POST',
                    url: 'go',
                    data: {
                        for: "load_thongtinquaytiepnhan",
                        madonvi:1
                    }
                }).done(function(data){
                    var j_data = JSON.parse(data);
                    var data_len = j_data.length;
                    if (j_data != '') {
                         $("#hienthisoquay").empty();
                        $('input', data_quay).remove();
                        var i;
                        for(i=0;i<data_len;i++) {
                          //  data_quay.append('<button class ="btn_soquay" type="button" id ="' + j_data[i].key_cauhinh + '">' + j_data[i].value_cauhinh + '<br>' + j_data[i].test + '<br>' + j_data[i].test1 +'</button>'); 
                          data_quay.append('<button class = "btn_soquay" type="button" id = "' + j_data[i].key_cauhinh + '"><p class="class1">' + j_data[i].ten_quay + '</p><p class="class3">' + j_data[i].value_cauhinh + '</p> <p class="class2">' + j_data[i].sohientai + ' </p><p class="class4">' + j_data[i].stt +'</p> </button>');

                        //  data_quay.append('<div  class = "btn_soquay" id = "' + j_data[i].key_cauhinh + '"> <input class="class1" type="text" value="'+ j_data[i].value_cauhinh +'" /> <br> <input class="class2" value="'+ j_data[i].test +'" /> <br> <input class="class2" value="'+ j_data[i].test1 +'" <br> <input class="class2" type="button" value="'+ j_data[i].batso +'" /> </div>');
                        }
                    } else {
                        $('input', data_quay).remove();
                        data_quay.append($('<input class = "btn_soquay" type="button" id = "0" />').val("CHƯA CẦU HÌNH QUẦY"));
                    }
                });}
    </script>
    <style type="text/css">        
        #container2 {
            position: relative;
            margin:0 auto;
            line-height: 1.4em;
        }       
        .header{
            background: url(lib/img/hinhen_mtu.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }
        #button1{              
          font-size: 150%;
          font-weight: 700;           
          line-height: 1.0;
          width: 20%;
          font-family: "Times New Roman", Times, serif;
        }
         #button2{              
          font-size: 180%;
          font-weight: 700;           
          line-height: 1.0;
          text-align: left;
          font-family: "Times New Roman", Times, serif;
        }
        .td{
            text-transform: capitalize;
        }
        .btn_soquay{
            padding: 8px 8px 8px 8px;
            margin: 5px 5px 5px 5px;
            text-align: center;
            background-color: #eaf2ff;
            box-shadow: 0 0 5px #0066ff;
            color: #fff;
            border: none;
            position: relative;
            font-size: 20%;
            font-weight: bold;
            cursor: pointer;
            transition: 800ms ease all;
            outline: none;
            border-radius: 12px;
            cursor: pointer;            
        }
        
        .btn_soquay:hover{
            background:#00bfff5c;
            color:#088A08;
            font-weight: bold;                
        }
        .class1{
            text-align: center;
            color: green;
            background-color:none;
            padding: 0px 0px 0px 0px;
            height: auto;
            text-align: center;  
            line-height: 0.5;
            font-size:400%;
            margin-top: 0px;
            font-family: "Times New Roman", Times, serif;                
          }
          .class2{
            text-align: center;
            color: #CC0099;
            background-color:none;
            padding: 0px 0px 0px 0px;
            height: auto;
            font-size:400%;
            line-height: 0.1;
            margin-top: 0;
            word-wrap: break-word;
            font-family: "Times New Roman", Times, serif;
            webkit-animation: my 3000ms infinite;
            -moz-animation: my 3000ms infinite; 
            -o-animation: my 3000ms infinite; 
            animation: my 3000ms infinite;
            }
            @-webkit-keyframes my {
            0% { color: #003399; } 
            50% { color: #0A0C05;  } 
            100% { color: #003399;  } 
             }
            @-moz-keyframes my { 
            0% { color: #003399;  } 
            50% { color: #0A0C05;  }
            100% { color: #003399;  } 
            }
            @-o-keyframes my { 
            0% { color: #003399; } 
            50% { color: #0A0C05; } 
            100% { color:#003399;  } 
             }
            @keyframes my { 
            0% { color: #003399;  } 
            50% { color: #0A0C05;  }
            100% { color: #003399;  } 
            }
          .class3{
            text-align: center;
            color: #990000;
            height: auto;
            margin: 0;   
            line-height: 1.0;             
            font-size:15px;
            font-family: "Times New Roman", Times, serif;
            padding-bottom: 10px;
            z-index: 800;

          }
          .class4{
            text-align: center;
            color: #0A0C05;
            height: auto;
            padding-top: -200px;                
            font-size:450%;
            line-height: 0.5;
            padding-bottom: 20px;
            font-family: "Times New Roman", Times, serif;
            z-index: 999;
          }
		  
          .p {
            width: 100%;
            text-align: center;
          }
    </style>      
</body> 
</html>

