<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hệ thống quản lý cảng cá</title>
		<link rel="touch-icon" sizes="76x76" href="../qlcangca/lib/img/logo-vnpt.png">
    <link rel="icon" type="image/png" href="../qlcangca/lib/img/logo-vnpt.png">
		<link rel="stylesheet" type="text/css" href="../qlcangca/lib/themes/default/easyui.css">
		<link rel="stylesheet" type="text/css" href="../qlcangca/lib/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="../qlcangca/lib/demo/demo.css">
		<script type="text/javascript" src="../qlcangca/lib/jquery.min.js"></script>
		<script type="text/javascript" src="../qlcangca/lib/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="../qlcangca/lib/lib.js"></script>
		<link rel="stylesheet" type="text/css" href="lib/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="lib/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="lib/vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="lib/css/util.css">
		<link rel="stylesheet" type="text/css" href="lib/css/main.css">
		<script src="lib/vendor/animsition/js/animsition.min.js"></script>
		<script src="lib/vendor/bootstrap/js/popper.js"></script>
		<script src="lib/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/vendor/select2/select2.min.js"></script>
		<script src="lib/vendor/daterangepicker/moment.min.js"></script>
		<script src="lib/vendor/daterangepicker/daterangepicker.js"></script>
		<script src="lib/vendor/countdowntime/countdowntime.js"></script>
		<script src="lib/js/main.js"></script>
		<style type="text/css">
			#progressbar {
            font-weight: bold;
            font-size: 14px;
            color: #0066B3;
        }
        .sk-chase {
            width: 40px;
            height: 40px;
            position: relative;
            animation: sk-chase 2.5s infinite linear both;
        }
        .sk-chase-dot {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            animation: sk-chase-dot 2.0s infinite ease-in-out both;
        }
        .sk-chase-dot:before {
            content: '';
            display: block;
            width: 25%;
            height: 25%;
            background-color: #0066B3;
            border-radius: 100%;
            animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
        }
        .sk-chase-dot:nth-child(1) { animation-delay: -1.1s; }
        .sk-chase-dot:nth-child(2) { animation-delay: -1.0s; }
        .sk-chase-dot:nth-child(3) { animation-delay: -0.9s; }
        .sk-chase-dot:nth-child(4) { animation-delay: -0.8s; }
        .sk-chase-dot:nth-child(5) { animation-delay: -0.7s; }
        .sk-chase-dot:nth-child(6) { animation-delay: -0.6s; }
        .sk-chase-dot:nth-child(1):before { animation-delay: -1.1s; }
        .sk-chase-dot:nth-child(2):before { animation-delay: -1.0s; }
        .sk-chase-dot:nth-child(3):before { animation-delay: -0.9s; }
        .sk-chase-dot:nth-child(4):before { animation-delay: -0.8s; }
        .sk-chase-dot:nth-child(5):before { animation-delay: -0.7s; }
        .sk-chase-dot:nth-child(6):before { animation-delay: -0.6s; }
        @keyframes sk-chase {
            100% { transform: rotate(360deg); }
        }
        @keyframes sk-chase-dot {
            80%, 100% { transform: rotate(360deg); }
        }
        @keyframes sk-chase-dot-before {
            50% {
                transform: scale(0.4);
            } 100%, 0% {
                transform: scale(1.0);
            }
        }
        #password{
        	background-image:url(../qlcangca/lib/themes/default/images/key-icon.png);
			background-repeat: no-repeat;
			background-position: left;
    	}
    	#username{
        	background-image:url(../qlcangca/lib/themes/default/images/user-icon.png);
			background-repeat: no-repeat;
			background-position: left;
    	}
		</style>

	</head>
	<body>
		<div id="capnhatmatkhau" class="easyui-dialog" style="width:400px;height:200px"
				data-options="title:'Cập nhật mật khẩu',buttons:'#bb', modal:true, closed: true">
				<form id="fcapnhatmatkhau" method="post" style="width:350px; margin: auto;">
					<div style="margin-top:20px">
	            <input class="easyui-passwordbox" name="password_new" prompt="Mật khẩu mới" iconWidth="28"
								style="width:100%;height:34px;padding:10px">
	        </div>
					<div style="margin-top:20px">
	            <input class="easyui-passwordbox" name="rw_password_new" prompt="Nhập lại mật khẩu mới" iconWidth="28"
								style="width:100%;height:34px;padding:10px">
	        </div>
				</form>
		</div>
		<div id="bb">
			<a href="javascript:void(0)" onclick="$('#capnhatmatkhau').dialog('close');" class="easyui-linkbutton">Đóng</a>
			<a href="javascript:void(0)" onclick="$('#fcapnhatmatkhau').submit();" class="easyui-linkbutton">Lưu</a>
		</div>

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
					<form class="login100-form validate-form" id="fdangnhap" method="post">
				        <div style="margin:20px auto;width:100px;height:100px;border-radius:50px;overflow:hidden">
				            <img src="../qlcangca/lib/img/logo-vnpt.png" style="padding:0;width:100%;height:100%;">
				        </div>
						<span class="login100-form-title p-b-33">
							Đăng nhập
						</span>

						<div class="wrap-input100 validate-input" >
							<input class="input100" type="text" name="username" placeholder="Tên đăng nhập" id="username">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div><br>
						<div class="wrap-input100 validate-input">
							<input class="input100" type="password" name="password" placeholder="Mật khẩu" id="password">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div>

						<div class="container-login100-form-btn m-t-20">
							<div id="progressbar" style="display: none;width: 100%" align="center">
						        <div class="sk-chase">
						            <div class="sk-chase-dot"></div>
						            <div class="sk-chase-dot"></div>
						            <div class="sk-chase-dot"></div>
						            <div class="sk-chase-dot"></div>
						            <div class="sk-chase-dot"></div>
						            <div class="sk-chase-dot"></div>
						        </div>
						    </div>
							<button class="login100-form-btn" style="font-size: 18px !important;font-weight: bold" onclick="$('#fdangnhap').submit();" id="login">
								ĐĂNG NHẬP
							</button>
							<div id="error" align="center" style="display: none;">
								<p style="color: red;font-weight: bold">Tên đăng nhập/mật khẩu không đúng</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function showDiv() {
			    document.getElementById('login').style.display = "none";
			    document.getElementById('progressbar').style.display = "block";
			}
		  $(function(){
		    $('#fdangnhap').on('submit', function(donard){
		        donard.preventDefault();
		        document.getElementById('error').style.display = "none";
			    var a = $(this).find('input[name="username"]').val().trim();
			    var b = $(this).find('input[name="password"]').val().trim();
			    $.ajax({
			        type: 'POST',
			        url: 'go',
			        data: {
				        for: "login",
				        taikhoan: a,
				        matkhau: MD5(b),
						mobile: 0
			        },
			        beforeSend:  function(){
			        	showDiv();
			        }
			    }).done(function(ret){
					var val = JSON.parse(ret);
					if(val.trangthai == "1"){
						if(val.cap == "1"){
							window.location.href = "go?page=_qltauca";
							lichsuchuongtrinh('Đăng nhập','Đăng nhập hệ thống quản lý tàu cá');
						} else if(val.cap == "2"){
							window.location.href = "go?page=_chuongtrinhcan";
							lichsuchuongtrinh('Đăng nhập','Đăng nhập hệ thống trạm cân');
						} else if(val.cap == "3"){
							window.location.href = "go?page=_qldiennuoc";
							lichsuchuongtrinh('Đăng nhập','Đăng nhập hệ thống dịch vụ trên bờ');
						} else {
							window.location.href = "go?page=_main";
							lichsuchuongtrinh('Đăng nhập','Đăng nhập hệ thống');
						}
					} else if(val.trangthai == "0"){
		            	$('#capnhatmatkhau').dialog('open');
					} else {
						//$.messager.alert('Cảnh báo', 'Sai mật khẩu!','error');
						document.getElementById('error').style.display = "block";
						document.getElementById('login').style.display = "block";
						document.getElementById('progressbar').style.display = "none";
					}
			    });
		    });

				$('#fdangnhap').on('keypress',function(e) {
				    if(e.which == 13) {
				        $('#fdangnhap').submit();
				    }
				});

		$('#fcapnhatmatkhau').on('submit', function(donard){
		      donard.preventDefault();
		      var a = $(this).find('input[name="password_new"]').val().trim();
		      var b = $(this).find('input[name="rw_password_new"]').val().trim();
					if(a == b){
						$.ajax({
			        type: 'POST',
			        url: 'go',
			        data: {
			          for: "themmatkhau",
			          matkhaumoi: MD5(b)
			        },
			        beforeSend:  function(){
			        }
			      })
			      .done(function(ret){
							var val = JSON.parse(ret);
							if(val.trangthai == "1"){
								window.location.href = "go?page=_dsdanhgia";
							} else {
		            $.messager.alert('Cảnh báo', 'Cập nhật không thành công!','error');
							}
			      });
					} else {
						$.messager.alert('Cảnh báo', 'Mật khẩu nhập lại không đúng!','warning');
					}
		    });
	    });
		</script>
  </body>
</html>
