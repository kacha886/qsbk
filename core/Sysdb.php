<?php
/**
 * 链式操作
 */
class Sysdb{
    public function table($table) {
        $this->where = array();//初始化where条件，否则同一个对象，where条件会相同
        $this->table = $table;
        return $this;
    }

    public function where($where){
        $this->where = $where;
        return $this;
    }

    public function item(){
        $item = Db::item($this->table,$this->where);
        return $item;
    }
}