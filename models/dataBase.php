   <?php 
include "credenciales.php";

class DataBase{

public $con;

 public function conectar(){
$this -> con=new mysqli(HOST,USER,PASS,DB,PORT);
if ($this -> con ->connect_errno) {
    die('Error de conexión: ' . $this -> con ->connect_error);
	}/*conecto con la base*/
 }

 public function consulta($sql){
 	$this -> conectar();
 	/*var_dump($con);*/
 	$result=$this -> con->query($sql);

	if($this -> con ->errno!=0){
		echo "<b>Error en la query:</b>".$this -> con ->error;
	}

 	$this -> con->close();
 	return $result;
	 }
 }

 ?>