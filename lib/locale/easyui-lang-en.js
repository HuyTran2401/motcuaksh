if ($.fn.pagination){
	$.fn.pagination.defaults.beforePageText = 'Trang';
	$.fn.pagination.defaults.afterPageText = ' / {pages}';
	$.fn.pagination.defaults.displayMsg = 'Hiển thị {from} đến {to} / {total}';
}
if ($.fn.datagrid){
	$.fn.datagrid.defaults.loadMsg = 'Đang tải dữ liệu ...';
}
if ($.fn.treegrid && $.fn.datagrid){
	$.fn.treegrid.defaults.loadMsg = $.fn.datagrid.defaults.loadMsg;
}
if ($.messager){
	$.messager.defaults.ok = 'Ok';
	$.messager.defaults.cancel = 'Cancel';
}
$.map(['validatebox','textbox','passwordbox','filebox','searchbox',
		'combo','combobox','combogrid','combotree',
		'datebox','datetimebox','numberbox',
		'spinner','numberspinner','timespinner','datetimespinner'], function(plugin){
	if ($.fn[plugin]){
		$.fn[plugin].defaults.missingMessage = 'Không được để trống.';
	}
});
if ($.fn.validatebox){
	$.fn.validatebox.defaults.rules.email.message = 'Chưa đúng định dạng của Email. Vui lòng kiểm tra lại!';
	$.fn.validatebox.defaults.rules.url.message = 'Please enter a valid URL.';
	$.fn.validatebox.defaults.rules.length.message = 'Giá trị giữa {0} và {1}.';
	$.fn.validatebox.defaults.rules.remote.message = 'Please fix this field.';
}
if ($.fn.calendar){
	$.fn.calendar.defaults.weeks = ['CN','T2','T3','T4','T5','T6','T7'];
	$.fn.calendar.defaults.months = ['Tháng 1  ', 'Tháng 2  ', 'Tháng 3  ', 'Tháng 4  ', 'Tháng 5  ', 'Tháng 6  ', 'Tháng 7  ', 'Tháng 8  ', 'Tháng 9  ', 'Tháng 10  ', 'Tháng 11  ', 'Tháng 12  '];
}
if ($.fn.datebox){
	$.fn.datebox.defaults.currentText = 'Hôm nay';
	$.fn.datebox.defaults.closeText = 'Đóng';
	$.fn.datebox.defaults.okText = 'Đồng ý';
}
if ($.fn.datetimebox && $.fn.datebox){
	$.extend($.fn.datetimebox.defaults,{
		currentText: $.fn.datebox.defaults.currentText,
		closeText: $.fn.datebox.defaults.closeText,
		okText: $.fn.datebox.defaults.okText
	});
}
