<?php
App::uses('AppController', 'Controller');
class RevitModelsController extends AppController {
    public $helpers = array('Html', 'Form');
    public function view($id = null)
    {
    	$this->loadModel('Category');
    	$this->loadModel('Family');
    	$this->RevitModel->id = $id;
    	$model = $this->RevitModel->find('first', array(
    		'conditions' => array('RevitModel.id'=>$id)
    		));
    	$categories = $this->Category->find('list');
    	$this->set('categories',$categories);
    	$this->set('model',$model);
    	print_r($categories);

    }
}