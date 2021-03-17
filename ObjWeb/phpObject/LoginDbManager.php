<?php

require_once 'C:\xampp\htdocs\ObjWeb\phpObject\DBManager.php';

class LoginDbManager extends DbManager{
    private $dsn = '';
    private $usr = '';
    private $pass = '';
    public $state_message = '';

    public function db_insert($array_log){
        $this->dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $this->usr = 'root';
        $this->pass = '';
        $this->state_message = 'FALSE';
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $ins = $pdo->prepare("INSERT INTO subblog_user(log_name,log_mail,log_pass) VALUES ('$array_log[0]','$array_log[1]','$array_log[2]')");
            $ins->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            $this->state_message = 'FALSE';
            echo "接続エラー(アップロードできませんでした):{$e->getMessage()}";
        }
        return $this->state_message;
    }

    public function db_select($selecter,$wherer){
        $this->dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $this->usr = 'root';
        $this->pass = '';
        $this->state_message = 'FALSE';
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sel = $pdo->prepare("SELECT $selecter FROM subblog_user $wherer");
            $sel->execute();
            $sel_rows = $sel->fetchAll(PDO::FETCH_ASSOC);
            if($sel_rows == true){
                $this->state_message = 'TRUE';
                print_r('TRUE....');

            }else{
                $this->state_message = 'FALSE';
                print_r('FALSE....');
            
            }
        }catch(PDOException $e){
            echo "接続エラー:{$e->getMessage()}";
        }
        return $this->state_message;
    }

    public function db_update($update_index,$wherer){
        $this->dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $this->usr = 'root';
        $this->pass = '';
        $this->state_message = 'FALSE';
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $upd = $pdo->prepare("UPDATE subblog_user SET $update_index $wherer");
            $upd->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            $this->state_message = 'FALSE';
            echo "接続エラー：{$e->getMessage()}";
        }
        return $this->state_message;
    }

    public function db_delete($wherer){
        return $this->state_message;
    }



}