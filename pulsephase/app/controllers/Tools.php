<?php

class Tools extends Controller {

public function __construct($controller, $action){
parent::__construct($controller, $action);
$this->view->setLayout('default'); 

}

//var_dump(getallheaders()); 
//render tools


public function toolsAction($key) {
$this->view->render('tools/tools');
//link method and view to Tools controller
//echo $key;
}


}

