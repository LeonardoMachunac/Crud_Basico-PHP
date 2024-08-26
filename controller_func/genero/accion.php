<?php
include_once("../../model_class/genero.php");
$obj_gen=new genero();

if(isset($_REQUEST["opcion_estado"])){
    if($_REQUEST["opcion_estado"]=="desactivar"){
        $obj_gen->id_genero=$_REQUEST["id"];
        $obj_gen->desactivar();
        echo "true";
        die();
    }else if($_REQUEST["opcion_estado"]=="activar"){
        $obj_gen->id_genero=$_REQUEST["id"];
        $obj_gen->activar();
        echo "true";
        die();
    }   
}

$obj_gen->id_genero=$_REQUEST["id"];
$obj_gen->descripcion=$_REQUEST["txt_genero"];


if($_REQUEST["id"]==0){
    $obj_gen->create();
    echo "true";
    die();
}else{
    $obj_gen->update();
    echo "true";
    die();
    }
?>