<?php

require_once('include/MVC/Controller/SugarController.php');

class ProspectListsController extends SugarController{
	
	function action_searchTargetList()
	{
		 $this->view = 'searchtargetlist';
	}
}
?>

divide(count($last_name),count(related($leads_inet_enquiry_1,"convert_to_booking_c")))