<?php
//bdT -> BD Type
extract($_GET);
require_once('../hclinica/models/mdl_sqlBase.php');
$sqlBase = new mdl_sqlBase('usuario', 'configMySQLi.php');
//echo '<h1 align="center">Rta Eliminacion PDO: '.$sqlBase->buscarUno('ced_usr', $ced).'</h1>';
$arreglo = $sqlBase->buscarUno('ced_usr', $ced);

foreach($arreglo as $valor){
	echo "Nombres y apellidos: ".$valor['nom_usr']." ".$valor['ape_usr']."<br>";
}


	public function buscarUno($campo, $valor){

		try {
			$this->sql = $this->con->prepare("SELECT * FROM ".$this->table." WHERE ".$campo."=:valor");
			$this->sql->bindParam(':valor', $valor);
			$this->sql->execute();
			return $this->sql->fetchAll();
			$this->con = null;
		}catch (PDOException $e) {
            //$e->getMessage();
			return 0;
        }
		
	}





try {
				
	$consulta = $this->con->prepare("SELECT * FROM departamento");	
	$consulta->execute();
	$numrows = $consulta->rowCount();
	if($numrows>0){
	
		while($row = $consulta->fetch(PDO::FETCH_ASSOC)){   
				
			$array[]= array(
				'id_dep'=>$row['id_dep'],
				'nom_dep'=>utf8_encode(ucwords($row['nom_dep']))
			);
		}
		
	}
	return $array;
	$this->con = null;
	
}catch (PDOException $e) {
	
	//$e->getMessage();
	return 0;

}	


/*

if(!isset($bdT) || $bdT=='mysql' || $bdT==''){

echo "<br><H1 align='center'>PDO MySQLi </h1>";
require_once('models/conexion.php');
$con = new conexion('configMySQLi.php');
$con = $con->conectar();

$ced = $_GET["ced"];
$cla = $_GET["cla"];


$consulta = $con->prepare("SELECT * FROM usuario WHERE ced_usr=:cedula AND cla_usr=:clave AND est_usr='1'");	
$consulta->bindParam(':cedula', $ced);
$consulta->bindParam(':clave', $cla);
$consulta->execute();
$numrows = $consulta->rowCount();

if($numrows>0){

	while($row = $consulta->fetch(PDO::FETCH_ASSOC)){   
			
			$arreglo[] = array(
					'nom_usr' => $row['nom_usr'], 
					'ape_usr' => $row['ape_usr']
			);
	}
}

foreach($arreglo as $valor){
	echo "Nombres y apellidos: ".$valor['nom_usr']." ".$valor['ape_usr']."<br>";
}



}else if($bdT=='postgres'){
	// url -> http://localhost:8080/PDO/index.php?bdT=postgres&ced=1102714782&cla=12345
	echo "<br><H1 align='center'>PDO PostGres</h1>";
	require_once('models/conexion.php');
	$con = new conexion('configPostGres.php');
	$con = $con->conectar();
	
	$ced = $_GET["ced"];
	$cla = $_GET["cla"];
	
	$consulta = $con->prepare("SELECT * FROM usuario WHERE ced_usr=:cedula AND cla_usr=:clave AND est_usr='1'");	
	$consulta->bindParam(':cedula', $ced);
	$consulta->bindParam(':clave', $cla);
	$consulta->execute();
	$numrows = $consulta->rowCount();
	
	if($numrows>0){
	
		while($row = $consulta->fetch(PDO::FETCH_ASSOC)){   
				
				$arreglo[] = array(
						'nom_usr' => $row['nom_usr'], 
						'ape_usr' => $row['ape_usr']
				);
		}
	}
	
	foreach($arreglo as $valor){
		echo "Nombres y apellidos: ".$valor['nom_usr']." ".$valor['ape_usr']."<br>";
	}


}
*/
?>