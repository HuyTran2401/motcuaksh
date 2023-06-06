<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Hệ thống lấy ý kiến</title>
    <link rel="touch-icon" sizes="76x76" href="../store/lib/img/logo-vnpt.png">
      <link rel="icon" type="image/png" href="../store/lib/img/logo-vnpt.png">
      <link rel="stylesheet" type="text/css" href="../store/lib/themes/default/easyui.css">
      <link rel="stylesheet" type="text/css" href="../store/lib/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../store/lib/demo/demo.css">
    <script type="text/javascript" src="../store/lib/jquery.min.js"></script>
      <script type="text/javascript" src="../store/lib/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../store/lib/jquery.easyui.mobile.js"></script>
    <script type="text/javascript" src="../store/lib/lib.js"></script>
    <script id="script-lang" type="text/javascript" src="../store/lib/locale/easyui-lang-en.js"></script>
    <script type="text/javascript" src="../store/lib/datagrid-export.js"></script>
    <script type="text/javascript" src="../store/lib/datagrid-filter.js"></script>
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
    <?php
      include_once('../store/php/pages/fmenu.php');
    ?>
    <div id="container2" class="easyui-navpanel" style="width:100%;height:100%">
      <div class="easyui-layout" title="" style="height: 100%; padding:0px;background-color: #E9FAFF;">
        <div data-options="region:'north',title:'',split:true" style="height:100%;">
          <table id="dgdichvu" title="DM - NHÂN VIÊN" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb',
                method: 'post'">
          </table>

          <div id="tb" style="height:auto">
              <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-add',plain:true" onclick="$('#modal_themdichvu').window('open')">Thêm</a>
              <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-reload',plain:true" onclick="lammoi_dichvuGird()">Làm mới</a>
          </div>
          <div id="modal_themdichvu" class="easyui-window" title="THÊM NHÂN VIÊN" data-options="modal:true,closed:true,iconCls:'icon-add',method:'post'" style="width:500px;height:60%;padding:5px;">
              <div class="easyui-layout" data-options="fit:true">
                  <div data-options="region:'center'" style="padding:5px;">
                      <table style="width: 100%" border="0">
                        <tr>
                          <td style="width: 25%">Tên nhân viên</td>
                          <td>
                            <input class="easyui-textbox" name="dm_tennv" id="dm_tennv" required="true" style="width:100%;">
                          </td>
                        </tr>
                         <tr>
                          <td style="width: 25%">Ngày Sinh</td>
                          <td>
                            <input class="easyui-datebox" name="dm_ngaysinhnv" id="dm_ngaysinhnv" required="true" style="width:100%;">
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 25%">Hình ảnh</td>
                          <td>
                            <input class="easyui-filebox" name="img_canbo" id="img_canbo" required="true" style="width:100%;"
                            data-options="multiple: true, buttonText: 'Chọn ảnh', accept: 'image/*',
                                          onChange: function (newValue, oldValue) {
                                                readFile($(this).next().find('.textbox-value')[0]);
                                           }" accept="image/png, image/jpeg, image/jpg" />
                          </td>
                        </tr> 
                        <tr>
                        <td style="width: 25%">Tên đơn vị</td>
                         <td>
                            <select name="dm_iddonvi" id="dm_iddonvi" class="easyui-combobox" data-options="panelHeight: 180,cls: 'custom',editable: false" style="width:100%";>
                              <?php
                                foreach ($dsdonvi as $key) {
                                  echo '<option value="'.$key['id_donvi'].'">'.$key['ten_donvi'].'</option>';
                                }
                              ?>
                            </select>
                          </td>
                        </tr>
                        </tr>
                         <tr>
                          <td style="width: 25%">Lĩnh Vực</td>
                          <td>
                            <select name="dm_idlinhvuc" id="dm_idlinhvuc" class="easyui-combobox" data-options="panelHeight: 180,cls: 'custom',editable: false" style="width:100%";>
                              <?php
                                foreach ($ds_linhvuc as $key) {
                                  echo '<option value="'.$key['id_linhvuc'].'">'.$key['ten_linhvuc'].'</option>';
                                }
                              ?>
                            </select>
                          </td>
                        </tr>  
                         <tr>
                          <td style="width: 25%">Quầy</td>
                          <td>
                            <select name="dm_idquay" id="dm_idquay" class="easyui-combobox" data-options="panelHeight: 180,cls: 'custom',editable: false" style="width:100%";>
                              <?php
                                foreach ($dsquay as $key) {
                                  echo '<option value="'.$key['id_quay'].'">'.$key['ten_quay'].'</option>';
                                }
                              ?>
                            </select>
                          </td>
                        </tr>  
                        <tr>
                          <div style="margin-bottom:20px">
                            <ul id="ulimgctdguploaded" >
                            </ul>
                          </div>
                        </tr>                                                                                   
                           
                      </table>
                  </div>
                  <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0 0;">
                      <a class="easyui-linkbutton" data-options="iconCls:'icon-save'" href="javascript:void(0)" onclick="themnhanvien()" style="width:80px" id="luudm_dichvu" name="luudm_dichvu">LƯU</a>
                      <a class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" href="javascript:void(0)" onclick="huythemdichvu()" style="width:80px">ĐÓNG</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
        <?php
        #include_once('../store/php/pages/footer.php');
      ?>
    </div>
    <script type="text/javascript">
