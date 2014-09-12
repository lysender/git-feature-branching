<?php

class IndexController extends Zend_Controller_Action {

    public function indexAction()
    {
        $this->view->title = "This is the title";
        $this->view->description = "This is the description";
    }
}