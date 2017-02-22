<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-09-30 15:06:06
$layout_defs["Accounts"]["subpanel_setup"]['accounts_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'accounts_leads_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);



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
	


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['flexrelate_accounts']['override_subpanel_name'] = 'Account_subpanel_flexrelate_accounts';

?>