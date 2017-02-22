<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class ViewSearchTargetList extends ViewList
{
	function ViewSearchTargetList()
	{
		parent::ViewList();
	}
	
	function display()
	{
		parent::display();
		echo '<span style="color:purple;">'."Hello World...!!".'</span>';
		
	}

	function prepareSearchForm()
    {
        $this->searchForm = null;

        //search
        $view = 'basic_search';
        if(!empty($_REQUEST['search_form_view']) && $_REQUEST['search_form_view'] == 'advanced_search')
            $view = $_REQUEST['search_form_view'];
        $this->headers = true;

        if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only'])
            $this->headers = false;
        elseif(!isset($_REQUEST['search_form']) || $_REQUEST['search_form'] != 'false')
        {
            if(isset($_REQUEST['searchFormTab']) && $_REQUEST['searchFormTab'] == 'advanced_search')
            {
                $view = 'advanced_search';
            }
            else
            {
                $view = 'basic_search';
            }
        }

        
            $this->use_old_search = false;
            require_once('include/SearchForm/SearchForm2.php');
            require_once('custom/modules/ProspectLists/metadata/mysearchdefs.php');
            require_once('custom/modules/ProspectLists/metadata/MySearchFields.php');

            // $searchMetaData = SearchForm::retrieveSearchDefs($this->module);


            /*print '<pre>';
            print_r($mysearchdefs);
            print_r($mySearchFields);
            print '<pre>';*/

            $this->searchForm = $this->getSearchForm2($this->seed, $this->module, $this->action);
            $this->searchForm->setup($searchdefs, $searchFields, 'SearchFormGeneric.tpl', $view, $this->listViewDefs);
            $this->searchForm->lv = $this->lv;
    }

}

?>