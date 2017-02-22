<?php

	$layout_defs["Accounts"]["subpanel_setup"]['account_opportunities_link'] = array(
    
	'order' => 30,							               
	'module' => 'Opportunities',					       
	'sort_order' => 'asc',
	'sort_by' => 'name',				
	'subpanel_name' => 'default',					      
	'get_subpanel_data' => 'account_opportunities_link',					
	'title_key' => 'LBL_OPPORTUNITY_SUBPANEL_TITLE',		  
	
	'top_buttons' => array(
		
		array('widget_class' => 'SubPanelTopButtonQuickCreate'), //can view create button and form at the same time.

		array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
),
);
?>