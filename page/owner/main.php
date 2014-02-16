<?php

class page_customerCareApp_page_owner_main extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$company_crud = $this->add('CRUD');
		$company_crud->setModel('customerCareApp/Company');
		
		$department_crud = $this->add('CRUD');
		$department_crud->setModel('customerCareApp/Department');
		
		$emailTemp_crud = $this->add('CRUD');
		$emailTemp_crud->setModel('customerCareApp/EmailTemplate');
		
		$issue_crud = $this->add('CRUD');
		$issue_crud->setModel('customerCareApp/Issue');
		
		$staff_crud = $this->add('CRUD');
		$staff_crud->setModel('customerCareApp/Staff');
		
		$team_crud = $this->add('CRUD');
		$team_crud->setModel('customerCareApp/Team');
		
		$ticket_crud = $this->add('CRUD');
		$ticket_crud->setModel('customerCareApp/Ticket');
		
		$user_crud = $this->add('CRUD');
		$user_crud->setModel('customerCareApp/User');

	}
}