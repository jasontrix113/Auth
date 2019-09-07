<?php

class Model
{
    protected $db;
    protected $table;
    protected $fields = array();

    public function __construct($table)
    {
        $dbconfig['host'] = $GLOBALS['config']['host'];
        $dbconfig['user'] = $GLOBALS['config']['user'];
        $dbconfig['password'] = $GLOBALS['config']['password'];
        $dbconfig['dbname'] = $GLOBALS['config']['dbname'];
        $dbconfig['port'] = $GLOBALS['config']['port'];
        $dbconfig['charset'] = $GLOBALS['config']['charset'];

        $this->db = new Mysql($dbconfig);
        $this->table = $GLOBALS['config']['prefix'].$table;
        $this->getFields();

    }

    private function getFields()
    {
        $sql = "DESC" .$this->table;
        $result = $this->db->getAll($sql);

        foreach ($result as $v)
        {
            $this->fields[] = $v['Field'];
            if($v['Key']== 'PRI')
            {
                $pk = $v['Field'];
            }
            if(isset($pk))
            {
                $this->fields['pk'] = $pk;
            }
        }


    }
}

?>