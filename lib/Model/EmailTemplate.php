<?php

namespace customerCareApp;

class Model_EmailTemplate extends \Model_Table {
	var $table= "customerCareApp_emailTemplate";
	function init(){
		parent::init();


		$this->addField('name');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}