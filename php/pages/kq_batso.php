<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>BỘ PHẬN MỘT CỬA UBND TP SÓC TRĂNG</title>
      <link rel="touch-icon" sizes="76x76" href="../motcuaksh/lib/img/icons/favicon.ico">
      <link rel="icon" type="image/png" href="../motcuaksh/lib/img/icons/favicon.ico">
       <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/default/easyui.css">
      <!--  <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/metro/easyui.css"> -->
       <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/mobile.css">
      <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/icon.css">
      <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/demo/demo.css">
      <script type="text/javascript" src="../motcuaksh/lib/jquery.min.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.mobile.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/lib.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/app.js"></script>
      <script id="script-lang" type="text/javascript" src="../motcuaksh/lib/locale/easyui-lang-en.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/datagrid-export.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/datagrid-filter.js"></script>
      <script type="text/javascript" src="https://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
      <style type="text/css">
      #container2 {
        width: 960px;
        position: relative;
        margin:0 auto;
        line-height: 1.4em;
      }
      @media only screen and (max-width: 479px){
          #container2 { width: 90%; }
      }
    </style>
  </head>
  <body>
    <div id="container2" class="easyui-navpanel" style="width:100%;height:100%">
      <div class="easyui-layout" title="" style="height: 100%; padding:0px;background-color: #E9FAFF;">
           <div data-options="region:'north'" style="height:48px;">
               <?php include_once('../motcuaksh/php/pages/fmenu.php'); ?>
           </div>
           <div data-options="region:'north',title:'',split:true" style="height:100%;">
            <table id="dgdichvu" title="THÔNG TIN KẾT QUẢ BẮT SỐ ONLINE" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb',
                  method: 'post'">
            </table>
             <div id="tb" style="height:auto">              
              <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-reload',plain:true" onclick="lammoi()">Làm mới</a>
          </div>
            </div>
        </div>
          <div id="thongtin_chitiet" class="easyui-window"  title="PHIẾU ĐĂNG KÝ" data-options="closed:true,iconCls:'icon-add'" style="width:380px;height: 260px;padding:10px;">
          <div><table style="width: 100%;height: 100%">
              <tr align="center">
                  <td  style="width: 60%">
                    <input class="easyui-textbox" id="sdt" name="sdt" style="width:90%"  labelWidth="110px" label="Số điện thoại:" readonly="true">
                  </td>                  
            </tr>
            <tr  align="center">
                <td>
                    <input class="easyui-textbox"  id="stt" name="stt" style="width:90%;color:red"  labelWidth="110px" label="Số thứ tự:" readonly="true">
                </td>              
          </tr>
            <tr  align="center">
                <td  style="width: 80%">
                  <input class="easyui-textbox" id="quay" name="quay" style="width:90%"  labelWidth="110px" label="Quầy số :" readonly="true">
                </td>               
          </tr>
          <tr  align="center">
                <td  style="width: 80%">
                  <input class="easyui-textbox" id="time" name="time" style="width:90%"  labelWidth="110px" label="Thời gian bắt số:" readonly="true">
                </td>               
          </tr>
          <tr  align="center">
                <td>
                  <label for="name" style="color:red">(Phiếu này chỉ có giá trị trong ngày)</label>
                </td>               
          </tr>
          <tr align="center" >             
               <td>
                  <a class="easyui-linkbutton"  id="phuthu_huy" iconCls="icon-cancel" onclick="f_dong()">ĐÓNG</a>
               </td>
          </tr>
          </table>
        </div>
        </div>
    </div>
    <script type="text/javascript">  
         function lammoi(){
            $('#dgdichvu').datagrid('reload');
         } 
         $(function(){             
         const value = `${document.cookie}`;
            var cookie_arr = value.split(';');
            var cookie = "";
            for (var i = 0;i<cookie_arr.length;i++){
                if(cookie_arr[i].includes('TT_HANHCHINH') == true){
                    var ck = cookie_arr[i].split('=');
                    var ck_arr = ck[1].split('.//.')
                    cookie = ck_arr[0];
                }
            }            
        $('#dgdichvu').datagrid({
          rownumbers:true,
          url: 'go',
          queryParams: {
            for:'load_dsketquabatso',
              user_online:cookie
          },
          columns:[[  
                 {field:'action',title:'Thao tác',width:160,align:'center',
                  formatter:function(value,row,index){
                    var ph = '<a href="javascript:void(0)" class="easyui-linkbutton" onclick="chitiet(this)">XEM PHIẾU ĐĂNG KÝ</a> ';
                    return ph;
                  }
                },  
                {field:'quay',title:'Quầy',halign:'center',width:50,align:'center',editor:'textbox'},	
				{field:'stt',title:'Số thứ tự',halign:'center',width:60,align:'center',editor:'textbox'}, 
				{field:'trang_thai',title:'Trạng Thái',halign:'left',width:200,align:'left',editor:'numberbox'},   				
                {field:'ngay_tn',title:'Ngày bắt số',halign:'center',width:200,align:'center'},
                {field:'ma_khachhang',title:'Mã Khách Hàng',halign:'center',width:100,align:'center',editor:'textbox'},                   
                {field:'ten_quay',title:'Tên Quầy',halign:'center',width:400,align:'center',editor:'textbox'}                        
                
            ]]     
          });

        $('#dgdichvu').datagrid('enableFilter');
          
     });
         function chitiet(target){
          $('#thongtin_chitiet').window('open');
          $('#dgdichvu').datagrid('selectRow',getRowIndex(target));
          var row = $('#dgdichvu').datagrid('getSelected');
          var index = getRowIndex(target);
          var stt =row.stt;   
          var ngay_tn =row.ngay_tn;  
          $("#sdt").textbox('setValue',row.ma_khachhang);
          $("#stt").textbox('setValue',row.stt);
          $("#quay").textbox('setValue',row.quay);
          $("#time").textbox('setValue',row.ngay_tn);
          $('#thongtin_chitiet').window('open');
         } 
      function f_dong(){
        $('#thongtin_chitiet').window('close');
      }
      function getRowIndex(target){
        var tr = $(target).closest('tr.datagrid-row');
        return parseInt(tr.attr('datagrid-row-index'));
      }
    </script>
  </body>
</html>
