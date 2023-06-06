<?php
     require_once('../ConnectDb.php');
      $id_canbo = $_GET["id_canbo"]; 
      $pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_loadhinhanh_nv(:id_canbo);");
		    $stmt -> bindParam(':id_canbo', $id_canbo, PDO::PARAM_STR);
		    $stmt -> execute();		   
           $rowP = $stmt->fetch();

?>
<table class = "dv-table" border = "2"  style = "width:190px;height:190px ;border-style: solid;border-color: #92a8d1;">
    	<tr>
		<td rowspan = "3" style = "width: 10px" >
			<?php
				list($type, $imgbase64) = explode(",", $rowP["img_canbo"]);
			//	echo $imgbase64;
				echo '<img style="width:190px;height:190px" src="data:image/gif;base64,' . $imgbase64 . '" />';			
			?>			 
		</td>
		</tr>		
</table>