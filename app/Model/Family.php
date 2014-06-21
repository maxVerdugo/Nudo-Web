<?php
App::uses('Model', 'Model');
class Family extends Model {
	public $belongsTo = array('RevitModel','Category');
	public $hasMany = array('elements' => array('className' => "Element"));
}