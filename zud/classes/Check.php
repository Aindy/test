<?php

class Check {

    // Adds active class to the links to change a style of the buttons
    public static function getActive($page = null) {
        if(!empty($page)) {
            if(is_array($page)) {
                $error = array();
                foreach($page as $key => $value) {
                    if(URL::getParameter($key) != $value) {
                        array_push($error, $key);
                    }
                }
                return empty($error) ? " class=\"act\"" : null;
            }
        }
        return $page == URL::currentPage() ? " class=\"act\"" : null;
    }

    public static function bootstrapActive($page = null) {
        if(!empty($page)) {
            if(is_array($page)) {
                $error = array();
                foreach($page as $key => $value) {
                    if(URL::getParameter($key) != $value) {
                        array_push($error, $key);
                    }
                }
                return empty($error) ? " class=\"active\"" : null;
            }
        }
        return $page == URL::currentPage() ? " class=\"active\"" : null;
    }

    public static function encodeHTML($str, $case = 2) {
        switch($case) {

            case 1:
                return htmlentities($str, ENT_NOQUOTES, 'UTF-8', false);
                break;

            case 2:
                $chars = '<([a-zA-Z0-9\.\, "\'_\/\-\+~=;:\(\)?&#%![\]@]+)>';
                // Put text only, devided with html tags into array.
                $text = preg_split('/' . $chars . '/', $str);
                // Array for cleaned output.
                $textCleaned = array();

                foreach($text as $key => $value) {
                    $textCleaned[$key] = htmlentities(html_entity_decode($value, ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8');
                }
                foreach($text as $key => $value) {
                    $str = str_replace($value, $textCleaned[$key], $str);
                }
                return $str;
                break;
        }
    }

    // Redirecting the user to the specified page
    public static function redirect($url = null){
        if(!empty($url)){
            header("Location: {$url}");
            exit;
        }
    }

    // Sets the date in different formats
    public static function setDate($case = null, $date = null){
        date_default_timezone_set('Europe/Moscow');
        $date = empty($date) ? time() : strtotime($date);
        switch($case){
            case 1:
                return date('d/m/Y', $date); // day/month/year
                break;

            case 2:
                // Full day and time representation:
                // Sunday, 1st May 2015, 14:37:52
                return date('l, jS F Y, H:i:s', $date);
                break;

            case 3:
                // Русский формат даты
                return self::rus_date('j F Y, H:i', $date);
                break;

            default:
                return date('Y-m-d H:i:s', $date);
        }
    }

    public static function rus_date() {
        $translate = array(
            "am" => "дп",
            "pm" => "пп",
            "AM" => "ДП",
            "PM" => "ПП",
            "Monday" => "Понедельник",
            "Mon" => "Пн",
            "Tuesday" => "Вторник",
            "Tue" => "Вт",
            "Wednesday" => "Среда",
            "Wed" => "Ср",
            "Thursday" => "Четверг",
            "Thu" => "Чт",
            "Friday" => "Пятница",
            "Fri" => "Пт",
            "Saturday" => "Суббота",
            "Sat" => "Сб",
            "Sunday" => "Воскресенье",
            "Sun" => "Вс",
            "January" => "Января",
            "Jan" => "Янв",
            "February" => "Февраля",
            "Feb" => "Фев",
            "March" => "Марта",
            "Mar" => "Мар",
            "April" => "Апреля",
            "Apr" => "Апр",
            "May" => "Мая",
            "June" => "Июня",
            "Jun" => "Июн",
            "July" => "Июля",
            "Jul" => "Июл",
            "August" => "Августа",
            "Aug" => "Авг",
            "September" => "Сентября",
            "Sep" => "Сен",
            "October" => "Октября",
            "Oct" => "Окт",
            "November" => "Ноября",
            "Nov" => "Ноя",
            "December" => "Декабря",
            "Dec" => "Дек",
            "st" => "ое",
            "nd" => "ое",
            "rd" => "е",
            "th" => "ое"
        );
        if (func_num_args() > 1) {
            $timestamp = func_get_arg(1);
            return strtr(date(func_get_arg(0), $timestamp), $translate);
        } else {
            return strtr(date(func_get_arg(0)), $translate);
        }
    }


    // Cleaning the string from illigal characters in any fields.
    public static function cleanString($name = null) {
        if(!empty($name)) {
            return strtolower(preg_replace('/[^a-zA-Z0-9.]/', '-', $name));
        }
    }

    public static function shortenString($string, $length = 500){
        if (strlen($string) > $length){
            $string = trim(substr($string, 0, $length));
            $string = substr($string, 0, strrpos($string, " "))."&hellip;";
        } else {
            $string .= "&hellip;";
        }
        return $string;
    }


}


