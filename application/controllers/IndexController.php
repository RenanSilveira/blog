<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $comments = new Application_Model_Comments();
        //Pega todos os comentarios
        $listaComments = $comments->fetchAll();
        //Pega o primeiro comentario
        $comment = $listaComments->getRow(1);    
        //Busca o post que tem o comentario
        $listaPost = $comment->findParentRow('Application_Model_Posts');
        $this->view->post = $listaPost;
    }

    public function showAction() {
        $posts = new Application_Model_Posts();       
        //Pega todos os posts
        $listaPost = $posts->fetchAll();
        //Pega o primeiro post
        $post = $listaPost->getRow(0);
        //busca todos os comentarios relacionados com o post
        $listaPostComments = $post->findDependentRowset('Application_Model_Comments');
        //Coloca na variavel post
        $this->view->comments = $listaPostComments;
    }

}
