
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng nhập</title>
		<link rel="icon" type="image/png" href="../../../../motcuaksh/lib/img/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/themes/default/easyui.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/demo/demo.css">
		<script type="text/javascript" src="../../../../motcuaksh/lib/jquery.min.js"></script>
		<script type="text/javascript" src="../../../../motcuaksh/lib/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="../../../../motcuaksh/lib/lib.js"></script>
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/css/util.css">
		<link rel="stylesheet" type="text/css" href="../../../../motcuaksh/lib/css/main.css">
		<script src="../../../../motcuaksh/lib/vendor/animsition/js/animsition.min.js"></script>
		<script src="../../../../motcuaksh/lib/vendor/select2/select2.min.js"></script>
		<script src="../../../../motcuaksh/lib/vendor/daterangepicker/moment.min.js"></script>
		<script src="../../../../motcuaksh/lib/vendor/daterangepicker/daterangepicker.js"></script>
		<script src="../../../../motcuaksh/lib/vendor/countdowntime/countdowntime.js"></script>
		<script src="../../../../motcuaksh/lib/carhartl-jquery-cookie-v1.4.1-0-g7f88a4e/carhartl-jquery-cookie-92b7715/jquery.cookie.js"></script>
		<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!--Bootsrap 4 CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	    <!--Fontawesome CDN-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!--Custom styles-->
		<style type="text/css">
		        @import url('https://fonts.googleapis.com/css?family=Numans');
				html,body{
				background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
				background-size: cover;
				background-repeat: no-repeat;
				height: 100%;
				font-family: 'Numans', sans-serif;
				}

				.container{
				height: 100%;
				align-content: center;
				}

				.card{
				height: 370px;
				margin-top: auto;
				margin-bottom: auto;
				width: 400px;
				background-color: rgba(0,0,0,0.5) !important;
				}

				.social_icon span{
				font-size: 60px;
				margin-left: 10px;
				color: #FFC312;
				}

				.social_icon span:hover{
				color: white;
				cursor: pointer;
				}

				.card-header h3{
				color: white;
				font-size: 22px;
				}

				.social_icon{
				position: absolute;
				right: 20px;
				top: -45px;
				}

				.input-group-prepend span{
				width: 50px;
				background-color: #FFC312;
				color: black;
				border:0 !important;
				}

				input:focus{
				outline: 0 0 0 0  !important;
				box-shadow: 0 0 0 0 !important;

				}

				.remember{
				color: white;
				}

				.remember input
				{
				width: 20px;
				height: 20px;
				margin-left: 15px;
				margin-right: 5px;
				}

				.login_btn{
				color: black;
				background-color: #FFC312;
				width: 130px;
				}

				.login_btn:hover{
				color: black;
				background-color: white;
				}

				.links{
				color: white;
				}

				.links a{
				margin-left: 4px;
				}
		</style>
	</head>
	<body> 
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 align="center">VUI LÒNG NHẬP THÔNG TIN QUẦY</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-alt"></i></span>
						</div> 
						<select name="id_quay" id="id_quay"    disabled="true" class="form-control"  aria-label="Default select example">
                              <?php
                                foreach ($ds_dmdonvi as $key) {
                                  echo '<option value="'.$key['gia_tri'].'">'.$key['ten_donvi'].'</option>';
                                }
                              ?>
            </select>						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fab fa-dashcube"></i></span>
						</div>
						   <select name="so_quay" id="so_quay" type="textbox"  class="form-control"  aria-label="Default select example">
                              <?php
                                foreach ($dsquaytheodv as $key) {
                                  echo '<option value="'.$key['id_quay'].'">'.$key['ten_quay'].'</option>';
                                }
                              ?>
                            </select>
					</div>
					<div class="form-group">
						<!--<button></button><input value="XÁC NHẬN" class="btn float-right login_btn"></button
						<button class="btn float-right login_btn" style="font-size: 18px !important;font-weight: bold" >
							ĐĂNG NHẬP
						</button>-->
						<input type="button" name="luucookie" id="luucookie"  style="font-size: 18px !important;font-weight: bold" 
						value="XÁC NHẬN" class="btn float-right login_btn"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		    $("#luucookie").click(function (evt) {
		    	var id_quay = $("#id_quay").val().trim();
			    var so_quay = $("#so_quay").val().trim();
			    var madonvi = <?php echo $_SESSION["madonvi"]; ?>;
			    var var_cookie = so_quay + './/.' + madonvi;
				$.ajax({
					type: 'POST',
					url: 'go',
					data: {
						for: "cookie",
						id_quay:id_quay,
						so_quay:so_quay
					}
				}).done(function(ret){
					var val = JSON.parse(ret)
					if(val[0].trangthai == "1"){
						luucookie(id_quay,so_quay,3650,var_cookie);
						window.location.href = "go?page=_logout";
					}
				});
			});
			function luucookie(id_quay,so_quay,exdays,var_cookie){
				    var d = new Date();
				    d.setTime(d.getTime() + (exdays*24*60*60*1000));
				    var expires = "expires="+ d.toUTCString();
				    document.cookie = id_quay + "=" + var_cookie + ";" + expires + ";path=/";
				     var abc = document.cookie.split('=');
				 	 var len = abc.length;
				 	 var last = abc[len-1];
         }
		});

</script>
  </body>
</html>


