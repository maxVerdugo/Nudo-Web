<?php
App::uses('AppController', 'Controller');
class ProjectsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index()
    {
    	$this->set('projects', $this->Project->find('all'));
    }

    public function view($id = null)
    {
    	$this->Project->id = $id;
        $this->set('project', $this->Project->read());
    }
}