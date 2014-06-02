
<?php

class Application_Model_Story extends Zend_Db_Table_Abstract{

    protected $_name = 'stories';
    
    function liststories($cat_id) {
        $select=$this->select()->setIntegrityCheck(false)->from('stories')->where("cat_id=$cat_id");
        //$select = $this->select()->setIntegrityCheck(false)->from('stories')->joinInner('result', 'path=story_path')->where("result.level>=stpries.level");
        return $this->fetchAll($select)->toArray(); 
    }

}