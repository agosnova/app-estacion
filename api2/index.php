<?php 
	define("URL_BASE","/alumno/3816/app-clima/api2/");
	$request=explode("/",str_replace(URL_BASE,"",$_SERVER["REQUEST_URI"]));
	$request=array_filter($request);
	if(!count($request)){
		echo json_encode(array("en"=>404,"error"=>"falta modelo"));
	}else{
		$modelo=ucfirst(strtolower($request[0]));
		if(!file_exists("../models/".$modelo.".php")){
			echo json_encode(array("en"=>404,"er"=>"no existe modelo"));
		}else{
			if(!isset($request[1])){
				echo json_encode(array("en"=>404,"er"=>"falta el parametro 2"));
			}else{
				include "../models/".ucfirst(strtolower($modelo)).".php";
				$metodo=$request[1];
				if(!method_exists($modelo,$metodo)){
					echo json_encode(array("en"=>404,"er"=>"metodo no existente en la clase"));
				}else{
					$obj=new $modelo;
					echo json_encode($obj->$metodo());
				}
			}
		}
	}
 ?>