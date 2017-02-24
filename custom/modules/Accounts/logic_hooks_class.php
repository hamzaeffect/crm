<?php
    
    require_once('modules/Notes/Note.php');

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class Account_LogicHooks
    {
        function append_account_name($bean, $event, $arguments)
        {
            if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false)
            {
                $bean->ignore_update_c = true;
                if (empty($bean->fetched_row)) 
                {
                    $bean->name = $bean->name.' - X';
                }
            }
        }
        function insert_fax($bean, $event, $arguments)
        {
                $bean->phone_fax = '987-658-254';
        }
        function insert_office_Phone($bean, $event, $arguments)
        {
             if (!isset($bean->ignore_update_c_n) || $bean->ignore_update_c_n === false)
            {

                $bean->ignore_update_c_n = true;
                $bean->phone_office = '987-654-321';
                print '<pre>';
                print_r($bean->ignore_update_c_n);
                $bean->save();
            }
        }
        function create_Notes_after_delete($bean, $event, $arguments)
        {
                $Notes = new Note();
                $Notes->name = $bean->name;
                $Notes->description = 'The Account is Deleted.';
                $Notes->save();
        }
        function insert_city_state($bean, $event, $arguments)
        {
            $description = $bean->description;
            if(substr_count($description,"#") == 2)
            {
                $str = explode("#",$description);
                $temp_str = $str[1];
                if(substr_count($temp_str,","))
                {
                    $str1 = explode(",",$temp_str);
                    $city = trim($str1[0]);
                    $state = trim($str1[1]);
                    $arr = array($str[0],$str[2]);
                    $desc = implode(" ",$arr);
                    $bean->billing_address_city = $city;
                    $bean->billing_address_state = $state;
                    $bean->description = $desc;
                }
                else
                {
                    $city = trim($temp_str);
                    $bean->billing_address_city = $city;
                    $arr = array($str[0],$str[2]);
                    $desc = implode(" ",$arr);
                    $bean->description = $desc;
                }
            }
        }
    }

?>