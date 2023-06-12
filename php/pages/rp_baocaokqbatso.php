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
         
        <div data-options="region:'center'" >
          <table id="dg_baocaochiphi" style="width:100%;height:100%" data-options="iconCls: 'icon-nhanvien',singleSelect: true,toolbar: '#tb', method: 'post'">
            </table>
        </div>
        <div id="tb" style="padding:2px 5px; width: 100%">
              <input class="easyui-datebox" style="width:200px" id="rp_tungay" name="rp_tungay" data-options="formatter:dateformatter,parser:dateparser,editable:false" label="Từ ngày" labelWidth="60px">
              <input class="easyui-datebox" style="width:200px" id="rp_denngay" name="rp_denngay" data-options="formatter:dateformatter,parser:dateparser,editable:false" label="Đến ngày" labelWidth="80px">             
              <select class="easyui-combobox" panelHeight="auto" panelWidth="auto" style="width:16%" id="rp_loaihinh" name="rp_loaihinh" data-options="editable: false,panelHeight: 200" label="Loại hình" labelWidth="70px">
                      <option value="0">Tất cả</option>
                      <option value="1">Online</option>
                      <option value="2">Trực tiêp</option>
               </select>
              <a class="easyui-linkbutton" iconCls="icon-search" id="rp_xemdanhsach" name="rp_xemdanhsach">Xem Danh Sách</a>          
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
              var tungay = $("#rp_tungay").datebox('getValue');
              var denngay = $("#rp_denngay").datebox('getValue');
          $('#dg_baocaochiphi').datagrid({
              singleSelect: true,
              pagination: true,
              rownumbers: true,
              clientPaging: false,
              remoteFilter: true,
              pageSize: 30,
              pageList: [30,60,90,120],
              nowrap: false,
              showFooter: true,
              title: 'BÁO CÁO KẾT QUẢ BẮT SỐ',
              url: 'go',
              queryParams: {
              for:'rp_xemdanhsach_batso',
                    tungay: datefmtomysql(tungay),
                    denngay: datefmtomysql(denngay),
                    loaihinh: 0
              },
              toolbar:'#tb',
                columns:[[
                    {field:'quay',title:'Số thứ tự quầy',halign:'center',width:100,align:'center'},
                    {field:'tenquay',title:'Tên quầy giao dịch',halign:'center',width:550,align:'center'},
                    {field:'soluong',title:'Số lượng giao dịch',halign:'center',width:200,align:'right',
                      formatter:function(value,row,index) {
                                if(row.soluong) {
                                  return value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
                                }
                              }
                    },
                    {field:'ghichu',title:'Ghi chú',halign:'center',width:500,align:'center'},
                ]]
            });
             $("#rp_xemdanhsach").click(function(evt){
              var tungay = $("#rp_tungay").datebox('getValue');
              var denngay = $("#rp_denngay").datebox('getValue');
              $('#dg_baocaochiphi').datagrid('options').queryParams = {
                      for:'rp_xemdanhsach_batso',                      
                       tungay: datefmtomysql(tungay),
                      denngay: datefmtomysql(denngay),
                      loaihinh: $("#rp_loaihinh").combobox('getValue')
                    };
              $('#dg_baocaochiphi').datagrid('reload');
            });
            
      });
     
      </script>
  </body>
</html>
