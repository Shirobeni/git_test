<?php
require_once 'C:\xampp\htdocs\ObjWeb\flameWork\DBSQLManager.php';

class SubblogDBManager extends DBSQLManager{
    private $dsn = 'mysql:dbname=mydb; host=127.0.0.1; charset=utf8';
    private $usr = 'root';
    private $pass = '';
    public $state_message = '';
    public $getSel = [];

    public function db_insert($array_log){
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $ins = $pdo->prepare("INSERT INTO mini_blog(name,message,user_name,user_mail,user_pass) VALUES ('$array_log[0]','$array_log[1]','$array_log[2]','$array_log[3]','$array_log[4]')");
            $ins->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            $this->state_message = 'FALSE';
            echo "接続エラー(アップロードできませんでした):{$e->getMessage()}";
        }
        return $this->state_message;
    }

    public function db_select($selecter,$wherer){
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sel = $pdo->prepare("SELECT $selecter FROM mini_blog $wherer");
            $sel->execute();
            $sel_rows = $sel->fetchAll(PDO::FETCH_ASSOC);
            foreach($sel_rows as $slk => $sel_row){
                foreach($sel_row as $k => $sl ){
                    $this->getSel[$slk][$k] = $sl;
                }
            }
            if ($sel_rows == true){
                $this->state_message = 'TRUE';
            }else{
                $this->state_message = 'FALSE';
            }
        }catch(PDOException $e){
            echo "接続エラー:{$e->getMessage()}";
        }
        return [$this->state_message,$this->getSel];
    }

    public function db_update($update_index,$wherer)
    {
        $this->state_message = 'FALSE';
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE mini_blog SET name = '$update_index[0]',message = '$update_index[1]' WHERE $wherer";
            echo $sql;
            $upd = $pdo->prepare($sql);
            $upd->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            $this->state_message = 'FALSE';
            echo "接続エラー:{$e->getMessage()}";
        }
        return $this->state_message;
    } 

    public function db_delete($wherer){
        $this->state_message = 'FALSE';
        try{
            $pdo = new PDO($this->dsn,$this->usr,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $del = $pdo->prepare("DELETE FROM mini_blog WHERE $wherer");
            $del->execute();
            $this->state_message = 'TRUE';
        }catch(PDOException $e){
            $this->state_message = 'FALSE';
            echo "接続エラー:{$e->getMessage()}";
        }
        return $this->state_message;
    }
    

}