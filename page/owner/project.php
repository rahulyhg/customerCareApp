<?php
class page_customerCareApp_page_owner_project extends page_customerCareApp_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD');
		$crud->setModel('customerCareApp/Project');
		
	}
}