<?php

class Paging {

    public static $paging = 'pg';
    private $numPages;
    public $numRecords;
    private $currentPage;
    private $maximum;
    private $url;
    private $records;
    private $offset = 0;

    public function __construct($rows, $max = 3){
        $this->records = $rows;
        $this->numRecords = count($this->records);
        $this->maximum = $max;
        $this->url = URL::getURL(self::$paging);
        $current = URL::getParameter(self::$paging);
        $this->currentPage = !empty($current) ? $current : 1;
        $this->numOfPages();
        $this->getOffset();
    }

    public function getRecords(){
        $arr = array();
        if($this->numPages > 1){
            $last = ($this->offset + $this->maximum);
            for($i = $this->offset; $i < $last; $i++){
                if($i < $this->numRecords){
                    $arr[] = $this->records[$i];
                }
            }
        } else {
            $arr = $this->records;
        }
        return $arr;
    }

    private function numOfPages(){
        $this->numPages = ceil($this->numRecords / $this->maximum);
    }

    private function getOffSet(){
        $this->offset = ($this->currentPage - 1) * $this->maximum;
    }

    private function pagingLinks(){
        if($this->numPages > 1){
            $arr = array();

            // previous link
            if($this->currentPage > 1){
                //previous page number
                $id = ($this->currentPage - 1);
                $currentURL = $id > 1 ? $this->url."&amp;".self::$paging."=".$id : $this->url;
                $arr[] = "<li class='previous'><a href='{$currentURL}'>&larr; Предыдущие</a></li>";
            } else{
                $arr[] = "<li class='previous disabled'><a href='#'>&larr; Предыдущие</a></li>";
            }

            // next page
            if($this->currentPage != $this->numPages){
                $id = ($this->currentPage + 1);
                $currentURL = $this->url."&amp;".self::$paging."=".$id;
                $arr[] = "<li class='next'><a href='{$currentURL}'>Следующие &rarr;</a></li>";
            } else{
                $arr[] = "<li class='next disabled'><a href='#'>Следующие &rarr;</a></li>";
            }

            return implode('', $arr);
        }
    }

    public function getPaging(){
        $pages = $this->pagingLinks();
        if(!empty($pages)){
            $print = "<ul class='pager'>";
            $print .= $pages;
            $print .= "</ul>";
            return $print;
        }
    }



}