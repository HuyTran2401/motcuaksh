<?php
require_once('php/ConnectDB.php');

class AjDanhmuc
	{
		public function Fload_donvi_canbo($madonvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_dm_donvi_canbo(:madonvi);");
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function Fload_dslinhvuc($madonvi,$id_donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_dm_linhvuc(:madonvi,:id_donvi);");
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':id_donvi', $id_donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
			public function Fload_dsquay($madonvi,$dvu_ma,$dvu_loai){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_dm_quay(:madonvi,:dvu_ma,:dvu_loai);");
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':dvu_ma', $dvu_ma, PDO::PARAM_STR);
		    $stmt -> bindParam(':dvu_loai', $dvu_loai, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function p_luuchitiethinhanh($noidung){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_luuchitiethinhanh(:noidung);");
		    $stmt -> bindParam(':noidung', $noidung, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function FThem_nhanvien($madonvi,$dm_tennv,$dm_ngaysinhnv,$dm_iddonvi,$dm_idlinhvuc,$dm_idquay,$img_canbo){
			$pdo = ConnectDb::getInstance()->getConnection();
			$stmt = $pdo->prepare("call p_them_nhanvien(:madonvi,:dm_tennv,:dm_ngaysinhnv,:dm_iddonvi,:dm_idlinhvuc,:dm_idquay,:img_canbo);");
			$stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':dm_tennv', $dm_tennv, PDO::PARAM_STR);
		    $stmt -> bindParam(':dm_ngaysinhnv', $dm_ngaysinhnv, PDO::PARAM_STR);
		    $stmt -> bindParam(':dm_iddonvi', $dm_iddonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':dm_idlinhvuc', $dm_idlinhvuc, PDO::PARAM_STR);
		    $stmt -> bindParam(':dm_idquay', $dm_idquay, PDO::PARAM_STR);
		    $stmt -> bindParam(':img_canbo', $img_canbo, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
			public function Fload_dsnhanvien($id_donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_dsnhanvien(:id_donvi);");
		    $stmt -> bindParam(':id_donvi', $id_donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		   // $stmt = $pdo->prepare('SHOW ERRORS');
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function F_dsnhanvien($id_donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_dsnhanvien(:id_donvi);");
		    $stmt -> bindParam(':id_donvi', $id_donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		   // $stmt = $pdo->prepare('SHOW ERRORS');
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
			public function Fload_ds_dmdonvi($madonvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_ds_donvi(:madonvi);");
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> execute();
		  //  $stmt = $pdo->prepare('SHOW ERRORS');
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		   public function dsquay_theodonvi($id_donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_dm_quay_theodv(:id_donvi);");
		    $stmt -> bindParam(':id_donvi', $id_donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		   // $stmt = $pdo->prepare('SHOW ERRORS');
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		  public function Loadthongtinnhanvien($cookie){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_loadhinhanh(:cookie);");
            $stmt -> bindParam(':cookie', $cookie, PDO::PARAM_STR);
            $stmt -> execute();  
            return $stmt->fetchAll(PDO::FETCH_ASSOC);      
           // $rowP = $stmt->fetch();		  
	    }
	      public function Loadthongtinsoquay($madonvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_loadthongtinsoquay(:madonvi);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> execute();  
            return $stmt->fetchAll(PDO::FETCH_ASSOC);      
           // $rowP = $stmt->fetch();		  
	    }
	    public function Fupdate_nhanvien($img_canbo,$id_canbo,$hoten_canbo,$donvi_canbo,$linhvuc_canbo,$ngaysinh_canbo,$id_ct_quay,$tt_canbo,$donvi_quanli){
			$pdo = ConnectDb::getInstance()->getConnection();
			$stmt = $pdo->prepare("call p_update_nhanvien(:img_canbo,:id_canbo,:hoten_canbo,:donvi_canbo,:linhvuc_canbo,:ngaysinh_canbo,:id_ct_quay,:tt_canbo,:donvi_quanli);");
			$stmt -> bindParam(':img_canbo', $img_canbo, PDO::PARAM_STR);
			$stmt -> bindParam(':id_canbo', $id_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':hoten_canbo', $hoten_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi_canbo', $donvi_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':linhvuc_canbo', $linhvuc_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':ngaysinh_canbo', $ngaysinh_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':id_ct_quay', $id_ct_quay, PDO::PARAM_STR);
		    $stmt -> bindParam(':tt_canbo', $tt_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi_quanli', $donvi_quanli, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		public function FXoa_nhanvien($id_canbo,$madonvi){
			$pdo = ConnectDb::getInstance()->getConnection();
			$stmt = $pdo->prepare("call p_xoa_nhanvien(:id_canbo,:madonvi);");
		    $stmt -> bindParam(':id_canbo', $id_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		public function Floadlai_linhvuc($madonvi,$donvi_canbo){
			$pdo = ConnectDb::getInstance()->getConnection();
			// echo $madonvi.'******'.$donvi_canbo;
			$stmt = $pdo->prepare("call p_loadlai_linhvuc(:madonvi,:donvi_canbo);");
		    $stmt -> bindParam(':madonvi',$madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi_canbo',$donvi_canbo, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function Fload_stt_vuagoi($madonvi,$cookie){
			$pdo = ConnectDb::getInstance()->getConnection();
			// echo $madonvi.'******'.$donvi_canbo;
			$stmt = $pdo->prepare("call p_load_stt_vuagoi(:madonvi,:cookie);");
		    $stmt -> bindParam(':madonvi',$madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':cookie',$cookie, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function Fluu_danhgiaykien($madonvi,$id_quay,$id_canbo,$donvi_canbo,$stt_vuagoi,$btn_id,$noidung){
			$pdo = ConnectDb::getInstance()->getConnection();
			// echo $madonvi.'******'.$donvi_canbo;
			$stmt = $pdo->prepare("call p_luu_danhgiaykien(:madonvi,:id_quay,:id_canbo,:donvi_canbo,:stt_vuagoi,:btn_id,:noidung);");
		    $stmt -> bindParam(':madonvi',$madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':id_quay',$id_quay, PDO::PARAM_STR);
		    $stmt -> bindParam(':id_canbo',$id_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi_canbo',$donvi_canbo, PDO::PARAM_STR);
		    $stmt -> bindParam(':stt_vuagoi',$stt_vuagoi, PDO::PARAM_STR);
		    $stmt -> bindParam(':btn_id',$btn_id, PDO::PARAM_STR);
		    $stmt -> bindParam(':noidung',$noidung, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetch(PDO::FETCH_ASSOC);
		}
	}
?>
