<?php
session_start();
include_once('php/controllers/TaikhoanController.php');
include_once('php/controllers/AjDanhmuc.php');
include_once('php/controllers/Ajbatso.php');
include_once('php/controllers/Ajbaocao.php');
if(isset($_GET['check'])) {
  ob_start();
  switch ($_GET['check']) {
        case "_test":
            include("php/pages/test.php");
            break;
        case "_home":
            include("php/pages/trangchu.php");
            break;
        case "_batso":
            include("php/pages/batso.php");
            break;
        case "_login":
            include("php/pages/login.php");
            break;
        case "_kiemtra":
            include("php/pages/kiemtra.php");
            break;            
        case "_dangnhap":
            include("php/pages/dangnhap.php");
            break;
        case "_ketqua":
            include("php/pages/kq_batso.php");
            break;
	    case "_huongdan":
            include("php/pages/huongdansudung.php");	
             break;
        case "_qrcode":
            include("php/pages/qrcode.php");  
            break;       
        case "_nhanvien":
            include("php/pages/dm_nhanvien.php");    
             break;     
        case "_cookie":
            $ds_dmdonvi = (new AjDanhmuc())->Fload_ds_dmdonvi($_SESSION['madonvi']);
            $dsquaytheodv = (new AjDanhmuc())->dsquay_theodonvi($_SESSION['madonvi']); 
            include("php/pages/cookie.php");          
           break;  
        
  }
  echo ob_get_clean();
}

//if(!isset($_SESSION["sansang"])){
//  header("Location: go?check=_login");
//}

