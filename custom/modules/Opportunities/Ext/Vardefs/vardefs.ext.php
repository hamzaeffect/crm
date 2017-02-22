<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Opportunity']['fields']['my_account_id'] = array(
    'name' => 'my_account_id',
    'rname' => 'id',
    'vname' => 'LBL_MY_ACCOUNT_ID',
    'type' => 'id',
    'table' => 'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    );

$dictionary['Opportunity']['fields']['my_account_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'my_account_name',
    'vname' => 'LBL_MY_ACCOUNT_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'my_account_id',
    'table' => 'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    );




$dictionary['Opportunity']['fields']['account_opportunities_link'] = array(
  	'name' => 'account_opportunities_link',
    'type' => 'link',
    'relationship' => 'account_opportunities',
    'module' => 'Accounts',
    'bean_name' => 'Account',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT_OPPORTUNITIES_LINK',
    );


?>