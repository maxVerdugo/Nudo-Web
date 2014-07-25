<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Category');
class RevitModelsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function view($id = null)
    {
    	//$categories = $this->Family->Category->find('list');
    	$this->set(compact('categories'));
    	$this->RevitModel->id = $id;
        $this->set('model', $this->RevitModel->read());
    }
}