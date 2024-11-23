<?php
/*
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "root";
$db_name = "test_php";
*/
$host_db="sql305.byetcluster.com";
$user_db="if0_37329458";
$pass_db="6GMKtySO9U4Zq8I";
$db_name="if0_37329458_test_php";
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>