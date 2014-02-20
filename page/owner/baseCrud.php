<?php

class page_customerCareApp_page_owner_baseCruds extends page_componentBase_page_owner_baseCruds{
	function init(){
		parent::init();

		$tabs=$this->add('Tabs');
		$tabs=$tabs->addTab('init CRUDs');

		$company_crud = $this->add('CRUD');
		$company_crud->setModel('customerCareApp/Company');
		
		$department_crud = $this->add('CRUD');
		$department_crud->setModel('customerCareApp/Department');
		
		$emailTemp_crud = $this->add('CRUD');
		$emailTemp_crud->setModel('customerCareApp/EmailTemplate');
		
		$issue_crud = $this->add('CRUD');
		$issue_crud->setModel('customerCareApp/Issue');
		
		$team_crud = $this->add('CRUD');
		$team_crud->setModel('customerCareApp/Team');
		
		$staff_crud = $this->add('CRUD');
		$staff_crud->setModel('customerCareApp/Staff');
		
		$user_crud = $this->add('CRUD');
		$user_crud->setModel('customerCareApp/User');
		
		$ticket_crud = $this->add('CRUD');
		$ticket_crud->setModel('customerCareApp/Ticket');

	}
}