<?php
/**
 * 工厂类
 */

namespace lib;

class Factory {
    public static function getDb($type = 'mysql'){
        switch ($type){
            case 'mysql':
                return new db\DbMysql();
            case 'mysqli':
                return new db\DbMysqli();
        }
    }
}