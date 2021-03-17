<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\DBManager.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\DBManager.php';


class UpdateDBManager extends DBManager{
    private $dsn = '';
    private $usr = '';
    private $pass = '';
    public $state_message = '';
    public $getSel = [];

    public function db_insert($array_log){
        $this->dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $this->usr = 'root';
        $this->pass = '';

        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $ins = $pdo->prepare("INSERT INTO update_logger(updatelog,update_at) VALUES('$array_log[0]','$array_log[1]')");
            $ins->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            echo "接続エラー(アップロードできませんでした):{$e->getMessage()}";
            $this->state_message = 'FALSE';
        }
        return $this->state_message;
    }

    public function db_select($selecter,$wherer){
        $this->dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $this->usr = 'root';
        $this->pass = '';

        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sel = $pdo->prepare("SELECT $selecter FROM update_logger $wherer");
            $sel->execute();
            $sel_rows = $sel->fetchAll(PDO::FETCH_ASSOC);
            //print_r($sel_rows);
            foreach($sel_rows as $slk => $sel_row){
                foreach($sel_row as $k => $sl){
                    $this->getSel[$slk][$k] = $sl;
                }
            }

            if($sel_rows == true){
                $this->state_message = 'TRUE';
            }else{
                $this->state_message = 'FALSE';
            }
        }catch(PDOException $e){
            echo "接続エラー:{$e->getMessage()}";
        }
        return [$this->state_message,$this->getSel];
    }

    public function db_update($update_index, $wherer){
        return $this->state_message;
    }
    public function db_delete($wherer){
        return $this->state_message;
    }
}