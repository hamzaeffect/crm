<?php

	$layout_defs["Leads"]["subpanel_setup"]['flexrelate_leads'] = array(
    
	'order' => 100,							               
	'module' => 'Contacts',					       
	'sort_order' => 'asc',
	'sort_by' => 'name',				
	'subpanel_name' => 'default',					      
	'get_subpanel_data' => 'flexrelate_leads',					
	'title_key' => 'LBL_FLEXRELATE_LEADS_SUBPANEL',		  
	
	'top_buttons' => array(
		
		array('widget_class' => 'SubPanelTopButtonQuickCreate'), 

		array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
	),
);
?>