<?php

abstract class DBSQLManager{
    abstract public function db_insert($array_log);

    abstract public function db_select($selecter,$where);

    abstract public function db_update($update_index,$wherer);

    abstract public function db_delete($wherer);
}