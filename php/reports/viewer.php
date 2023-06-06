<?php
require_once(dirname(__FILE__).'/../controllers/Ajbaocao.php');
require_once(dirname(__FILE__).'/../controllers/Ajbatso.php');
require_once(dirname(__FILE__).'/../controllers/AjDanhmuc.php');
require_once(dirname(__FILE__).'/../controllers/TaikhoanController.php');
ini_set('memory_limit', '1024M');
require_once 'stimulsoft/helper.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>QLDGLYK</title>

	<!-- Report Office2013 style -->
	<link href="php/reports/css/stimulsoft.viewer.office2013.whiteteal.css" rel="stylesheet">
	<link href="php/reports/css/stimulsoft.designer.office2013.lightgrayteal.css" rel="stylesheet">
	<!-- Stimusloft Reports.JS -->
	<script src="php/reports/scripts/stimulsoft.reports.js" type="text/javascript"></script>
	<script src="php/reports/scripts/stimulsoft.viewer.js" type="text/javascript"></script>
	<script src="php/reports/scripts/stimulsoft.designer.js" type="text/javascript"></script>
	<?php 
		$options = StiHelper::createOptions();
		$options->handler = "php/reports/handler.php";
		$options->timeout = 30;
		StiHelper::initialize($options);
	?>
	<script type="text/javascript">
		Stimulsoft.Base.Localization.StiLocalization.setLocalizationFile("php/reports/localization/vi.xml");

		var options = new Stimulsoft.Viewer.StiViewerOptions();
		options.appearance.fullScreenMode = true;
		options.toolbar.showSendEmailButton = false;
		options.toolbar.showViewModeButton = false;
		options.toolbar.showDesignButton = false;

		options.toolbar.showCloseButton = true;

		//StiOptions.Viewer.Windows.ShowCloseButton = True;

		options.appearance.scrollbarsMode = true;
		options.toolbar.visible = true;
		options.appearance.interfaceType  = 'Mouse';

		options.toolbar.printDestination = Stimulsoft.Viewer.StiPrintDestination.Direct;
		options.appearance.htmlRenderMode = Stimulsoft.Report.Export.StiHtmlExportMode.Table;
		
		var viewer = new Stimulsoft.Viewer.StiViewer(options, "StiViewer", false);
		var designer = null;
		viewer.onDesignReport = function (e) {
			this.visible = false;
			if (designer == null) createDesigner();
			designer.visible = true;
			designer.report = reportDesigner;
		};
		// Process SQL data source
		viewer.onBeginProcessData = function (event, callback) {
			<?php StiHelper::createHandler(); ?>
		}
		
		// Manage export settings on the server side
		viewer.onBeginExportReport = function (args) {
			<?php //StiHelper::createHandler(); ?>
			//args.fileName = "MyReportName";
		}
		
		// Load and show report
		var n = Stimulsoft.System.Guid.newGuid().toString().substr(0, 8);
		var report = new Stimulsoft.Report.StiReport();
		var reportDesigner = new Stimulsoft.Report.StiReport();
		
		if('<?php echo $type ?>' == 'inbaocaoketquadanhgia'){
			var madonvi = '<?php echo $pre_var1 ?>';
            var tungay = '<?php echo $pre_var2 ?>';
            var denngay = '<?php echo $pre_var3 ?>';
            var manhanvien = '-1';
            var thoigianbaocao = "";
            if (tungay == denngay){
            	thoigianbaocao = 'Ngày ' + denngay.substring(8,10) + ' tháng ' + denngay.substring(5,7) + ' năm ' + denngay.substring(0,4);
        	} else {
        		thoigianbaocao = 'Từ ngày ' + tungay.substring(8,10) + '/' + tungay.substring(5,7) + '/' + tungay.substring(0,4) + ' đến ngày ' + denngay.substring(8,10) + '/' + denngay.substring(5,7) + '/' + denngay.substring(0,4);
    		}
    		var nhanvien = '<?php echo $_SESSION["tenhanvien"] ?>';
			report.loadFile("php/reports/report/rp_baocaoketquadanhgia.mrt" + "?n=" + n);
			reportDesigner.loadFile("php/reports/report/rp_baocaoketquadanhgia.mrt" + "?n=" + n);
			report.dictionary.variables.getByName("madonvi").valueObject = madonvi;
			report.dictionary.variables.getByName("tungay").valueObject = tungay;
			report.dictionary.variables.getByName("denngay").valueObject = denngay;
			report.dictionary.variables.getByName("manhanvien").valueObject = manhanvien;
			report.dictionary.variables.getByName("thoigianbaocao").valueObject = thoigianbaocao;
			report.dictionary.variables.getByName("nhanvienin").valueObject = nhanvien;
		} else if ('<?php echo $type ?>' == 'inbaocaoketquadanhgia_nhanvien') {
			var madonvi = '<?php echo $pre_var1 ?>';
            var tungay = '<?php echo $pre_var2 ?>';
            var denngay = '<?php echo $pre_var3 ?>';
            var manhanvien = '<?php echo $pre_var4 ?>';
            var thoigianbaocao = "";
            if (tungay == denngay){
            	thoigianbaocao = 'Ngày ' + denngay.substring(8,10) + ' tháng ' + denngay.substring(5,7) + ' năm ' + denngay.substring(0,4);
        	} else {
        		thoigianbaocao = 'Từ ngày ' + tungay.substring(8,10) + '/' + tungay.substring(5,7) + '/' + tungay.substring(0,4) + ' đến ngày ' + denngay.substring(8,10) + '/' + denngay.substring(5,7) + '/' + denngay.substring(0,4);
    		}
    		var nhanvien = '<?php echo $_SESSION["tenhanvien"] ?>';
			report.loadFile("php/reports/report/rp_baocaoketquadanhgia_nhanvien.mrt" + "?n=" + n);
			reportDesigner.loadFile("php/reports/report/rp_baocaoketquadanhgia_nhanvien.mrt" + "?n=" + n);
			report.dictionary.variables.getByName("madonvi").valueObject = madonvi;
			report.dictionary.variables.getByName("tungay").valueObject = tungay;
			report.dictionary.variables.getByName("denngay").valueObject = denngay;
			report.dictionary.variables.getByName("manhanvien").valueObject = manhanvien;
			report.dictionary.variables.getByName("thoigianbaocao").valueObject = thoigianbaocao;
			report.dictionary.variables.getByName("nhanvienin").valueObject = nhanvien;
		}

		viewer.report = report;
		
		function onLoad() {
			viewer.renderHtml("viewerContent");
		}
		function createDesigner() {
			var options = new Stimulsoft.Designer.StiDesignerOptions();
			options.appearance.fullScreenMode = true;
			//options.appearance.htmlRenderMode = Stimulsoft.Report.Export.StiHtmlExportMode.Table;
			// Create an instance of the designer
			designer = new Stimulsoft.Designer.StiDesigner(options, "StiDesigner", false);
			// Add the exit menu item event
			designer.onExit = function (e) {
				this.visible = false;
				viewer.visible = true;
			}
			designer.renderHtml("designerContent");
			// Save report template on the server side
			designer.onSaveReport = function (event) {
				<?php StiHelper::createHandler(); ?>
			}
			// Process SQL data source
			designer.onBeginProcessData = function (event, callback) {
				<?php StiHelper::createHandler(); ?>
			}
		}
	</script>
	</head>
<body onload="onLoad();">

	<div id="designerContent"></div>
	<div id="viewerContent"></div>
</body>
</html>
