<?php
App::uses('Model', 'Model');
class RevitModel extends Model {
	public $belongsTo = 'Project';
	public $hasMany = array('families' => array('className' => "Family"),
							'elements' => array('className' => "Element"));
	
}
