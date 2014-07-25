<?php
App::uses('Model', 'Model');
class Family extends Model {
	public $belongsTo = array('RevitModel','Category');
	public $hasMany = array('elements' => array('className' => "Element"));

	public $actsAs = array('Containable');

	public function getFamily($id=null)
	{
		$this->recursive = -1;
		$this->find('all',array(
			'conditions'=>array(
				'Family.id'=>$id
				),
			'contain'=> 'Category.name'));
	}
}