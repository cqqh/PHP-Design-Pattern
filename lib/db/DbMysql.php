<?php
namespace lib\db;

class DbMysql implements DbInterface{
    public function connect(Array $params=array()){
        echo 'connect';
    }

    public function query($sql){

    }

    public function insert($table, $record){

    }

    public function update($table, $record, $where){

    }

    public function delete($table, $where){

    }

}