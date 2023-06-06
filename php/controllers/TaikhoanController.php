<?php
require_once('php/ConnectDB.php');

class TaikhoanController{

  public function FLogin($taikhoan, $matkhau){
  	$pdo = ConnectDb::getInstance()->getConnection();
    $stmt = $pdo->prepare("call p_dangnhap(:taikhoan, :matkhau);");
    $stmt -> bindParam(':taikhoan', $taikhoan, PDO::PARAM_STR);
    $stmt -> bindParam(':matkhau', $matkhau, PDO::PARAM_STR);
    $stmt -> execute();
    if($stmt->rowCount() > 0){
    	$row = $stmt->fetch();
      	$_SESSION["manhanvien"] = $row["nv_ma"];
      	$_SESSION["taikhoan"] = $row["nv_tendangnhap"];
      	$_SESSION["tenhanvien"] = $row["nv_hoten"];
      	$_SESSION["madonvi"] = $row["donvi_ma"];
      	$_SESSION["diachi"] = $row["nv_diachi"];
      	$_SESSION["gioitinh"] = $row["nv_gioitinh"];
      	$_SESSION["capquanly"] = $row["nv_quyen"];
      	$_SESSION["ngaysinh"] = $row["nv_ngaysinh"];
      	$_SESSION["sansang"] = $row["nv_trangthai"];
      	$_SESSION["sodienthoai"] = $row["nv_sodienthoai"];
      	$_SESSION["tendonvi"] = $row["donvi_ten"];
    	return array("trangthai" => $row["nv_trangthai"], "cap" => $row["nv_quyen"]);
	} else {
      	return array("trangthai" => -1, "cap" => -1);
    }
  }
  public function FLogout(){
      if(isset($_SESSION["manhanvien"])){
        unset($_SESSION["manhanvien"]);
        session_destroy();
        return 1;
      } else {
        return 0;
      }
  }
  public function Faddcookie($id_quay, $so_quay){
    $pdo = ConnectDb::getInstance()->getConnection();
    $stmt = $pdo->prepare("call p_addcookie(:id_quay, :so_quay);");
    $stmt -> bindParam(':id_quay', $cookie_name, PDO::PARAM_STR);
    $stmt -> bindParam(':so_quay', $cookie_values, PDO::PARAM_STR);
    $stmt -> execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  
}