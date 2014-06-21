<?php
App::uses('Model', 'Model');
class Parameter extends Model {
	public $belongsTo =  array('Element','ParametersGroup');
}