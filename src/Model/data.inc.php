<?php

namespace Model;
use Database\Db;
use PDO;

class Data {
  
  public $dbh;
  
  public function __construct() {
    $db = new Db();
    $this->dbh = $db->getDbh();
  }
  
  public function getVisits($name) {
    
    $query = "SELECT * FROM `ga` ";
    $query .= "INNER JOIN `resources` r ON r.id=ga.resource_id ";
    $query .= "WHERE r.name=:name LIMIT 1";
 
    $sth = $this->dbh->prepare($query);
    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->bindValue(':name', $name);
    $sth->execute();
    $rows = $sth->fetchAll();
    
    return $rows[0];
  } 
  
}

