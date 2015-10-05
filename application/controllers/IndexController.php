<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $posts = new Application_Model_Posts();
        $post = $posts->fetchAll();
        $this->view->listaPosts = $post;
    }

    public function showAction() {
        $comments = new Application_Model_Comments();
        $comment = $comments->fetchAll()->findParentRow('Posts');
        $this->view->post = $comment;
    }

}
