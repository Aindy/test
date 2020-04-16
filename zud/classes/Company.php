<?php

class Company extends Application {

    private $business = 'company';
    public static $currency = '&#8381;'; // use as echo Company::$currency;

    public function getCompany() {
        $sql = "SELECT * FROM `{$this->business}`
				WHERE `id` = 1";
        return $this->db->getOneRecord($sql);
    }

    public function updateCompany($fields = null){
        if(!empty($fields)){
            $this->db->update($fields);
            return $this->db->updateTable($this->business, 1);
        }
    }


}