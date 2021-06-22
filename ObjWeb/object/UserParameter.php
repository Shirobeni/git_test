<?php

class UserParameter{
    public static $userName;
    public static $userMail;
    public static $userPass;

    public static function setUser($user_name,$user_mail,$user_pass){
        self::$userName = $user_name;
        self::$userMail = $user_mail;
        self::$userPass = $user_pass;
    }

    public static function getUser(){
        return [self::$userName,self::$userMail,self::$userPass];
    }
}