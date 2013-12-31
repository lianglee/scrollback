<?php
elgg_register_event_handler('init', 'system', 'scrollback_system_init');
define('_SROLLBACK_VIEW_', elgg_get_plugins_path());
function scrollback_system_init() {	
	elgg_extend_view('page/elements/head', 'scrollback/extend/view');
}
function scrollback_system_id(){
$id = file_get_contents(_SROLLBACK_VIEW_.'scrollback/room_id.php');
if(!empty($id)){
  return $id;	
}
 return false;
}