<?php
require_once __DIR__.'/../../src/Core/DB.php';
class AdminModel{
  private $db;
    public function __construct(){
        $this->db = DB::getDB();
    }
  function getAllObjType(){
		$sql = "SELECT * FROM seсtion";
		return $this->db->getAll($sql);
	}

}
$connect = new AdminModel;
$res = $connect->getAllObjType();

var_dump($res);