if(isset($_POST['for'])) {
  switch ($_POST['for']) {
        case "cookie":
            if(isset($_POST['id_quay']) && isset($_POST['so_quay'])){
                $id_quay  = $_POST["id_quay"];
                $so_quay = $_POST["so_quay"];
                $trangthai = (new TaikhoanController())->Faddcookie($id_quay,$so_quay);
                echo json_encode($trangthai);                
            }
            break;   
        case "login":
            if(isset($_POST['taikhoan']) && isset($_POST['matkhau']) && isset($_POST['mobile'])){
                $md5pass = md5($_POST['matkhau']);
                $trangthai = (new TaikhoanController())->FLogin($_POST['taikhoan'], $md5pass);
                echo json_encode($trangthai);                
            }
            break;
        case "themmatkhau":
            if(isset($_POST['matkhaumoi'])){
              $md5pass = md5($_POST['matkhaumoi']);
              $ret = (new TaikhoanController())->FCapnhatmatkhau($_SESSION["taikhoan"], "-", $md5pass);
              $_SESSION["sansang"] = $ret["trangthai"];
              echo json_encode($ret);
            }
            break;
        case "capnhatmatkhau":
            if(isset($_POST['matkhaucu']) && isset($_POST['matkhaumoi'])){
              $md5passcu = md5($_POST['matkhaucu']);
              $md5passmoi = md5($_POST['matkhaumoi']);
              $trangthai = (new TaikhoanController())->FCapnhatmatkhau($_SESSION["taikhoan"], $md5passcu, $md5passmoi);
              echo json_encode($trangthai);
            }
            break;
        case "fload_dslinhvuc":
            if(isset($_POST["madonvi"])){
                $madonvi = $_POST["madonvi"];
                $id_donvi = $_POST["id_donvi"];
                $ds_linhvuc  = (new AjDanhmuc())->Fload_dslinhvuc($madonvi,$id_donvi);
                echo json_encode($ds_linhvuc);
              }
            break;
          case "Fload_donvi_canbo":
            if(isset($_POST["madonvi"])){
              $madonvi = $_POST["madonvi"]; 
              $dsdonvi = (new AjDanhmuc())->Fload_donvi_canbo($madonvi);
              echo json_encode($dsdonvi);
              }
            break;
        case "luuthongtinnhanvien":
            if(isset($_POST["dm_tennv"])){
              $madonvi = $_POST["madonvi"];
              $dm_tennv = $_POST["dm_tennv"];
              $dm_ngaysinhnv = $_POST["dm_ngaysinhnv"];
              $dm_iddonvi = $_POST["dm_iddonvi"];
              $dm_idlinhvuc = $_POST["dm_idlinhvuc"];
              $dm_idquay = $_POST["dm_idquay"];
              $img_canbo = $_POST["img_canbo"];
              $kq = (new AjDanhmuc())->FThem_nhanvien($madonvi,$dm_tennv,$dm_ngaysinhnv,$dm_iddonvi,$dm_idlinhvuc,$dm_idquay,$img_canbo);
              echo json_encode($kq);
            }
            break;   
        case "load_dsnhanvien":
        if(isset($_POST["madonvi"])){
          $id_donvi = $_POST["madonvi"];              
          $trangthai  = (new AjDanhmuc())->Fload_dsnhanvien($id_donvi);
          echo json_encode($trangthai);
          }
        break;
        case "Fload_stt_vuagoi":
        if(isset($_POST["madonvi"])){
          $id_donvi = $_POST["madonvi"]; 
          $cookie = $_POST["cookie"];              
          $trangthai  = (new AjDanhmuc())->Fload_stt_vuagoi($id_donvi,$cookie);
          echo json_encode($trangthai);
          }
        break;
        case "load_thongtinnhanvien":
        if(isset($_POST["cookie"])){
          $cookie = $_POST["cookie"];   
          $kq  = (new AjDanhmuc())->Loadthongtinnhanvien($cookie);
          echo json_encode($kq);  
          }
        break;
         case "load_thongtinquaytiepnhan":
        if(isset($_POST["madonvi"])){
          $madonvi = $_POST["madonvi"];   
          $kq  = (new AjDanhmuc())->Loadthongtinsoquay($madonvi);
          echo json_encode($kq);  
          }
        break;
        case "batsothutu":
          if(isset($_POST["bnt_id"])){
              $bnt_id = $_POST["bnt_id"];
              $user_online = $_POST["user_online"];
              $trangthai = (new Ajbatso())->FThem_sttbatso($bnt_id,$user_online);
              echo json_encode($trangthai);
            }
        break;
        case "batsothutu_1":
          if(isset($_POST["bnt_id"])){
              $bnt_id = $_POST["bnt_id"];
              $user_online = $_POST["user_online"];
              $trangthai = (new Ajbatso())->FThem_sttbatso_1($bnt_id,$user_online);
              echo json_encode($trangthai);
            }
        break;
        case "load_dsketquabatso":
        if(isset($_POST["user_online"])){
          $user_online = $_POST["user_online"];        
          $trangthai  = (new Ajbatso())->Fload_dsketquaonline($user_online);
          echo json_encode($trangthai);
          }
         break; 
        case "update_nhanvien":
            if(isset($_POST["id_canbo"])){
                $img_canbo = $_POST["img_canbo"];
              $id_canbo = $_POST["id_canbo"];
              $hoten_canbo = $_POST["hoten_canbo"];
              $donvi_canbo = $_POST["donvi_canbo"];
              $linhvuc_canbo = $_POST["linhvuc_canbo"];
              $ngaysinh_canbo = $_POST["ngaysinh_canbo"];
              $id_ct_quay = $_POST["id_ct_quay"];
              $tt_canbo = $_POST["tt_canbo"];
              $donvi_quanli = $_POST["donvi_quanli"];
              $kq = (new AjDanhmuc())->Fupdate_nhanvien($img_canbo,$id_canbo,$hoten_canbo,$donvi_canbo,$linhvuc_canbo,$ngaysinh_canbo,$id_ct_quay,$tt_canbo,$donvi_quanli);
              echo json_encode($kq);
            }
        break;
        case "xoa_nhanvien":
            if(isset($_POST["madonvi"])){
              $id_canbo = $_POST["id_canbo"];
              $madonvi = $_POST["madonvi"];
              $kq = (new AjDanhmuc())->FXoa_nhanvien($id_canbo,$madonvi);
              echo json_encode($kq);
            }
        break;
        case "loadlailinhvuc":
            if(isset($_POST["madonvi"])){
              $madonvi = $_POST["madonvi"];
              $donvi_canbo = $_POST["donvi_canbo"];
              $kq = (new AjDanhmuc())->Floadlai_linhvuc($madonvi,$donvi_canbo);
              echo json_encode($kq);
            }
        break;
        case "luu_danhgiaykien":
            if(isset($_POST["madonvi"])){
              $madonvi = $_POST["madonvi"];
              $id_quay = $_POST["id_quay"];
              $id_canbo = $_POST["id_canbo"];
              $donvi_canbo = $_POST["donvi_canbo"];
              $stt_vuagoi = $_POST["stt_vuagoi"];
              $bnt_id = $_POST["bnt_id"]; 
              $noidung = $_POST["noidung"];               
              $kq = (new AjDanhmuc())->Fluu_danhgiaykien($madonvi,$id_quay,$id_canbo,$donvi_canbo,$stt_vuagoi,$bnt_id,$noidung);
              echo json_encode($kq);
            }
        break;   
        case "load_baocao_danhgia":
            if(isset($_POST["madonvi"])){
              $madonvi = $_POST["madonvi"];
              $kq = (new Ajbaocao())->load_baocao_danhgia($madonvi);
              echo json_encode($kq);
            }            
        break;
        case "rp_xemdanhsach_baocaodanhgia":
            if(isset($_POST["madonvi"])){
              $tungay = $_POST["tungay"];
              $denngay = $_POST["denngay"];              
              $madonvi = $_POST["madonvi"];
              $nhanvien = $_POST["nhanvien"];
              $kq = (new Ajbaocao())->xemdanhsach_baocaodanhgia($tungay,$denngay,$madonvi,$nhanvien);
              echo json_encode($kq);
            }            
        break;
        //case "_logout":
         //   echo (new TaikhoanController())->FLogout();
          //  break;
        default:
            echo "Chức năng không tồn tại";
    }

}
if(isset($_GET['page'])) {
 /* if(!isset($_SESSION["sansang"])){
    header("Location: go?check=_login");
  } else {
    if($_SESSION["sansang"] != "1"){
      header("Location: go?check=_login");
    }
  }*/
  ob_start();
  switch ($_GET['page']) {
        case "_home":
            include("php/pages/index.php");
            break;
        case "_login":
            include("php/pages/login.php");
            break;
        case "_mlogin":
            include("php/pages/mobile/fmlogin.php");
            break;
        case "_homepage":
            include("php/pages/index.php");
            break;
        case "_nhanvien":
            $dsdonvi = (new AjDanhmuc())->Fload_donvi_canbo($_SESSION['madonvi']);
            $ds_linhvuc = (new AjDanhmuc())->Fload_dslinhvuc('1', '1', '3');
            $dsquay = (new AjDanhmuc())->Fload_dsquay('1', '-1', '3');
            include("php/pages/dm_nhanvien.php");
            break;  
        case "_logout":
        include("php/pages/trangchu.php");
        break;  
        case "_batso":
        include("php/pages/batso.php");
        break;
        case "_ketqua":
            include("php/pages/kq_batso.php");
            break;
        case "_baocao":
            $dsnhanvien = (new AjDanhmuc())->F_dsnhanvien($_SESSION['madonvi']);
            include("php/pages/rpbaocaodanhgia.php");
        break;
        case "_cookie":
            // $ds_dmdonvi = (new AjDanhmuc())->Fload_ds_dmdonvi($_SESSION['madonvi']);
            // $dsquaytheodv = (new AjDanhmuc())->dsquay_theodonvi($_SESSION['madonvi']); 
            include("php/pages/cookie.php");          
           break;  
        case "_cookie_layykien":
             $ds_dmdonvi = (new AjDanhmuc())->Fload_ds_dmdonvi($_SESSION['madonvi']);
             $dsquaytheodv = (new AjDanhmuc())->dsquay_theodonvi($_SESSION['madonvi']); 
            include("php/pages/cookie_layykien.php");          
           break; 
        case "_inbaocao":
            $type = $_GET['type'];
            $var1 = $_GET['variable1'];
            $var2 = $_GET['variable2'];
            $var3 = $_GET['variable3'];
            $var4 = $_GET['variable4'];
            include("php/pages/print_preview.php");
            break;
        case "_inpreview":
            $type = $_GET['type'];
            $pre_var1 = $_GET['param1'];
            $pre_var2 = $_GET['param2'];
            $pre_var3 = $_GET['param3'];
            $pre_var4 = $_GET['param4'];
            include("php/reports/viewer.php");
            break;               
        default:
           include("php/pages/ferror.php");           
  }
  echo ob_get_clean();
}

?>