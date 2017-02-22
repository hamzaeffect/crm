<?php

$searchFields['ProspectLists'] = 
    array (
        'name' => 
        array ( 
        	'query_type'=>'default',
        ),
        'related_contact_c' =>
        array (
        	'query_type' => 'default',
        	'operator' => 'subquery',
        	'subquery' => "select pros.id, plp.prospect_list_id from prospect_lists pros
							join prospect_lists_prospects plp on plp.prospect_list_id = pros.id
							join contacts con on con.id = plp.related_id
							where pros.deleted=0 and plp.deleted=0 and con.deleted=0 and plp.related_type='Contacts' and trim(concat(ifnull(con.first_name,''),' ',con.last_name)) like ",
			'db_field' => 
    		array (
    			0 => 'prospect_lists.id',
    		),
        ),
    );
?>
