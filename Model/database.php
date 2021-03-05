<?php

class Database{

	private $db;
	private $sites;

	public function __construct(){
       
       $this->sites = array();
       $this->db = new PDO('mysql:host=localhost;dbname=app_links', 'root', '');

	}

	 

    public function getlinks(){

    	$consulta = 'SELECT * FROM  enlaces';
        foreach($this->db->query($consulta) as $res){

             $this->sites[] = $res;
        }

        return $this->sites;
        
      }

    
    public function addlinks($link){

        $sql_add = "INSERT INTO enlaces (links) VALUES ('". $link . "')";
        $result = $this->db->query($sql_add);


    }

}

