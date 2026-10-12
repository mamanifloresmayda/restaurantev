<?php
include ("../../bd.php");

if(isset($_GET['txtID'])){

$txtID = (isset($_GET["txtID"])) ? $_GET["txtID"] : "";

$sentencia = $conexion->prepare("DELETE FROM tbl_banners WHERE ID=:id");
$sentencia->bindParam(":id", $txtID);
$sentencia->execute();

header("Location:index.php");
}

$sentencia = $conexion->prepare("SELECT * FROM tbl_banners");
$sentencia->execute();
$lista_banners = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($lista_banners);

include ("../../templates/header.php");
?>

Listar registro 

<div class="card">

   <a
    name=""
    id=""
    class="btn btn-primary btn-sm ms-3 mt-2"
    href="crear.php"
    role="button"
    style="width: fit-content;"
    >Agregar registro</a>

    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-primary">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Enlace</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

<tbody>

<?php foreach ($lista_banners as $key => $value) { ?>

<tr>
    <td scope="row"><?php echo $value['ID']; ?></td>
    <td><?php echo $value['titulo']; ?></td>
    <td><?php echo $value['descripcion']; ?></td>
    <td><?php echo $value['link']; ?></td>
    <td>

        <a 
        name="" 
        id="" 
        class="btn btn-info" 
        href="editar.php?txtID=<?php echo $value['ID']; ?>" 
        role="button">Editar</a>

        <a 
        name="" 
        id="" 
        class="btn btn-danger" 
        href="index.php?txtID=<?php echo $value['ID']; ?>" 
        role="button">Eliminar</a>

    </td>
</tr>

<?php } ?>

</tbody>

</table>

        </div>
        
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>

    </div>

    <div class="card-footer text-muted">Footer</div>

</div>

<?php
include ("../../templates/footer.php");
?>