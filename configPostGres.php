<?php
	define('driver','postgres');
	define('host','localhost');
	define('user','postgres');
	define('port', '5432');
	define('pass','qwerty'); //3306 MySql - 5432 PostGres
	define('database','bdName');
	define('charset','utf8');
	//Constante de registros por pagina -> Paginacion de resultados
	define('tamanoPagina', 10);
	//Constante de paginas por bloque -> Paginacion de resultados
	define('tamanoBloque',2);
	define('PaginaPrincipal', 'administracion.php');
	//Marca
	define('nombreEmpresa','Dany Pascual Gomez Sanchez.');
	define('webUrl','www.quimeraingenieria.com.co');
/*
	$ops:
	1 Listar
	2 Registrar
	3 Actualizar
	4 Eliminar
*/
?>