<?php

class Media extends Controller{
// media controller site-tools

public function __construct($controller, $action){
parent::__construct($controller, $action);
$this->view->setLayout('default'); 

}

public function indexAction(){
	$this->view->render('media/index');
	echo "media/index:";
	
}

public function respondAction($param){
	$this->view->setPulse($param);
	$this->view->render('media/index');
}


}