//           $("#ulimgctdguploaded").html('<img src="'+imageBase64+'" >');
           var cardview = $.extend({}, $.fn.datagrid.defaults.view, {
            renderRow: function(target, fields, frozen, rowIndex, rowData){
                var cc = [];
                cc.push('<td colspan=' + fields.length + ' style="padding:10px 5px;border:0;">');
                if (!frozen && rowData.img_canbo){
                    var aa = rowData.img_canbo.split('-');
                    var img = 'shirt' + aa[1] + '.gif';
                    cc.push('<img src="images/' + img_canbo + '" style="width:150px;float:left">');
                    cc.push('<div style="float:left;margin-left:20px;">');
                    for(var i=0; i<fields.length; i++){
                        var copts = $(target).datagrid('getColumnOption', fields[i]);
                        cc.push('<p><span class="c-label">' + copts.title + ':</span> ' + rowData[fields[i]] + '</p>');
                    }
                    cc.push('</div>');
                }
                cc.push('</td>');
                return cc.join('');
            }
        });
        $(function(){
            $('#dgdichvu').datagrid({
                view: cardview
            });
        });
//

      var imageBase64 = "";
      $(function(){
          $('#dm_iddonvi').combobox({
          onChange:function(){
               $('#dm_idlinhvuc').combobox('reload');
             }
          });

          $('#dm_idlinhvuc').combobox({
              valueField:'id_linhvuc',
              textField:'ten_linhvuc',
              url: 'go',
              onBeforeLoad: function(param){
                param.for ='fload_dslinhvuc';
                param.id_donvi = $("#dm_iddonvi").combobox('getValue').toString();
                $('#dm_idlinhvuc').combobox('setValues', []);
              }
          });

          var Dataloaidv = [
          {"ID_DV":0,"TEN_DV":" "},
          {"ID_DV":1,"TEN_DV":"Dịch vụ cảng"},
          {"ID_DV":2,"TEN_DV":"Dịch vụ vé xe"},
          {"ID_DV":3,"TEN_DV":"Dịch vụ trạm cân"},
          {"ID_DV":4,"TEN_DV":"Dịch vụ tàu cập cảng"},
          {"ID_DV":5,"TEN_DV":"Dịch vụ loại nghề"},
          {"ID_DV":6,"TEN_DV":"Dịch vụ tàu lưu trú"},
          {"ID_DV":7,"TEN_DV":"Dịch vụ chung"}
        ];
        var Datadonvitinh = [
          {"ID_DVT":1,"TEN_DVT":"tấn"},
          {"ID_DVT":2,"TEN_DVT":"lượt"},
          {"ID_DVT":3,"TEN_DVT":"Container"},
          {"ID_DVT":4,"TEN_DVT":"m3 (mét khối)"},
          {"ID_DVT":5,"TEN_DVT":"lần"},
          {"ID_DVT":6,"TEN_DVT":"Kw"},
          {"ID_DVT":7,"TEN_DVT":"m2/ngày"},
          {"ID_DVT":8,"TEN_DVT":"m2/tháng"},
          {"ID_DVT":9,"TEN_DVT":"tàu"}
        ];
        $('#dgdichvu').datagrid({
          rownumbers:true,
          url: 'go',
          queryParams: {
            for:'load_dsnhanvien',
              madonvi:<?php echo $_SESSION["madonvi"];?>
          },
          columns:[[
                {field:'id_canbo',title:'Mã nhân viên',halign:'center',width:90,align:'center'},
                {field:'hoten_canbo',title:'Tên nhân viên',halign:'center',width:100,align:'left',
                  editor:{
                    type:'combobox',
                    options:{
                      valueField:'id_canbo',
                      textField:'hoten_canbo',
                      data: Dataloaidv,
                      multiple:false,
                      editable:false,
                      required:false,
                      panelHeight: 150
                    }
                  }
                },
                {field:'donvi_canbo',title:'Đơn vị',halign:'center',width:250,align:'left',editor:'textbox'},
                {field:'linhvuc_canbo',title:'Bộ phận',halign:'center',width:200,align:'left',editor:'textbox'}, 
                {field:'ngaysinh_canbo',title:'Ngày Sinh',halign:'center',width:200,align:'left',editor:'textbox'},     
                {field:'img_canbo',title:'Hình ảnh',halign:'center',width:200,align:'left',editor:'textbox'},
                {field:'id_ct_quay',title:'Quầy',halign:'center',width:90,align:'left',editor:'textbox'},             
                {field:'tt_canbo',title:'Trạng Thái',halign:'center',width:100,align:'center',editor:'numberbox'},
                {field:'action',title:'Thao tác',width:100,align:'center',
                      formatter:function(value,row,index){
                          if (row.editing){
                              var s = '<a href="javascript:void(0)" onclick="dichvu_luu(this)">Lưu</a> ';
                              var c = '<a href="javascript:void(0)" onclick="dichvu_quaylai(this)">Quay lại</a>';
                              return s+c;
                          } else {
                              var e = '<a href="javascript:void(0)" onclick="dichvu_sua(this)">Sửa</a> ';
                              var d = '<a href="javascript:void(0)" onclick="dichvu_xoa(this)">Xóa</a>';
                              return e+d;
                          }
                      }
                  }
            ]],
            onBeforeEdit:function(index,row){
              $(this).datagrid('updateRow', {index:index,row:{editing:true}})
            },
            onAfterEdit:function(index,row){
              $(this).datagrid('updateRow', {index:index,row:{editing:false}})
            },
            onCancelEdit:function(index,row){
              $(this).datagrid('updateRow', {index:index,row:{editing:false}})
            }
          });
        $('#dgdichvu').datagrid('enableFilter');

     });

 // $("#ulimgctdguploaded").html('<img src="'+imageBase64+'" >');
         $(function(){
            $('#dgdichvu').datagrid({
                view: detailview,
                detailFormatter:function(index,row){
                    return '<div class="ddv" style="padding:5px 0"></div>';
                },
                onExpandRow: function(index,row){
                    var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
                    ddv.panel({
                        height:80,
                        border:false,
                        cache:false,
                        href:'datagrid21_getdetail.php?itemid='+row.itemid,
                        onLoad:function(){
                            $('#dgdichvu').datagrid('fixDetailRowHeight',index);
                        }
                    });
                    $('#dgdichvu').datagrid('fixDetailRowHeight',index);
                }
            });
        });
