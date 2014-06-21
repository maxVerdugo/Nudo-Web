<?php
App::uses('AppController', 'Controller');
class ProjectsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index()
    {
    	$this->set('projects', $this->Project->find('all'));
    }
    
}