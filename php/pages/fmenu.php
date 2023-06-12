<style>
    @media screen and (max-width: 450px) {
        .title-menu-cha{
          display: none;
        }
    }
</style>
<div style="padding:0px;">
   
    <a href="javascript:void(0);" target="_blank" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-large-smartart', size:'large', showEvent:'click'" style="display: <?php echo ($_SESSION['capql'] == '0' ? '' : 'none'); ?>">Danh mục</a>
    <a href="javascript:void(0);" target="_blank" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-report-large', size:'large', showEvent:'click'">Báo cáo</a>
    <a href="javascript:void(0);" target="_blank" class="easyui-menubutton" data-options="menu:'#mm4',iconCls:'icon-setting', size:'large', showEvent:'click'" style="display: <?php echo ($_SESSION['capql'] == '0' ? '' : 'none'); ?>">Hệ thống</a>
    <a href="go?page=_main" class="easyui-linkbutton" data-options="plain:true, iconCls:'icon-about',size:'large'">Giới thiệu</a>
    <a href="javascript:void(0);" class="easyui-menubutton" style="float: right;" data-options="menu:'#mm3',iconCls:'icon-man',size:'large', showEvent:'click'"><?php echo $_SESSION["tenhanvien"] ?></a>
</div>
<div id="mm1" style="width:250px;">
    <a href="go?page=_nhanvien" target="_blank" data-options="plain:true,iconCls:'icon-danhmuc'" class="easyui-linkbutton">DM - Nhân viên</a>
</div>
<div id="mm2" style="width:200px;">
    <a href="go?page=_rpbaocaodanhgia"  data-options="plain:true,iconCls:'icon-report'" class="easyui-linkbutton" style="display: <?php echo (($_SESSION['capquanly'] != '2' && $_SESSION['capquanly'] != '3') ? '' : 'none'); ?>">Báo cáo thống kê đánh giá</a>
    <a href="go?page=_rpbaocaodanhgia_tonghop" target="_blank" data-options="plain:true,iconCls:'icon-report'" class="easyui-linkbutton" style="display: <?php echo (($_SESSION['capquanly'] != '2' && $_SESSION['capquanly'] != '3' ) ? '' : 'none'); ?>">Báo cáo tổng hợp</a>
    <a href="go?page=_kqbatso" target="_blank" data-options="plain:true,iconCls:'icon-report'" class="easyui-linkbutton" style="display: <?php echo (($_SESSION['capquanly'] != '2' && $_SESSION['capquanly'] != '3' ) ? '' : 'none'); ?>">Báo cáo kết quả bắt số</a>
</div>
<div id="mm3" style="width:160px;">
    <b><?php echo $_SESSION["tenhanvien"]; ?></b>
    <div data-options="iconCls:'icon-info-em'" onclick="thongtinnhanvien();">Thông tin nhân viên</div>
    <div data-options="iconCls:'icon-changepass'" onclick="$('#mncapnhatmatkhau').dialog('open');">Đổi mật khẩu</div>
    <div data-options="iconCls:'icon-logout'" onclick="xacnhandangxuat();">
         <a style="text-decoration: none" href="go?page=_login">Đăng xuất</a>
    </div>
</div>
<div id="mm4" style="width:100px;">
    <a href="go?page=_cauhinhketnoi" target="_blank" data-options="plain:true,iconCls:'icon-connect'" class="easyui-linkbutton" style="display: none">Cấu hình kết nối</a>
    <a href="go?page=_thamsodonvi" target="_blank" data-options="plain:true,iconCls:'icon-variable'" class="easyui-linkbutton">Tham số đơn vị</a>
</div>
<div id="mncapnhatmatkhau" class="easyui-dialog" style="width:400px;height:300px"
    data-options="title:'Cập nhật mật khẩu',buttons:'#bb', modal:true, closed: true">
    <form id="fmncapnhatmatkhau" method="post" style="width:350px; margin: auto;">
      <h2 style="text-align: center;"><?php echo $_SESSION["tennv"]; ?></h2>
      <div style="margin-top:20px">
          <input class="easyui-passwordbox" name="password_old" prompt="Mật khẩu cũ" iconWidth="28"
            style="width:100%;height:34px;padding:10px">
      </div>
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
  <a href="javascript:void(0)" onclick="$('#mncapnhatmatkhau').dialog('close');" class="easyui-linkbutton">Đóng</a>
  <a href="javascript:void(0)" onclick="$('#fmncapnhatmatkhau').submit();" class="easyui-linkbutton">Lưu</a>
