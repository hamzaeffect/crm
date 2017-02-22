<?php 
 //WARNING: The contents of this file are auto-generated



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


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['flexrelate_leads']['override_subpanel_name'] = 'Lead_subpanel_flexrelate_leads';

?>