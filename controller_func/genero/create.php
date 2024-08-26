<?php
include_once("../../model_class/genero.php");
$obj_gen=new genero();
$obj_gen->id_genero=$_REQUEST["id"];
$obj_gen->consult();
?>


<div class="row">
    <div class="col-12">
        <label for="txt_genero">Ingrese genero<i class="text-danger" title="Ingrese nombre">*</i>
            <label class="text-danger msj-txt_genero"></label></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-user"></i></span>
                </div>
                    <input type="hidden" id="id" name="id" value="<?php echo $obj_gen->id_genero;?>"/>
                    <input type="text" class="form-control" plaaceholder="Enter" id="txt_genero" name="txt_genero" 
                    value="<?php echo $obj_gen->descripcion; ?>"/>
            </div>
    </div>
</div>