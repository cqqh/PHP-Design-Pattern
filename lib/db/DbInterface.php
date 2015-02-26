<?php
namespace lib\db;

interface DbInterface{
    public function connect(Array $params=array());
    public function query($sql);
    public function insert($table, $record);
    public function update($table, $record, $where);
    public function delete($table, $where);
}
