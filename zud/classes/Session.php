<?php

class Session {

    public static function getSession($session = null){
        if(!empty($session)){
            return isset($_SESSION[$session]) ? $_SESSION[$session] : null;
        }
    }

    public static function setSession($name = null, $value = null){
        if(!empty($name) && !empty($value)){
            $_SESSION[$name] = $value;
        }
    }


}