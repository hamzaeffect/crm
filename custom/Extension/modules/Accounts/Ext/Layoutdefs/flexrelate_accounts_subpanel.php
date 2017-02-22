<?php

	$layout_defs["Accounts"]["subpanel_setup"]['flexrelate_accounts'] = array(
    
	'order' => 30,							               
	'module' => 'Contacts',					       
	'sort_order' => 'asc',
	'sort_by' => 'name',				
	'subpanel_name' => 'default',					      
	'get_subpanel_data' => 'flexrelate_accounts',					
	'title_key' => 'LBL_FLEXRELATE_ACCOUNTS_SUBPANEL',		  
	
	'top_buttons' => array(
		
		array('widget_class' => 'SubPanelTopButtonQuickCreate'), 

		array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
	),
);
	
?>