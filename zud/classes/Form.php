<?php

class Form {

    public function isPost($field = null){
        if(!empty($field)){
            if(isset($_POST[$field])){
                return true;
            }
            return false;
        } else {
            if(!empty($_POST)){
                return true;
            }
            return false;
        }
    }

    // Used for security in forms, so that users cannot insert html and javascript code.
    public function getPost($field = null){
        if(!empty($field)){
            // If the POST has been set (if form is submitted) remove any html tags for security reasons.
            return $this->isPost($field) ? $_POST[$field] : null;
        }
    }

    public function selectField($field, $value, $default = null){
        // If the form has been submitted with the specified field name
        if($this->isPost($field) && $this->getPost($field) == $value) {
            return " selected=\"selected\"";
        } else {
            return !empty($default) && $default == $value ? " selected=\"selected\"" : null;
        }
    }

    // Method for all forms used to stripslashes and also to leave the values in the forms as they are
    public function textField($field, $value = null){
        // stripslashes method used to avoid different kinds of characters in a
        // textfield with slashes.
        if($this->isPost($field)){
            return $this->getPost($field);
        } else {
            return !empty($value) ? $value : null;
        }
    }

    // See Valid.php process() method.
    public function getPostArray($expect = null){

        $print = array();
        // if post is submitted
        if($this->isPost()){
            foreach($_POST as $key => $value){

                if(!empty($expect)){
                    if(in_array($key, $expect)){
                        //removing the html tags using strip_tags
                        $print[$key] = $value;
                    }
                } else {
                    $print[$key] = $value;
                }
            }
        }

        return $print;
    }



}