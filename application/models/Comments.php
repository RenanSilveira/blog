<?php

/**
 * Modelo da tabela comments
 *
 */
class Application_Model_Comments extends Zend_Db_Table_Abstract {

    protected $_name = 'comments';
    protected $_referenceMap = array(
        array(
            'columns' => 'post_id',
            'refTableClass' => 'Application_Model_Posts',
            'refColumns' => 'id'
        )
    );

}
