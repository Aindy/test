<?php



class Project extends Application{ 


    private $industries = 'industries';

    private $project = 'project';

    public $path = 'img/project/';


    public function getIndustries() {

            $sql = "SELECT * FROM `{$this->industries}`

                    ORDER BY `id` ASC";

            return $this->db->getAllRecords($sql);

        }



    public function getIndustry($id){

        $sql = "SELECT * FROM `{$this->industries}`

                WHERE `id` = '".$this->db->escape($id)."'";

        return $this->db->getOneRecord($sql);

    }



    // Adds new industry to the database, used in admin panel.

    public function addIndustry($name = null){

        if(!empty($name)){

            $sql = "INSERT INTO `{$this->industries}`

                    (`name`) VALUES ('".$this->db->escape($name)."')";

            return $this->db->query($sql);

        }

    }



    // Updates the industry in industries table

    public function updateIndustry($name = null, $id = null){

        if(!empty($name) && !empty($id)){

            $sql = "UPDATE `{$this->industries}`

                    SET `name` = '".$this->db->escape($name)."'

                    WHERE `id` = '".$this->db->escape($id)."'";

            return $this->db->query($sql);

        }

        return false;

    }



    // Removes the industry from database. used in admin panel

    public function removeIndustry($id = null){

        if(!empty($id)){

            $sql = "DELETE FROM `{$this->industries}`

                    WHERE `id` = '".$this->db->escape($id)."'";

            $this->db->query($sql);

        }

        return false;

    }



    // Check if the industry is already exists.

    public function sameIndustry($name = null, $id = null){

        if(!empty($name)){

            $sql  = "SELECT * FROM `{$this->industries}` 

                    WHERE `name` = '".$this->db->escape($name)."'";

            $sql .= !empty($id) ? " AND `id` != '".$this->db->escape($id)."'" : null;



            return $this->db->getOneRecord($sql);

        }

        return false;

    }



    public function getProjectsByIndustry($ind){

        $sql = "SELECT * FROM `{$this->project}`

                WHERE `industry` = '".$this->db->escape($ind)."'

                ORDER BY `date` DESC";

        return $this->db->getAllRecords($sql);

    }

    public function getOneProject($id){

        $sql = "SELECT * FROM `{$this->project}`

				WHERE `id` = '".$this->db->escape($id)."'";

        return $this->db->getOneRecord($sql);

    }



    public function getAllProject(){

        $sql = "SELECT * FROM `{$this->project}`

				ORDER BY `date` DESC";

        return $this->db->getAllRecords($sql);

    }



    public function getProjectBySearch($srch = null){

        $sql = "SELECT * FROM `{$this->project}`";

        if(!empty($srch)) {

            $srch = $this->db->escape($srch);

            $sql .= " WHERE `title` LIKE '%{$srch}%' || `id` = '{$srch}'";

        }

        $sql .= " ORDER BY `date` DESC";

        return $this->db->getAllRecords($sql);

    }



    // Adds news to the database from Admin Panel

    public function addProject($fields = null){

        if(!empty($fields)){

            $fields['date'] = Check::setDate(); //assigning current date

            $this->db->insert($fields);

            $array = $this->db->insertData($this->project);

            $this->id = $this->db->id;

            return $array;

        }

        return false;

    }



    // Updates item in the Admin panel

    public function updateProject($fields = null, $id = null){

        if (!empty($fields) && !empty($id)){

            $this->db->update($fields);

            return $this->db->updateTable($this->project, $id);

        }

    }



    // Removes item from database used in Admin Panel

    public function removeProject($id = null){

        if(!empty($id)){

            $aProject = $this->getOneProject($id);

            if(!empty($aProject)){

                // deleting the image

                if (is_file(Project_FOLDER.DIR_SEP.$aProject['image'])) {

                    unlink(Project_FOLDER.DIR_SEP.$aProject['image']);

                }

                $sql = "DELETE FROM {$this->project}

						WHERE id = '".$this->db->escape($id)."'";

                return $this->db->query($sql);

            }

            return false;

        }

        return false;

    }







}