</div>
<div id="mncapnhatthongtin" class="easyui-dialog" style="width:700px;height:290px"
    data-options="title:'Thông tin nhân viên',buttons:'#ttbb', modal:true, closed: true">
    <form id="fmncapnhatthongtin" method="post" style="width:100%; margin: auto;">
      <table style="width: 100%" border="0">
        <tr>
          <td rowspan="5" style="width: 25%" align="center">
            <img src="lib/img/user_pic.png">
          </td>
        </tr>
        <tr>
          <td>
            <input class="easyui-textbox" label="Họ tên nhân viên" labelWidth="120px" name="capnhat_hoten" id="capnhat_hoten" style="width:100%;" />
          </td>
        </tr>
        <tr>
          <td>
            <select class="easyui-combobox" label="Giới tính" labelWidth="120px" name="capnhat_gioitinh" id="capnhat_gioitinh" data-options="panelHeight: 60,editable:false" style="width:100%;" />
              <option value="1">Nam</option>
              <option value="2">Nữ</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input class="easyui-textbox" label="Địa chỉ" labelWidth="120px" name="capnhat_diachi" id="capnhat_diachi" style="width:100%;" /></td>
        </tr>
        <tr>
          <td>
            <input class="easyui-datebox" label="Ngày sinh" labelWidth="120px" name="capnhat_ngaysinh" id="capnhat_ngaysinh" style="width:100%;" data-options="formatter:dateformatter,parser:dateparser,editable:false" />
          </td>
        </tr>
        <tr>
          <td align="center" style="font-weight: bold"><?php echo $_SESSION["tennv"]; ?></td>
          <td>
            <input class="easyui-textbox" label="Số điện thoại" labelWidth="120px" name="capnhat_sodienthoai" id="capnhat_sodienthoai" style="width:100%;" />
          </td>
        </tr>
      </table>
    </form>
</div>
<div id="ttbb">
  <a href="javascript:void(0)" onclick="$('#mncapnhatthongtin').submit();" class="easyui-linkbutton">Cập nhật</a>
  <a href="javascript:void(0)" onclick="$('#mncapnhatthongtin').dialog('close');" class="easyui-linkbutton">Đóng</a>
</div>
<script type="text/javascript">
  $(function(){
    $('#fmncapnhatmatkhau').on('submit', function(donard){
      donard.preventDefault();
      var c = $(this).find('input[name="password_old"]').val().trim();
      var a = $(this).find('input[name="password_new"]').val().trim();
      var b = $(this).find('input[name="rw_password_new"]').val().trim();
      if(a == b){
        $.ajax({
          type: 'POST',
          url: 'go',
          data: {
            for: "capnhatmatkhau",
            matkhaucu: MD5(c),
            matkhaumoi: MD5(b)
          },
          beforeSend:  function(){
          }
        })
        .done(function(ret){
          var val = JSON.parse(ret);
          if(val.trangthai == "1"){
            $.messager.alert('Thông báo', 'Cập nhật thành công!','info');
          } else {
            $.messager.alert('Cảnh báo', 'Cập nhật không thành công!','error');
          }
        });
      } else {
        $.messager.alert('Cảnh báo', 'Mật khẩu nhập lại không đúng!','warning');
      }
    });
  });

  function xacnhandangxuat(){
      $.messager.confirm('Đăng xuất', 'Xác nhận đăng xuất?', function(r){
          if (r){
            lichsuchuongtrinh('Đăng xuất','Thoát khỏi hệ thống');
            $.post( "go", { for: "_login" }, function( data ) {
              if(data){
                location.reload();
              }
            });
          }
      });
  }

 /* function thongtinnhanvien(){
    $('#mncapnhatthongtin').dialog('open');
    $("#capnhat_hoten").textbox('setValue',<?php echo "'".$_SESSION["tennv"]."'"; ?>);
    $("#capnhat_gioitinh").combobox('setValue',<?php echo "'".$_SESSION["gioitinh"]."'"; ?>);
    $("#capnhat_diachi").textbox('setValue',<?php echo "'".$_SESSION["diachi"]."'"; ?>);
    $("#capnhat_ngaysinh").textbox('setValue',convertngaysinh(<?php echo "'".$_SESSION["ngaysinh"]."'"; ?>));
    $("#capnhat_sodienthoai").textbox('setValue',<?php echo "'".$_SESSION["sodienthoai"]."'"; ?>);
  } */
  function convertngaysinh(arr){
    var d_arr = arr.split("-");
    var date = d_arr[2] + "/" + d_arr[1] + "/" + d_arr[0];
    return date;
  }
</script>
