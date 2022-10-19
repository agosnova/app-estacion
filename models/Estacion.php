<?php 
include "dataBase.php";

class Estacion extends DataBase{
	function listar(){
		return $this-> consulta("SELECT * FROM estaciones")->fetch_all(MYSQLI_ASSOC);
	}
	function buscar($chipid){
		return $this-> consulta("SELECT * FROM estaciones WHERE chipid='$chipid'")->fetch_all(MYSQLI_ASSOC)[0];
	}
	function info($chipid, $limit){
		return $this-> consulta("SELECT * FROM tiempo WHERE chipid='$chipid' ORDER BY fecha desc limit $limit")->fetch_all(MYSQLI_ASSOC);
	}
}

 ?>