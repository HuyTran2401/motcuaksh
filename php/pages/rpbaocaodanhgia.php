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
    <div id="container2" class="easyui-navpanel" style="width:100%;height:100%">
      <div class="easyui-layout" title="" style="height: 100%; padding:0px;background-color: #E9FAFF;">
        <div data-options="region:'north'" style="height:48px;">
          <?php include_once('../motcuaksh/php/pages/fmenu.php'); ?>
        </div>
        <div data-options="region:'center'" >
          <table id="dg_baocaochiphi" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb', method: 'post'"> </table>
        </div>
        <div id="tb" style="padding:2px 5px; width: 100%">
          <input class="easyui-datebox" style="width:180px" id="rp_tungay" name="rp_tungay" data-options="formatter:dateformatter,parser:dateparser,editable:false" label="Từ ngày" labelWidth="60px">
          <input class="easyui-datebox" style="width:180px" id="rp_denngay" name="rp_denngay" data-options="formatter:dateformatter,parser:dateparser,editable:false" label="Đến ngày" labelWidth="80px">             
          <select class="easyui-combobox" panelHeight="auto" panelWidth="auto" style="width:16%" id="rp_nhanvien" name="rp_nhanvien" data-options="editable: false,panelHeight: 200" label="Nhân viên" labelWidth="70px">
            <?php
              foreach ($dsnhanvien as $key) {
                echo '<option value="'.$key['id_canbo'].'">'.$key['hoten_canbo'].'</option>';
              }
            ?>
          </select>
          <a class="easyui-linkbutton" iconCls="icon-search" id="rp_xemdanhsach" name="rp_xemdanhsach">Xem Danh Sách</a>
          <a id="btnInBC" href="javascript:void(0)" class="easyui-linkbutton easyui-tooltip" data-options="iconCls:'icon-print',disabled:false">In Báo Cáo</a>
          <a id="btnInBCNV" href="javascript:void(0)" class="easyui-linkbutton easyui-tooltip" data-options="iconCls:'icon-print',disabled:false">In Báo Cáo Theo Nhân Viên</a>
          <div id="winInfo"></div>
        </div>
        <div data-options="region:'center'" style="padding:1px;">
          <iframe name="frameBCchiphi" id="frameBCchiphi" width="100%" height="99%" frameborder="0" src="" allowtransparency="true"></iframe>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#rp_tungay').datebox({value: CurrentDate()});
        $('#rp_denngay').datebox({value: CurrentDate()});
        $('#dg_baocaochiphi').datagrid({
          rownumbers:true,
          nowrap:false,
          singleSelect:true,
          remoteSort:true,
          title: 'BÁO CÁO KẾT QUẢ ĐÁNH GIÁ',
          url: 'go',
          queryParams: {
          for:'load_baocao_danhgia',
               madonvi:<?php echo $_SESSION["madonvi"]; ?>
          },
          toolbar:'#tb',
          columns:[[
            {field:'hoten',title:'Họ và tên',halign:'center',width:200,align:'left'},
            {field:'tg_batso',title:'Thời gian bắt số',halign:'center',width:130,align:'center',editor:'datebox'},
            {field:'danhgia',title:'Kết quả đánh giá',halign:'center',width:270,align:'center'},
            {field:'cot_a',title:'A',halign:'center',width:30,align:'center'},
            {field:'cot_b',title:'B',halign:'center',width:30,align:'center'},
            {field:'cot_c',title:'C',halign:'center',width:30,align:'center'},
            {field:'cot_d',title:'D',halign:'center',width:30,align:'center'},
            {field:'cot_e',title:'E',halign:'center',width:30,align:'center'},
            {field:'stt_danhgia',title:'STT đánh giá',halign:'center',width:100,align:'center'},
            {field:'tg_danhgia',title:'Thời gian đánh giá',halign:'center',width:130,align:'center',editor:'datebox'},
            {field:'noidung_dg',title:'Nội dung đánh giá',halign:'center',width:350,align:'center'}
          ]]
        });
        $("#rp_xemdanhsach").click(function(){
          $('#rp_xemdanhsach').linkbutton('disable');
          var tungay = $("#rp_tungay").datebox('getValue');
          var denngay = $("#rp_denngay").datebox('getValue');
          var nhanvien =$("#rp_nhanvien").combobox('getValue');
          $.ajax({
              type: 'POST',
              url: 'go',
              data: {
                for: "rp_xemdanhsach_bcdanhgia_theonv",
                tungay: datefmtomysql(tungay),
                denngay: datefmtomysql(denngay),
                madonvi: <?php echo $_SESSION["madonvi"]; ?>,
                nhanvien: nhanvien
              }
          }).done(function(jsondata){
            var j_data = JSON.parse(jsondata);
            //console.log({'Total': eval(j_data).length, rows:j_data});
            $('#dg_baocaochiphi').datagrid('loadData', {'Total': eval(j_data).length, rows:j_data});
            $("#rp_xemdanhsach").linkbutton('enable');
          });
        });
        $("#btnInBC").click(function(){
          var name_baocao = "inbaocaoketquadanhgia";
          showPrintPreview(name_baocao);
        });
        $("#btnInBCNV").click(function(){
          var name_baocao = "inbaocaoketquadanhgia_nhanvien";
          showPrintPreview(name_baocao);
        });
      });
      function showPrintPreview(type) {
        var madonvi = <?php echo $_SESSION["madonvi"]; ?>;
        var tungay = $("#rp_tungay").datebox('getValue');
        tungay = datefmtomysql(tungay);
        var denngay = $("#rp_denngay").datebox('getValue');
        denngay = datefmtomysql(denngay);
        var manhanvien = $("#rp_nhanvien").combobox('getValue');
        $('#winInfo').window({
          width:window.innerWidth/1.1,
          height:window.innerHeight,
          modal:true,
          title:'In Báo Cáo',
          minimizable:false,
          maximizable:false,
          collapsible:false,
          right:'',
          top:document.body.scrollTop+document.documentElement.scrollTop,
          bottom:''
        });
        $('#winInfo').window('refresh', 'go?page=_inbaocao&type='+type+'&variable1='+madonvi+'&variable2='+ tungay +'&variable3='+ denngay + '&variable4='+manhanvien);
      }
      </script>
  </body>
</html>
