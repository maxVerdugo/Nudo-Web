<?php
App::uses('Model', 'Model');
class Element extends Model {
	public $belongsTo = array('RevitModel','Family');
	public $hasMany = array('parameters' => array('className' => "Parameter")); 
}