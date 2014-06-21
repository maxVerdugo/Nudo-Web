<?php
App::uses('AppController', 'Controller');
class ProjectsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function view($id = null)
    {
    	$this->Family->id = $id;
        $this->set('family', $this->Family->read());
    }
}