<?php
include("../../bd.php");

// inicializar variables
$titulo = "";
$descripcion = "";
$link = "";
$txtID = "";

// SI VIENE ID POR LA URL (GET)
if(isset($_GET['txtID']) && !empty($_GET['txtID'])){

    $txtID = $_GET['txtID'];

    $sentencia = $conexion->prepare("SELECT * FROM tbl_banners WHERE ID = :id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);

    if($registro !== false){
        $titulo = $registro["titulo"];
        $descripcion = $registro["descripcion"];
        $link = $registro["link"];
    } else {
        echo "⚠️ No existe ese banner en la base de datos";
    }
}


// CUANDO PRESIONAS MODIFICAR
if($_POST){

    $titulo = (isset($_POST["titulo"])) ? $_POST["titulo"] : "";
    $descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $link = (isset($_POST["link"])) ? $_POST["link"] : "";
    $txtID = (isset($_POST["txtID"])) ? $_POST["txtID"] : "";

    $sentencia = $conexion->prepare("UPDATE tbl_banners 
    SET titulo=:titulo, descripcion=:descripcion, link=:link
    WHERE ID=:id");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);
    $sentencia->bindParam(":id", $txtID);

    $sentencia->execute();

    header("Location:index.php");
}

include("../../templates/header.php");
?>

<br/>

<div class="card">
<div class="card-header">
Banners
</div>

<div class="card-body">

<form action="" method="post">

<div class="mb-3">
<label for="txtID" class="form-label">ID</label>
<input
type="text"
class="form-control"
value="<?php echo $txtID;?>"
name="txtID"
id="txtID"
readonly
/>
</div>

<div class="mb-3">
<label for="titulo" class="form-label">Titulo</label>
<input
type="text"
class="form-control"
value="<?php echo $titulo;?>"
name="titulo"
id="titulo"
/>
</div>

<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion</label>
<input
type="text"
class="form-control"
value="<?php echo $descripcion;?>"
name="descripcion"
id="descripcion"
/>
</div>

<div class="mb-3">
<label for="link" class="form-label">Link</label>
<input
type="text"
class="form-control"
value="<?php echo $link;?>"
name="link"
id="link"
/>
</div>

<button type="submit" class="btn btn-success">Modificar banner</button>
<a class="btn btn-primary" href="index.php">Cancelar</a>

</form>

</div>

<div class="card-footer text-muted">
</div>
</div>

<?php include("../../templates/footer.php"); ?>