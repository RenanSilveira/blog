<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    /**
     * Salva o config no registry
     * @return void
     * @author Elton Minetto
     */
    public function _initConfig() {
        $config = new Zend_Config($this->getApplication()->getOptions(), true);
        Zend_Registry::set('config', $config);
    }

    /**
     * Inicializa a sessão
     * 	
     * @return void
     * @author Elton Minetto
     */
    public function _initSession() {
        $session = new Zend_Session_Namespace('Blog');
        Zend_Registry::set('session', $session);
    }

    /**
     * Inicializa o banco de dados. Somente necessário se desejado salvar a conexão no Registry
     * 
     * @return void
     * @author Elton Minetto
     */
    public function _initDb() {
        $db = $this->getPluginResource('db')->getDbAdapter();
        Zend_Db_Table::setDefaultAdapter($db);
        Zend_Registry::set('db', $db);
    }

}
