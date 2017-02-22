<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Contact']['fields']['parent_id'] = array(

    'required' => false,
    'name' => 'parent_id',
    'vname' => 'LBL_PARENT_ID',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'len' => 36,
    'size' => '20',
);

$dictionary['Contact']['fields']['parent_type'] = array(
    
    'required' => false,
    'name' => 'parent_type',
    'vname' => 'LBL_PARENT_TYPE',
    'type' => 'parent_type',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'len' => 255,
    'size' => '20',
    'dbType' => 'varchar',
    'studio' => 'hidden',
);

$dictionary['Contact']['fields']['parent_name'] = array(

    'required' => false,
    'source' => 'non-db',
    'name' => 'parent_name',
    'vname' => 'LBL_PARENT_NAME',
    'type' => 'parent',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 25,
    'size' => '20',
    'options' => 'flexparent_options',
    'studio' => 'visible',
    'type_name' => 'parent_type',
    'id_name' => 'parent_id',
    'parent_type' => 'flexparent_options',
);




$dictionary['Contact']['fields']['flexrelate_accounts'] = array(

  	'name' => 'flexrelate_accounts',
    'type' => 'link',
    'relationship' => 'flexrelate_accounts',
    'module'=>'Accounts',
    'bean_name'=>'Account',
    'source'=>'non-db',
    'vname'=>'LBL_FLEXRELATE_ACCOUNTS',
);




$dictionary['Contact']['fields']['flexrelate_leads'] = array(

  	'name' => 'flexrelate_leads',
    'type' => 'link',
    'relationship' => 'flexrelate_leads',
    'module'=>'Leads',
    'bean_name'=>'Lead',
    'source'=>'non-db',
    'vname'=>'LBL_FLEXRELATE_LEADS',
);


?>