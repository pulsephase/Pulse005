<?php

class Home extends Controller{
public function __construct($controller,$action){
	parent::__construct($controller,$action);
	$this->view->setLayout('default');
}
public function indexAction(){
	$this->view->render('home/index');
	
	}
	public function respondAction($param){
	$this->view->setPulse($param);
	$this->view->render('home/respond');
	}
	
}