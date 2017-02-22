<?PHP


$dictionary["Account"]["fields"]['account_lead_id'] =  array (	
	'required' => false,
	'name' => 'account_lead_id',
	'vname' => '',
	'type' => 'id',
	'massupdate' => 0,
	'comments' => '',
	'help' => '',
	'duplicate_merge' => 'disabled',
	'duplicate_merge_dom_value' => 0,
	'audited' => 0,
	'reportable' => false,
	'len' => 36,
);

$dictionary["Account"]["fields"]['account_lead_name_c'] =  array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'account_lead_name_c',
	'vname' => 'LBL_ACCOUNT_LEAD_NAME_C',
	'type' => 'relate',
	'massupdate' => 0,
	'comments' => '',
	'help' => '',
	'duplicate_merge' => 'disabled',
	'duplicate_merge_dom_value' => 0,
	'audited' => 0,
	'reportable' => true,
	'len' => '255',
	'id_name' => 'account_lead_id',
	'ext2' => 'Leads',
	'module' => 'Leads',
	'studio' => 'visible',
);

?>