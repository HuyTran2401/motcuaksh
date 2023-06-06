<!DOCTYPE html>
<html>
	<head>
		<?php include "../motcuaksh/php/pages/header.php";?> 
		<style type="text/css">
		</style>
	</head>
	<body>	

		<script type="text/javascript">
	  	  $(document).ready(function (){
			 var URL = window.location.href;
				 //alert(URL);
		        function getCookie(TT_HANHCHINH) {
					const value = `${document.cookie}`;
					var cookie_arr = value.split(',');
					var cookie = "";
                    for (var i = 0;i<cookie_arr.length;i++){
						// alert(cookie_arr);
						if(cookie_arr[i].includes('TT_HANHCHINH') == true){	
						    window.location="go?check=_batso";
						}else{
							window.location.href = "go?page=_cookie";
						}
                    }		              
		        }  
	  		    getCookie();
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
						window.location.href = "go?page=_quantri";
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
