<?php 
	
	$dictionary['ProspectList']['fields']['related_contact_c'] = array(
		
		'required' => true,
		'source' => 'non-db',
		'name' => 'related_contact_c',
		'vname' => 'LBL_RELATED_CONTACT_C',
		'type' => 'relate',
		'massupdate' => 0,
		'comments' => '',
		'help' => '',
		'importable' => 'true',
		'duplicate_merge' => 'disabled',
		'duplicate_merge_dom_value' => '0',
		'audited' => false,
		'reportable' => true,
		'calculated' => false,
		'len' => '255',
		'size' => '20',
		'id_name' => 'contact_id_c',
		'ext2' => 'Contacts',
		'module' => 'Contacts',
		'rname' => 'name',
		'quicksearch' => 'enabled',
		'studio' => 'visible',
	);
?>
