<?php
require_once 'C:\xampp\htdocs\ObjWeb\flamework\RequestArray.php';

class SubblogRequestArray extends RequestArray{
    self::$schema = [
        'name' = self::STRING,
        'message' = self::STRING,
        'user_pass' = self::STRING,
        'user_mail' = self::STRING,
        'user_pass' = self::STRING
    ];
}