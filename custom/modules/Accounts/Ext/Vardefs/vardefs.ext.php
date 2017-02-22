<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-09-30 15:06:06
$dictionary["Account"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
);



$dictionary['Account']['relationships']['account_opportunities'] = array(
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'my_account_id',
    'relationship_type' => 'one-to-many',
    );




$dictionary['Account']['fields']['account_opportunities_link'] = array(
  	'name' => 'account_opportunities_link',
    'type' => 'link',
    'relationship' => 'account_opportunities',
    'module' => 'Opportunities',
    'bean_name' => 'Opportunity',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT_OPPORTUNITIES_LINK',
    );





$dictionary['Account']['relationships']['flexrelate_accounts'] = array(

    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'parent_id',
    'relationship_type'	=> 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts'
);





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




$dictionary['Account']['fields']['age_c'] = array(

	'required' => false,
	'name' => 'age_c',
    'label' => 'LBL_AGE_C',
    'vname' => 'LBL_AGE_C',
    'type' => 'int',
    'massupdate' => '0',
    'default' => '',
    'no_default' => false,
    'comments' => 'Age Integer Vardef',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    );




$dictionary['Account']['fields']['criminal_record_c'] = array(

	'required' => false,
	'name' => 'criminal_record_c',
    'label' => 'LBL_CRIMINAL_RECORD_C',
    'vname' => 'LBL_CRIMINAL_RECORD_C',
    'type' => 'enum',
    'help' => '',
    'comment' => 'Enum Field Text',
    'options' => 'criminal_record_dom', //maps to options - specify list name
    'default_value' => '', //key of entry in specified list
    'mass_update' => false, // true or false
    'reportable' => true, // true or false
    'audited' => false, // true or false
    'importable' => 'true', // 'true', 'false' or 'required'
    'duplicate_merge' => false, // true or false
    'len' => 50,
    );




$dictionary['Account']['fields']['date_field_c'] = array(

	'required' => false,
	'name' => 'date_field_c',
    'label' => 'LBL_DATE_FIELD_C',
    'vname' => 'LBL_DATE_FIELD_C',
    'type' => 'date',
    'massupdate' => '0',
    'default' => date("Y-m-d"),
    'no_default' => false,
    'comments' => 'Date date Vardef',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    );




$dictionary['Account']['fields']['designation_c'] = array(

	'required' => false,
	'name' => 'designation_c',
    'label' => 'LBL_DESIGNATION_C',
    'vname' => 'LBL_DESIGNATION_C',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
    'no_default' => false,
    'comments' => 'Designation Varchar Vardef',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    );


?>