<?php
include("../Ejercicio0/header.php");
include("funcionesEjercicio1.php");
?>

<h1 class="w3-center w3-xxxlarge">Sanchez Matias</h1>

<div class="w3-bar w3-flat-wet-asphalt">
    <div class="w3-half ">
        <a href="../index.php" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Punto
            de partida</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Insta-reciclado</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Lanzar
            dados</a>
    </div>
    <div class="w3-half">
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">Contador
            visitas</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray"
           style="width:33%">ConociendINIs</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile w3-third w3-hover-blue-gray" style="width:33%">La Matrix</a>
    </div>
</div>
<section class="w3-container">
    <div class="w3-col w3-container" style="width:30%"></div>
    <div class="w3-col w3-container" style="width:40%">
        <?php
        funcionCargarImagenes();
        ?>
    </div>
    <div class="w3-col w3-container " style="width:30%"></div>

</section>
<h3 class="w3-center">Soluci&oacute;n Ejercicio 1: Insta-gramo</h3>
<section class="w3-container">
    <div class="w3-container w3-flat-wet-asphalt">
        <div class="w3-col w3-margin" style="width:50px"><i class="w3-xlarge fa fa-image"></i></div>
        <h5>Subir imagen</h5>
    </div>

    <form class="w3-container" method="POST" ENCTYPE="multipart/form-data" action="ejercicio1ScriptPhp.php">
        <label class="w3-margin-top w3-margin-left"><b>Nombre que desea ponerle al archivo</b></label>
        <input class="w3-input w3-border w3-margin" type="text" name="nombreDeImagen">
        <input class="w3-margin" type="file" name="imagenSubida"></br>
        <button class="w3-btn w3-flat-wet-asphalt w3-margin w3-right" type="submit" name = "submitBtn">Enviar</button>
    </form>
</section>

<?php
include("../Ejercicio0/footer.php");
?>
