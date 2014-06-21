<?php
App::uses('Model', 'Model');
class Project extends Model {
	public $hasMany = 'RevitModel';
}