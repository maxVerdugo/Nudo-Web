<?php
App::uses('AppController', 'Controller');
class RevitModelsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function view($id = null)
    {
    	$this->RevitModel->id = $id;
        $this->set('model', $this->RevitModel->read());
    }
}