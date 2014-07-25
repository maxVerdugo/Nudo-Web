<?php
App::uses('AppController', 'Controller');
class ElementsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function view($id = null)
    {
    	$this->Element->id = $id;
        $this->set('element', $this->Element->read());
    }
}