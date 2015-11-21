<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array(
		'current_page'      => array('source' => 'route', 'key' => 'page'), // source: "query_string" or "route"
		'total_items'       => 0,
		'items_per_page'    => 15,
		'view'              => 'pagination/basic',
		'auto_hide'         => FALSE,
		'first_page_in_url' => FALSE,
	),

);
