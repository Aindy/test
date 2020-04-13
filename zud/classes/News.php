<?php

class News extends Application{

    private $categories = 'categories';
    private $news = 'news';
    public $path = 'img/news/';

    public function getCategories() {
        $sql = "SELECT * FROM `{$this->categories}`
				ORDER BY `id` ASC";
        return $this->db->getAllRecords($sql);
    }

    public function getCategory($id){
        $sql = "SELECT * FROM `{$this->categories}`
				WHERE `id` = '".$this->db->escape($id)."'";
        return $this->db->getOneRecord($sql);
    }

    // Adds new category to the database, used in admin panel.
    public function addCategory($name = null){
        if(!empty($name)){
            $sql = "INSERT INTO `{$this->categories}`
					(`name`) VALUES ('".$this->db->escape($name)."')";
            return $this->db->query($sql);
        }
    }

    // Updates the category in categories table
    public function updateCategory($name = null, $id = null){
        if(!empty($name) && !empty($id)){
            $sql = "UPDATE `{$this->categories}`
					SET `name` = '".$this->db->escape($name)."'
					WHERE `id` = '".$this->db->escape($id)."'";
            return $this->db->query($sql);
        }
        return false;
    }

    // Removes the category from database. used in admin panel
    public function removeCategory($id = null){
        if(!empty($id)){
            $sql = "DELETE FROM `{$this->categories}`
					WHERE `id` = '".$this->db->escape($id)."'";
            $this->db->query($sql);
        }
        return false;
    }

    // Check if the category is already exists.
    public function sameCategory($name = null, $id = null){
        if(!empty($name)){
            $sql  = "SELECT * FROM `{$this->categories}` 
					WHERE `name` = '".$this->db->escape($name)."'";
            $sql .= !empty($id) ? " AND `id` != '".$this->db->escape($id)."'" : null;

            return $this->db->getOneRecord($sql);
        }
        return false;
    }

    public function getNewsByCategory($cat){
        $sql = "SELECT * FROM `{$this->news}`
				WHERE `category` = '".$this->db->escape($cat)."'
				ORDER BY `date` DESC";
        return $this->db->getAllRecords($sql);
    }

    public function getOneNews($id){
        $sql = "SELECT * FROM `{$this->news}`
				WHERE `id` = '".$this->db->escape($id)."'";
        return $this->db->getOneRecord($sql);
    }

    public function getAllNews(){
        $sql = "SELECT * FROM `{$this->news}`
				ORDER BY `date` DESC";
        return $this->db->getAllRecords($sql);
    }

    public function getNewsBySearch($srch = null){
        $sql = "SELECT * FROM `{$this->news}`";
        if(!empty($srch)) {
            $srch = $this->db->escape($srch);
            $sql .= " WHERE `title` LIKE '%{$srch}%' || `id` = '{$srch}'";
        }
        $sql .= " ORDER BY `date` DESC";
        return $this->db->getAllRecords($sql);
    }

    // Adds news to the database from Admin Panel
    public function addNews($fields = null){
        if(!empty($fields)){
            $fields['date'] = Check::setDate(); //assigning current date
            $this->db->insert($fields);
            $array = $this->db->insertData($this->news);
            $this->id = $this->db->id;
            return $array;
        }
        return false;
    }

    // Updates item in the Admin panel
    public function updateNews($fields = null, $id = null){
        if (!empty($fields) && !empty($id)){
            $this->db->update($fields);
            return $this->db->updateTable($this->news, $id);
        }
    }

    // Removes item from database used in Admin Panel
    public function removeNews($id = null){
        if(!empty($id)){
            $aNews = $this->getOneNews($id);
            if(!empty($aNews)){
                // deleting the image
                if (is_file(NEWS_FOLDER.DIR_SEP.$aNews['image'])) {
                    unlink(NEWS_FOLDER.DIR_SEP.$aNews['image']);
                }
                $sql = "DELETE FROM {$this->news}
						WHERE id = '".$this->db->escape($id)."'";
                return $this->db->query($sql);
            }
            return false;
        }
        return false;
    }



}