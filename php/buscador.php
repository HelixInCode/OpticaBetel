<?php
require_once('../conexion.php');
	
	sleep(1);
$search = '';
if (isset($_POST['search'])){
	$search= $_POST['search'];
}
$consulta= "SELECT * FROM registro WHERE nombre LIKE '%".$search."%' OR dni LIKE '%".$search."%' ORDER BY id ";
$resultado= $conexion->query($consulta);
$fila=mysqli_fetch_assoc($resultado);

$total= mysqli_num_rows($resultado);

?>
<?php if($total>0 && $search!=''){ ?>
<h4>Resultados de la búsqueda</h4>
<br><br>
  <table class="table table-striped table-hover">
        <thead>
            <tr> 
                <th>Número<th>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th></th>
                
                <th>Editar</th>
                <th>Borrar</th>             
            </tr>
        </thead>
        <tbody>
<?php do { ?>

	<tr>
                <td><?php echo $fila['id'] ?> </td>
                <td><?php echo "" ?></td>
                <td><?php echo $fila['fecha'] ?> </td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo substr($fila['dni'], 0,5) ?></td>
                <td><?php echo "" ?></td>
                
                <?php $idSocio=$fila['id']; ?>
                <td><a href='<?php echo "detallesSocio.php?id=$idSocio" ?>'> <button class="btn btn-info"><span class="glyphicon glyphicon-pencil" ></span></button></a></td>
                <td><a href='<?php echo "confirmar.php?id=$idSocio" ?>'><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span></button></a></td>
            </tr>   

	

	</div>
<?php } while ($fila=mysqli_fetch_assoc($resultado)) ?>



<?php }
else echo'<h5>No se han encontrado resultados</h5>';

 ?>