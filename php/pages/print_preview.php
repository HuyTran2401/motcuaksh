<?php
require_once(dirname(__FILE__).'/../reports/ReportConfig.php');
?>
<div class="easyui-layout" data-options="fit:true">
	<div data-options="region:'center'">
		<iframe width="100%" height="99%" frameborder="0" src="go?page=_inpreview&type=<?php echo $type ?>&param1=<?php echo $var1 ?>&param2=<?php echo $var2 ?>&param3=<?php echo $var3 ?>&param4=<?php echo $var4 ?>" allowtransparency="true"></iframe>
	</div>
		<?php
		//echo REPORT_CONNECTION_STRING;
	?>
</div>