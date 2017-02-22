<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Accounts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,
   
    //Label. A string value to identify the hook.
    'Append Account Name with Q',
   
    //The PHP file where your class is located.
    'custom/modules/Accounts/logic_hooks_class.php',
   
    //The class the method is in.
    'Account_LogicHooks',
   
    //The method to call.
    'append_account_name'
);

$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,
   
    //Label. A string value to identify the hook.
    'Insert Fax Field with 987-658-254',
   
    //The PHP file where your class is located.
    'custom/modules/Accounts/logic_hooks_class.php',
   
    //The class the method is in.
    'Account_LogicHooks',
   
    //The method to call.
    'insert_fax'
);

$hook_array['before_save'][] = Array(
    //Processing index. For sorting the array.
    1,
   
    //Label. A string value to identify the hook.
    'Insert City and State',
   
    //The PHP file where your class is located.
    'custom/modules/Accounts/logic_hooks_class.php',
   
    //The class the method is in.
    'Account_LogicHooks',
   
    //The method to call.
    'insert_city_state'
);


$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    //Processing index. For sorting the array.
    1,
   
    //Label. A string value to identify the hook.
    'Insert Office Phone Field with 123-456-789',
   
    //The PHP file where your class is located.
    'custom/modules/Accounts/logic_hooks_class.php',
   
    //The class the method is in.
    'Account_LogicHooks',
   
    //The method to call.
    'insert_office_Phone'
);

$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(
    //Processing index. For sorting the array.
    1,
   
    //Label. A string value to identify the hook.
    'Create Notes on Delete',
   
    //The PHP file where your class is located.
    'custom/modules/Accounts/logic_hooks_class.php',
   
    //The class the method is in.
    'Account_LogicHooks',
   
    //The method to call.
    'create_Notes_after_delete'
);


?>