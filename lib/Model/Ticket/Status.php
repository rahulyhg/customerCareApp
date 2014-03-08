<?php

namespace customerCareApp;

class Model_Ticket_Status extends \Model_Table { 
	var $table= "customerCareApp_ticket_status";
	function init(){
		parent::init();


		$this->addField('name');
		$this->hasMany('customerCareApp/Ticket','ticket_id');

		$this->addHook('beforeDelete',$this);
		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');
	}
	function beforeDelete(){

	}

	function beforeSave(){
		
	}
}