<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng nhập</title>
		<link rel="icon" type="image/png" href="../motcuaksh/lib/img/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/default/easyui.css">
		<link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="../motcuaksh/lib/demo/demo.css">
		<script type="text/javascript" src="../motcuaksh/lib/jquery.min.js"></script>
		<script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="../motcuaksh/lib/lib.js"></script>
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
		<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
		<script src="lib/js/main.js"></script>
		<script src="lib/vendor/jquery/jquery-3.2.1.min.js"></script>

		<style type="text/css">

		</style>
	</head>
	<body>
		<div class="limiter">
		<div class="container-login100" style="background-image: url('lib/img/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					THÔNG TIN ĐĂNG NHẬP
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" id="fdangnhap" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" style="font-size: 18px !important;font-weight: bold" >
							ĐĂNG NHẬP
						</button>
					</div>
					<br>
					<div id="error_nvkhongtontai" align="center" style="display: none;">
						<p style="color: red;font-weight: bold">Tên đăng nhập/mật khẩu không đúng!</p>
					</div>
					<div id="error_nvkhoataikhoan" align="center" style="display: none;">
						<p style="color: red;font-weight: bold">Tài khoản đã bị khóa! Vui lòng dùng tài khoản khác!</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

		<script type="text/javascript">
	  	$(function(){  
	  		$('#fdangnhap').on('submit', function(donard){
		  		donard.preventDefault();
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
					}
				}).done(function(ret){
					var val = JSON.parse(ret);
					if(val.trangthai == "1"){
						window.location.href = "go?page=_cookie_layykien";
					} else if (val.trangthai == "0"){
						document.getElementById('error_nvkhoataikhoan').style.display = "block";
						document.getElementById('error_nvkhongtontai').style.display = "none";
					} else {
						document.getElementById('error_nvkhongtontai').style.display = "block";
						document.getElementById('error_nvkhoataikhoan').style.display = "none";
					}
				});
			});
		});
		</script>
  </body>
</html>
