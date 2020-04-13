<?php

class Login {

    public static $login_page = "?page=login";
    public static $user_login = "uID";

    // for admin
    public static $login_page_admin = "?page=index";
    public static $dashboard_admin = "?page=news";
    public static $admin_login = "aID";

    public static $redirect = "redirect";
    public static $valid = "valid";

    // Checking if the user is logged in already
    public static function loggedIn($case = null){
        if(!empty($case)){
            if(isset($_SESSION[self::$valid]) && $_SESSION[self::$valid] == 1){
                return isset($_SESSION[$case]) ? true : false;
            }
            return false;
        }
        return false;
    }

    public static function adminLogin($id = null, $url = null) {
        if(!empty($id)) {
            $url = !empty($url) ? $url : self::$dashboard_admin;
            $_SESSION[self::$admin_login] = $id;
            $_SESSION[self::$valid] = 1;

            Check::redirect($url);
        }
    }

    public static function noAccess(){
        // Checking if the user is logged in
        if(!self::loggedIn(self::$user_login)){
            $url = URL::currentPage() != "logout" ?
                self::$login_page."&".self::$redirect."=".URL::currentPage() :
                self::$login_page;

            Check::redirect($url);
        }
    }

    public static function noAccessAdmin(){
        if(!self::loggedIn(self::$admin_login)){
            Check::redirect(self::$login_page_admin);
        }
    }

    // encrypting string (passwords) with hash encryption called sha384,
    // can be used any hash function.
    public static function encrypt($string = null){ // See Valid.php -> format() method
        if(!empty($string)){
            return hash('sha384', $string);
        }
    }

    // logout the user.
    public static function logout($case = null){
        if(!empty($case)){
            $_SESSION[$case] = null;
            $_SESSION[self::$valid] = null;
            unset($_SESSION[$case]);
            unset($_SESSION[self::$valid]);
        } else {
            session_destroy();
        }
    }



}