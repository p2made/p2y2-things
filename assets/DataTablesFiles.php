<?php
/**
 * Load this asset with...
 * p2made\assets\DataTablesAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\DataTablesAsset',
 */

namespace p2made\assets;

class DataTablesAsset extends \p2made\assets\base\P2AssetBundle
{
	// DataTables
	'//cdn.datatables.net/1.10.11/css/dataTables.bootstrap.css'
	'//cdn.datatables.net/1.10.11/js/jquery.dataTables.js'
	'//cdn.datatables.net/1.10.11/js/dataTables.bootstrap.js'

	// DataTables Responsive
	'//cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.css'
	'//cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.js'
	'//cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.js'

	private $resourceData = array(
	);


/**

 */
	$files = array(
		'//cdn.datatables.net/1.10.11/css/dataTables.bootstrap.css',
		'//cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css',
		'//cdn.datatables.net/1.10.11/js/jquery.dataTables.js',
		'//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js',
		'//cdn.datatables.net/1.10.11/js/dataTables.bootstrap.js',
		'//cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js',

		'//cdn.datatables.net/autofill/2.1.1/css/autoFill.bootstrap.css',
		'//cdn.datatables.net/autofill/2.1.1/css/autoFill.bootstrap.min.css',
		'//cdn.datatables.net/autofill/2.1.1/js/dataTables.autoFill.js',
		'//cdn.datatables.net/autofill/2.1.1/js/dataTables.autoFill.min.js',
		'//cdn.datatables.net/autofill/2.1.1/js/autoFill.bootstrap.js',
		'//cdn.datatables.net/autofill/2.1.1/js/autoFill.bootstrap.min.js',

		'//cdn.datatables.net/buttons/1.1.2/css/buttons.bootstrap.css',
		'//cdn.datatables.net/buttons/1.1.2/css/buttons.bootstrap.min.css',
		'//cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.js',
		'//cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.bootstrap.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.bootstrap.min.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.colVis.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.colVis.min.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.flash.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.html5.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.print.js',
		'//cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js',

		'//cdn.datatables.net/colreorder/1.3.1/css/colReorder.bootstrap.css',
		'//cdn.datatables.net/colreorder/1.3.1/css/colReorder.bootstrap.min.css',
		'//cdn.datatables.net/colreorder/1.3.1/js/dataTables.colReorder.js',
		'//cdn.datatables.net/colreorder/1.3.1/js/dataTables.colReorder.min.js',

		'//cdn.datatables.net/fixedcolumns/3.2.1/css/fixedColumns.bootstrap.css',
		'//cdn.datatables.net/fixedcolumns/3.2.1/css/fixedColumns.bootstrap.min.css',
		'//cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.js',
		'//cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js',

		'//cdn.datatables.net/fixedheader/3.1.1/css/fixedHeader.bootstrap.css',
		'//cdn.datatables.net/fixedheader/3.1.1/css/fixedHeader.bootstrap.min.css',
		'//cdn.datatables.net/fixedheader/3.1.1/js/dataTables.fixedHeader.js',
		'//cdn.datatables.net/fixedheader/3.1.1/js/dataTables.fixedHeader.min.js',

		'//cdn.datatables.net/keytable/2.1.1/css/keyTable.bootstrap.css',
		'//cdn.datatables.net/keytable/2.1.1/css/keyTable.bootstrap.min.css',
		'//cdn.datatables.net/keytable/2.1.1/js/dataTables.keyTable.js',
		'//cdn.datatables.net/keytable/2.1.1/js/dataTables.keyTable.min.js',

		'//cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.css',
		'//cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css',
		'//cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.js',
		'//cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js',
		'//cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.js',
		'//cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.min.js',

		'//cdn.datatables.net/rowreorder/1.1.1/css/rowReorder.bootstrap.css',
		'//cdn.datatables.net/rowreorder/1.1.1/css/rowReorder.bootstrap.min.css',
		'//cdn.datatables.net/rowreorder/1.1.1/js/dataTables.rowReorder.js',
		'//cdn.datatables.net/rowreorder/1.1.1/js/dataTables.rowReorder.min.js',

		'//cdn.datatables.net/scroller/1.4.1/css/scroller.bootstrap.css',
		'//cdn.datatables.net/scroller/1.4.1/css/scroller.bootstrap.min.css',
		'//cdn.datatables.net/scroller/1.4.1/js/dataTables.scroller.js',
		'//cdn.datatables.net/scroller/1.4.1/js/dataTables.scroller.min.js',

		'//cdn.datatables.net/select/1.1.2/css/select.bootstrap.css',
		'//cdn.datatables.net/select/1.1.2/css/select.bootstrap.min.css',
		'//cdn.datatables.net/select/1.1.2/js/dataTables.select.js',
		'//cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js',
	);

?>
