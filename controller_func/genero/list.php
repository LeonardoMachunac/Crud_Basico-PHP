<?php
include_once("../../model_class/genero.php");
$obj_gen= new genero();
$rs=$obj_gen->read();
$count=0;
?>
<table id="table_generos" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>N°</th>
			<th>Genero</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
	</thead>
		<tbody>
				<?php
				$estado="";$class_btn_opc_act_des="";$btn_desc="";
				while($fila=mysqli_fetch_assoc($rs)){ 
					$count++;
					if($fila["estado"]=="1"){
						$estado="Activo";
						$class_btn_opc_act_des="desactivar_gen";
						$btn_desc="Desactivar"; 
					}else{
						$estado="Inactivo";
						$class_btn_opc_act_des="activar_gen";
						$btn_desc="Activar";
					}
					?>
					<tr>
						<td><?php echo $count;?></td>
						<td><?php echo $fila["descripcion"];?></td>
						<td><?php echo $estado?></td>
						<td>
							<button class="btn btn-info new_gen" data-id="<?php echo $fila["id_genero"]?>">Editar</button>
							<button class="btn btn-danger <?php echo $class_btn_opc_act_des;?>" 
							data-id="<?php echo $fila["id_genero"]?>"><?php echo $btn_desc; ?></button>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>

			<script>
				$(function (){
					$("#table_generos").DataTable({
						"paging":true,
						"lengthChange": false,
						"searching": true,
						"ordering": false,
						"info": true,
						"autoWidth": false,
					});
				});
				</script>


	<?php die();?>