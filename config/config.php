<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application;

class Config {
  
  protected $host;
  protected $user;
  protected $pass;
  protected $dbname;
  public $resource;
  
  public function __construct($host, $user, $pass, $dbname) {
    $this->host = $host;
    $this->user = $user;
    $this->pass = $pass;
    $this->dbname = $dbname;
  }
  
  public function getConfig() {
    $config = new \stdClass();
    $config->host = $this->host;
    $config->user = $this->user;
    $config->pass = $this->pass;
    $config->dbname = $this->dbname;
    
    $config->resource = [
      "yahoo.com",
      "amazon.com",
      "ebay.com",
    ];
    
    return $config;
  }
  
  
}

