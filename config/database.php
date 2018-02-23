<?php

namespace Database;
use PDO;

class Db {
  
  protected $db;
  public $config;
  public $params;
  
  public function __construct() {
    $this->config = new \Application\Config('localhost', 'root', '', 'db_ga');
    $this->params = $this->config->getConfig();
    
    try {
      $this->db = new PDO("mysql:host=".$this->params->host.";dbname=".$this->params->dbname.";charset=utf8", $this->params->user, $this->params->pass);
      $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8; SET CHARACTER SET utf8; SET SESSION collation_connection = utf8_general_ci;');
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    
  }
  
  public function getDbh() {
    return $this->db;
  }
}

