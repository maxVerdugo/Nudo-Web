<?php
App::uses('Model', 'Model');
class Project extends Model {
	public $hasMany = array('models' => array('className' => "RevitModel"));
}