<?php
include("../../bd.php");

if($_POST){

    $titulo = (isset($_POST["titulo"])) ? $_POST["titulo"] : "";
    $descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $link = (isset($_POST["link"])) ? $_POST["link"] : "";

    $sentencia = $conexion->prepare("INSERT INTO `tbl_banners`
    (`titulo`, `descripcion`, `link`)
    VALUES (:titulo, :descripcion, :link);");

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":link", $link);

    $sentencia->execute();
    header("Location:index.php");
}

include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header">Header</div>
    
    <div class="card-body">

<form action="" method="post">

<div class="mb-3">
    <label for="" class="form-label">titulo</label>
    <input
        type="text"
        class="form-control"
        name="titulo"
        id="titulo"
        aria-describedby="helpId"
        placeholder="Escriba el titulo del banners"
    />
</div>

<div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input
        type="text"
        class="form-control"
        name="descripcion"
        id="descripcion"
        aria-describedby="helpId"
        placeholder="Escriba la descripcion del banners"
    />
</div>

<div class="mb-3">
    <label for="" class="form-label">link</label>
    <input
        type="text"
        class="form-control"
        name="link"
        id="link"
        aria-describedby="helpId"
        placeholder="Escriba el enlace"
    />
</div>

<button type="submit" class="btn btn-success">Crear banner</button>

<a
class="btn btn-primary" 
href="index.php"
role="button">Cancelar</a>

</form>

        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
    </div>

    <div class="card-footer text-muted">Footer</div>
</div>

<?php
include("../../templates/footer.php");
?>