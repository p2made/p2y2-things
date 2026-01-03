/* global $, simpleDatatables */
(function (window, document) {
	'use strict';

	function parseOptions(el) {
		const raw = el.getAttribute('data-p2-dt-options');
		if (!raw) return {};
		try { return JSON.parse(raw); } catch (e) { return {}; }
	}

	function ensureDataTable(el) {
		if (!window.jQuery || !jQuery.fn || !jQuery.fn.DataTable) return null;

		const $el = jQuery(el);

		// If already initialised, return existing instance
		if (jQuery.fn.DataTable.isDataTable(el)) {
			return $el.DataTable();
		}

		const defaults = {
			responsive: true,
			pageLength: 10,
			lengthMenu: [10, 25, 50, 100],
			order: [[0, 'asc']],
			dom: 'lrtip' // no built-in search box (top-nav search later)
		};

		const opts = Object.assign({}, defaults, parseOptions(el));

		const dt = $el.DataTable(opts);

		// Expose "current" table for later global search integration
		window.P2_DT = window.P2_DT || {};
		window.P2_DT.current = dt;

		return dt;
	}

	function initAll(root) {
		const scope = root || document;
		const tables = scope.querySelectorAll('table[data-p2-datatables="1"]');
		tables.forEach(function (el) {
			ensureDataTable(el);
		});
	}

	// Initial page load
	document.addEventListener('DOMContentLoaded', function () {
		initAll(document);
	});

	// If PJAX is used somewhere, re-init after fragment replacement
	document.addEventListener('pjax:success', function (e) {
		initAll(e.target);
	});

})(window, document);
