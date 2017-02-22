<?php

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

?>