// Lưu hình ảnh
    function readFile(fthis) {
      $.each(fthis.files, function(index, value) {
        var FR = new FileReader();
        FR.addEventListener("load", function(e) {
          imageBase64 = e.target.result; 
        });
        FR.readAsDataURL(value);
      });
    }

        function getRowIndex(target){
          var tr = $(target).closest('tr.datagrid-row');
        return parseInt(tr.attr('datagrid-row-index'));
      }

      function dichvu_sua(target){
        var index = getRowIndex(target);
        $('#dgdichvu').datagrid('selectRow',index);
        $('#dgdichvu').datagrid('beginEdit',index);
      }

      function dichvu_luu(target){
        $("#luudm_dichvu").linkbutton('disable');
        if(!$('#dgdichvu').datagrid('validateRow')) return;
        $('#dgdichvu').datagrid('selectRow',getRowIndex(target));
        if ($('#dgdichvu').datagrid('getSelected')){
          $('#dgdichvu').datagrid('endEdit', getRowIndex(target));
          var rows = $('#dgdichvu').datagrid('getChanges');
          for(var i=0;i<rows.length;i++)
          {
            var id = processLuu_dichvu(rows[i].dvu_ma,rows[i].dvu_loaidv,rows[i].dvu_ten,rows[i].dvu_donvitinh,rows[i].dvu_dongia,rows[i].dvu_trangthai,rows[i].dvu_order);
          }
        }
      }

      function processLuu_dichvu(dvu_ma, dvu_loaidv, dvu_ten, dvu_donvitinh, dvu_dongia, dvu_trangthai, dvu_order){
        var loaidichvu = "";
        if (dvu_loaidv == "Dịch vụ cảng"){
          loaidichvu = 1;
        } else if (dvu_loaidv == "Dịch vụ vé xe"){
          loaidichvu = 2;
        } else if (dvu_loaidv == "Dịch vụ trạm cân"){
          loaidichvu = 3;
        } else if (dvu_loaidv == "Dịch vụ tàu cập cảng"){
          loaidichvu = 4;
        } else if (dvu_loaidv == "Dịch vụ loại nghề"){
          loaidichvu = 5;
        } else if (dvu_loaidv == "Dịch vụ tàu lưu trú"){
          loaidichvu = 6;
        } else if (dvu_loaidv == "Dịch vụ chung"){
          loaidichvu = 7;
        } else {
          loaidichvu = dvu_loaidv;
        }
        $.ajax({
          type: 'POST',
              url: 'go',
              data: {
                for: "luu_dichvu",
                dvu_ma: dvu_ma,
                dvu_maloaidv: loaidichvu,
                dvu_ten: dvu_ten,
                dvu_donvitinh: dvu_donvitinh,
                dvu_dongia: dvu_dongia,
                dvu_trangthai: dvu_trangthai,
                dvu_order: dvu_order
              }
            }).done(function(data){
              var j_data = JSON.parse(data);
              var kq = j_data.ketqua;
              if (kq >= 1) {
                $('#dgdichvu').datagrid('reload');
                message_success();
                $("#luudm_dichvu").linkbutton('enable');
              } else {
                $('#dgdichvu').datagrid('reload');
                message_error();
                $("#luudm_dichvu").linkbutton('enable');
              }
            });
      }

      function dichvu_xoa(target){
          $.messager.confirm('XÁC NHẬN','Bạn có muốn xóa dòng dữ liệu này không? Không thể hoàn tác sau khi XÓA!',function(r){
          if (r){
            var row = $('#dgdichvu').datagrid('getSelected');
            if (row){
              processXoa_dichvu(row.dvu_ma);
            }
          }
        });
      }

      function processXoa_dichvu(dvu_ma){
        $.ajax({
          type: 'POST',
              url: 'go',
              data: {
                  for: "xoa_dichvu",
                  dvu_ma: dvu_ma
              }
            }).done(function(data){
            var j_data = JSON.parse(data);
            var kq = j_data.ketqua;
            if (kq == '-1') {
              $.messager.alert('Thông báo','Dịch vụ này đã được sử dụng! Không thể XÓA, chỉ được CẬP NHẬT!','warning');
            } else if (kq >= 1) {
              $('#dgdichvu').datagrid('reload');
              message_xoa_success();
            }else {
              $('#dgdichvu').datagrid('reload');
              message_xoa_error();
            }
          });
      }

      function themnhanvien(){
       //  $("#ulimgctdguploaded").html('<img src="'+imageBase64+'" >');
          var dm_tennv = $("#dm_tennv").textbox('getValue');
          var dm_ngaysinh = $("#dm_ngaysinhnv").datebox('getValue');
          var dm_iddonvi = $("#dm_iddonvi").combobox('getValue');
          var dm_idlinhvuc = $("#dm_idlinhvuc").combobox('getValue');
          var dm_idquay = $("#dm_idlinhvuc").combobox('getValue');          
        $.ajax({
          type: 'POST',
              url: 'go',
              data: {
                  for: "luuthongtinnhanvien",
                  dm_tennv: dm_tennv,
                  dm_ngaysinhnv:convertDate(dm_ngaysinh),
                  dm_iddonvi: dm_iddonvi,
                  dm_idlinhvuc: dm_idlinhvuc,
                  dm_idquay: dm_idquay,
                  img_canbo:imageBase64
              }
        }).done(function(data){
          var j_data = JSON.parse(data);
          var kq = j_data.ketqua;
          if (kq >= 1) {
            message_them_success();
            $('#dgdichvu').datagrid('reload');
          } else {
            message_them_error();
          }
        });
        
      }

      function dichvu_quaylai(target){
        $('#dgdichvu').datagrid('cancelEdit', getRowIndex(target));
      }

      function huythemdichvu(){
        $('#modal_themdichvu').window('close');
      }

      function lammoi_dichvuGird(){
        $('#dgdichvu').datagrid('reload');
      }
      function convertDate(arr){
      if (arr != "") {
        var d_arr = arr.split("/");
            var date = d_arr[2] + "-" + d_arr[1] + "-" + d_arr[0];
            return date;
      } else {
        return "";
      }
      }
    </script>

  </body>
</html>
