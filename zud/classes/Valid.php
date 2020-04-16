<?php

class Valid {

    private $form; // form object
    private $errors = array(); //for storing all error ids
    public $expect = array(); //list of expected fields
    public $required = array(); //list of required fields
    public $spec_field = array(); // list of special validation fields
    public $post = array(); // list of values that is sent through the form
    public $remove_post = array(); //fields to be removed from the $post array (not adding to db)
    public $format_post = array(); //fileds to be specifically formatted(like password for encryption)
    // messages for user (validation message)
    public $message = array(
        "email"             => "Пожалуйста, введите правильный email",
        "same-email"        => "Такой email уже существует, введите другой",
        "login"             => "Пожалуйста, введите правельный логин и пароль.",
        "password"          => "Пожалуйста, придумайте пароль",
        "confirm_password"  => "Пожалуйста, подтвердите пароль",
        "password_match"    => "Пароли не идентичны",
        "category"			=> "Пожалуйста, выберите любую категорию",
        "category_exists"	=> "Эта категория уже существует",
        "title"             => "Пожалуйста, введите заголовок",
        "content"           => "Пожалуйста, введите текст новости"
    );

    public function __construct($form){
        $this->form = $form;
    }

    public function process(){
        //if form has been submitted and required array is empty there is nothing to validate
        if($this->form->isPost() && !empty($this->required)){
            // get only expected fields
            $this->post = $this->form->getPostArray($this->expect); // see Form.php getPostArray() method
            if(!empty($this->post)){
                foreach($this->post as $key => $value){
                    $this->check($key, $value);
                }
            }
        }
    }

    // Adding errors tho the error array
    public function addErrors($key){
        $this->errors[] = $key;
    }

    public function check($key, $value){
        if(!empty($this->spec_field) && array_key_exists($key, $this->spec_field)) {
            $this->checkSpecField($key, $value);
        } else {
            // if the field is required
            if(in_array($key, $this->required) && empty($value)){
                $this->addErrors($key);
            }
        }
    }

    // Checking the email submitted in the form
    public function checkSpecField($key, $value){
        switch($this->spec_field[$key]){
            case 'email':
                if (!$this->isEmail($value)){
                    $this->addErrors($key);
                }
                break;
        }
    }

    // To validate an email addresses
    public function isEmail($email = null){
        if(!empty($email)){
            $result = filter_var($email, FILTER_VALIDATE_EMAIL);
            return !$result ? false : true;
        }
        return false;
    }

    public function isValid(){
        $this->process();
        if(empty($this->errors) && !empty($this->post)){
            // Remove all unwanted fields.
            if(!empty($this->remove_post)){
                foreach($this->remove_post as $value){
                    unset($this->post[$value]); // removing the values from the post array
                }
            }
            // Format all required fields
            if(!empty($this->format_post)){
                foreach($this->format_post as $key => $value){
                    $this->format($key, $value);
                }
            }
            return true;
        }
        return false;
    }

    // Format required field
    public function format($key, $value){
        switch($value){
            case 'password':
                // Encrypting the password which is sent as plaintext
                $this->post[$key] = Login::encrypt($this->post[$key]);
                break;
        }
    }

    public function validate($key){
        // if there is nothing in error array, meaning if there is it wouldn't be validated
        if(!empty($this->errors) && in_array($key, $this->errors)){
            return $this->warning($this->message[$key]);
        }
    }

    // Method to display the warning in the form.
    public function warning($message = null){
        if(!empty($message)){
            return "<span class=\"text-danger\">{$message}</span>";
        }
    }


}

