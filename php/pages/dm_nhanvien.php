<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Hệ thống lấy ý kiến</title>
    <link rel="touch-icon" sizes="76x76" href="../motcuaksh/lib/img/logo-vnpt.png">
      <link rel="icon" type="image/png" href="../motcuaksh/lib/img/logo-vnpt.png">
      <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/default/easyui.css">
      <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../motcuaksh/lib/demo/demo.css">
    <script type="text/javascript" src="../motcuaksh/lib/jquery.min.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.min.js"></script>
      <script type="text/javascript" src="../motcuaksh/lib/jquery.easyui.mobile.js"></script>
    <script type="text/javascript" src="../motcuaksh/lib/lib.js"></script>
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
    <?php
      include_once('../motcuaksh/php/pages/fmenu.php');
    ?>
    <div id="container2" class="easyui-navpanel" style="width:100%;height:100%">
      <div class="easyui-layout" title="" style="height: 100%; padding:0px;background-color: #E9FAFF;">
        <div data-options="region:'north',title:'',split:true" style="height:100%;">
          <table id="dgnhanvien" title="DM - NHÂN VIÊN" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb',
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
                              <input class="easyui-filebox" name="img_canbo"  id="img_canbo" required="true" style="width:100%;"
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
                        <!--</tr> -->
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
        #include_once('../motcuaksh/php/pages/footer.php');
      ?>
    </div>
    <script type="text/javascript">
      var imageBase64 = "";
      var data_linhvuc = "";
      // var data_linhvuc = [
      //       {id_linhvuc: '6', ten_linhvuc: 'Lĩnh vực 3 Sở công nghệ 1', selected: '1'},
      //       {id_linhvuc: '5', ten_linhvuc: 'Lĩnh vực 2 Sở công nghệ 2', selected: '1'},
      //       {id_linhvuc: '4', ten_linhvuc: 'Lĩnh vực 1 Sở công nghệ 3', selected: '1'}
      //   ];  
      $(document).ready(function (){
      //  loadlinhvuc();

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
        $('#dgnhanvien').datagrid({
          view: cardview
        });
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
            param.madonvi = <?php echo $_SESSION["madonvi"]; ?>, 
            param.id_donvi = $("#dm_iddonvi").combobox('getValue').toString();
            $('#dm_idlinhvuc').combobox('setValues', []);
          }
        });
        $('#dgnhanvien').datagrid({
          rownumbers:true,
          url: 'go',
          queryParams: {
            for:'load_dsnhanvien',
            madonvi:<?php echo $_SESSION["madonvi"];?>
          },
          view: detailview,
          detailFormatter:function(index,row){
            return '<div class="ddv" style="padding:5px 0"></div>';
          },
          onExpandRow: function(index,row){
            var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
            ddv.panel({
              height:210,
              border:true,
              cache:false,
              href:'php/pages/loadanh_getdetail.php?id_canbo='+row.id_canbo,
              onLoad:function(){
                  $('#dgnhanvien').datagrid('fixDetailRowHeight',index);
              }
            });
            $('#dgnhanvien').datagrid('fixDetailRowHeight',index);
          },
          columns:[[
            {field:'id_canbo',title:'Mã nhân viên',halign:'center',width:85,align:'center'},
            {field:'hoten_canbo',title:'Tên nhân viên',halign:'center',width:200,align:'left',editor:'textbox'},
            {field:'madonvi_canbo',title:'Mã đơn vị',hidden:true,editor:'textbox'},
            {field:'donvi_quanli',title:'Đơn vị quản lí',hidden:true,editor:'textbox'},
            {field:'donvi_canbo',title:'Đơn vị',halign:'center',width:200,align:'left',
                    editor:{
                    type:'combobox',
                    options:{
                      valueField:'id_donvi',
                      textField:'ten_donvi',
                      url: 'go',
                      queryParams: {
                        for:'Fload_donvi_canbo',
                        madonvi:<?php echo $_SESSION["madonvi"]; ?>, 
                      },
                      multiple:false,
                      editable:false,
                      required:false,
                      panelHeight: 150,
                      panelWidth: 300,
                      onChange: function(value){
                        $.ajax({
                          type: 'POST',
                          url: 'go',
                          data: {
                                for: "loadlailinhvuc",
                                madonvi: <?php echo $_SESSION["madonvi"] ?>,
                                donvi_canbo: value
                              }
                        }).done(function(data){
                          var j_data = JSON.parse(data);
                          var dg = $('#dgnhanvien');
                          var row = dg.datagrid('getSelected');
                          var rowIndex = dg.datagrid('getRowIndex', row);
                          var ed = dg.datagrid('getEditor', {index:rowIndex,field:'linhvuc_canbo'});
                          $(ed.target).combobox('loadData',j_data);
                        });
                      }
                    }
                  }
            },
            {field:'id_linhvuc',title:'ID lĩnh vực',hidden:true,editor:'textbox'}, 
            {field:'linhvuc_canbo',title:'Bộ phận',halign:'center',width:200,align:'left',
              editor:{
                type:'combobox',
                options:{
                  valueField:'id_linhvuc',
                  textField:'ten_linhvuc',
                  url: 'go',
                  data: data_linhvuc,                      
                  multiple:true,
                  editable:true,
                  required:true,
                  panelHeight: 150
                }
              }
            },
            {field:'ngaysinh_canbo',title:'Ngày Sinh',halign:'center',width:90,align:'center',editor:'datebox'},
            {field:'id_ct_quay',title:'Quầy',halign:'center',width:50,align:'center',editor:'textbox'},
            {field:'tt_canbo',title:'Trạng Thái',halign:'center',width:80,align:'center',editor:'numberbox'},
            {field:'img_nhanvien',title:'Hình ảnh',halign:'center',width:152,align:'left', editor:{
                type:'filebox',
                options:{
                  buttonText:'Chọn ảnh',
                  accept:'image/png, image/jpeg, image/jpg',
                    onChange: function (newValue, oldValue) {
                      readFile($(this).next().find('.textbox-value')[0]);
                    }
                  }
                }   
              },
            {field:'action',title:'Thao tác',width:100,align:'center',
              formatter:function(value,row,index){
                if (row.editing){
                  var s = '<a href="javascript:void(0)" onclick="nhanvien_luu(this)">Lưu</a> ';
                  var c = '<a href="javascript:void(0)" onclick="nhanvien_quaylai(this)">Quay lại</a>';
                  return s+c;
                } else {
                  var e = '<a href="javascript:void(0)" onclick="nhanvien_sua(this)">Sửa</a> ';
                  var d = '<a href="javascript:void(0)" onclick="nhanvien_xoa(this)">Xóa</a>';
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
        $('#dgnhanvien').datagrid('enableFilter');
        
      });
 // $("#ulimgctdguploaded").html('<img src="'+imageBase64+'" >');

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

      function nhanvien_sua(target){        
        var index = getRowIndex(target);
        $('#dgnhanvien').datagrid('selectRow',index);
        $('#dgnhanvien').datagrid('beginEdit',index);
      }


      function nhanvien_luu(target){
        var imageBase64 = "";
        $("#luudm_dichvu").linkbutton('disable');
        if(!$('#dgnhanvien').datagrid('validateRow')) return;
        $('#dgnhanvien').datagrid('selectRow',getRowIndex(target));
        if ($('#dgnhanvien').datagrid('getSelected')){
          $('#dgnhanvien').datagrid('endEdit', getRowIndex(target));
          var rows = $('#dgnhanvien').datagrid('getChanges');
          for(var i=0;i<rows.length;i++)
          {
            var id = processLuu_nhanvien(rows[i].img_nhanvien,rows[i].id_canbo,rows[i].hoten_canbo,rows[i].madonvi_canbo,rows[i].donvi_canbo,rows[i].id_linhvuc,rows[i].linhvuc_canbo,rows[i].ngaysinh_canbo,rows[i].id_ct_quay,rows[i].tt_canbo,rows[i].donvi_quanli);
          }
        }
      }
      function processLuu_nhanvien(img_canbo,id_canbo,hoten_canbo, madonvi_canbo,donvi_canbo,id_linhvuc, linhvuc_canbo, ngaysinh_canbo, id_ct_quay, tt_canbo,donvi_quanli){
        var ma_donvi = "";
        if (isNumeric(donvi_canbo) == true){
          ma_donvi = donvi_canbo;
        } else {
          ma_donvi = madonvi_canbo;
        }
        var linhvuc = "";
        if(isNumeric(linhvuc_canbo) == true) {
          linhvuc = linhvuc_canbo;
        } else {
          linhvuc = id_linhvuc;
        }
        if(isNumeric(img_canbo) == null) {
          imageBase64 ="";
        } else {
          imageBase64 = imageBase64;
        }
        $.ajax({
          type: 'POST',
              url: 'go',
              data: {
                for: "update_nhanvien",
                id_canbo: id_canbo,
                hoten_canbo: hoten_canbo,
                donvi_canbo: ma_donvi,
                linhvuc_canbo: linhvuc,
                ngaysinh_canbo: convertDate(ngaysinh_canbo),
                id_ct_quay: id_ct_quay,
                tt_canbo: tt_canbo,
                img_canbo: imageBase64,
                donvi_quanli:donvi_quanli
              }
            }).done(function(data){
              var j_data = JSON.parse(data);
              var kq = j_data.ketqua;
              if (kq >= 1) {
                $('#dgnhanvien').datagrid('reload');
                message_success();
                $("#luudm_dichvu").linkbutton('enable');
              } else {
                $('#dgnhanvien').datagrid('reload');
                message_error();
                $("#luudm_dichvu").linkbutton('enable');
              }
            });
      }      
      function nhanvien_xoa(target){
          $.messager.confirm('XÁC NHẬN','Bạn có muốn xóa dòng dữ liệu này không? Không thể hoàn tác sau khi XÓA!',function(r){
          if (r){
            var row = $('#dgnhanvien').datagrid('getSelected');
            if (row){
              processXoa_nhanvien(row.id_canbo);
            }
          }
        });
      }
      function processXoa_nhanvien(id_canbo){
        $.ajax({
          type: 'POST',
              url: 'go',
              data: {
                  for: "xoa_nhanvien",
                  id_canbo: id_canbo,
                  madonvi: <?php echo $_SESSION["madonvi"]; ?>
              }
            }).done(function(data){
            var j_data = JSON.parse(data);
            var kq = j_data.ketqua;
            if (kq == '-1') {
              $.messager.alert('Thông báo','Tài khoản này đã được đánh giá ý kiến! Không thể XÓA, chỉ được CẬP NHẬT!','warning');
            } else if (kq >= 1) {
              $('#dgnhanvien').datagrid('reload');
              message_xoa_success();
            }else {
              $('#dgnhanvien').datagrid('reload');
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
                  madonvi: <?php echo $_SESSION["madonvi"]; ?>, 
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
            $('#dgnhanvien').datagrid('reload');
          } else {
            message_them_error();
          }
        });
        
      }
      function nhanvien_quaylai(target){
        $('#dgnhanvien').datagrid('cancelEdit', getRowIndex(target));
      }

      function huythemdichvu(){
        $('#modal_themdichvu').window('close');
      }

      function lammoi_dichvuGird(){
        $('#dgnhanvien').datagrid('reload');
      }
      function load_lai_linh_vuc(madonvi_canbo){
        $.ajax({
        type: 'POST',
            url: 'go',
            data: {
              for: "loadlailinhvuc",
              madonvi: <?php echo $_SESSION["madonvi"] ?>,
              donvi_canbo: 1
            }
          }).done(function(data){
            var j_data = JSON.parse(data);
            data_linhvuc = j_data;
        });
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
      // function loadlinhvuc(){
      //   $.ajax({
      //     type: 'POST',
      //     url: 'go',
      //     data: {
      //       for:'fload_dslinhvuc',
      //       madonvi:1,
      //       id_donvi:1,
      //       dvu_loai:2
      //     }
      //   }).done(function(data){
      //     var j_data = JSON.parse(data);
      //   //  data_linhvuc = j_data;
      //   });
      // }
    </script>

  </body>
</html>
