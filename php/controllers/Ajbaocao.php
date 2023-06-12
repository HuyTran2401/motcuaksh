<?php
require_once('php/ConnectDB.php');

class Ajbaocao
	{
		public function load_baocao_danhgia($madonvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_load_baocao_danhgia(:madonvi);");
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function xemdanhsach_baocaodanhgia($tungay,$denngay,$madonvi,$donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_xemds_baocaodanhgia_TH(:tungay,:denngay,:madonvi,:donvi);");
		    $stmt -> bindParam(':tungay', $tungay, PDO::PARAM_STR);
		    $stmt -> bindParam(':denngay', $denngay, PDO::PARAM_STR);
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi', $donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function xemdanhsach_baocaodanhgia_theonv($tungay,$denngay,$madonvi,$nhanvien){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_xemdanhsach_baocaodanhgia(:tungay,:denngay,:madonvi,:nhanvien);");
		    $stmt -> bindParam(':tungay', $tungay, PDO::PARAM_STR);
		    $stmt -> bindParam(':denngay', $denngay, PDO::PARAM_STR);
		    $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
		    $stmt -> bindParam(':nhanvien', $nhanvien, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function xemdanhsach_baocaobatso($tungay,$denngay,$loaihinh){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_xemdanhsach_baocaobatso(:tungay,:denngay,:loaihinh);");
		    $stmt -> bindParam(':tungay', $tungay, PDO::PARAM_STR);
		    $stmt -> bindParam(':denngay', $denngay, PDO::PARAM_STR);
		    $stmt -> bindParam(':loaihinh', $loaihinh, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function xemds_baocaodanhgia_TH($madonvi_ql,$tungay,$denngay,$donvi){
			$pdo = ConnectDb::getInstance()->getConnection();
		    $stmt = $pdo->prepare("call p_xemds_baocaodanhgia_TH(:tungay,:denngay,:madonvi_ql,:donvi);");   
		    $stmt -> bindParam(':tungay', $tungay, PDO::PARAM_STR);
		    $stmt -> bindParam(':denngay', $denngay, PDO::PARAM_STR);
		    $stmt -> bindParam(':madonvi_ql', $madonvi_ql, PDO::PARAM_STR);
		    $stmt -> bindParam(':donvi', $donvi, PDO::PARAM_STR);
		    $stmt -> execute();
		    return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}
?>
