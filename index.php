<?php
include("head.php");
?>

<div style="display: inline-block; width:100%">
    <?php
    include("marco-left.php")
    ?>


    <?php
    include("marco-central.php");
    ?>

    <?php
    include("marco-right.php");
    ?>


</div>

<?php
include("foot.php")
?>


<script>
    document.title = "Dany Mitte";
    document.getElementById("foto").src = "./images/dany.jpg";
    document.getElementById("elnombre").innerHTML = "Dany Mitte";

    document.getElementById("blog-indice").innerHTML = "<p><b>Contenido</b></p><hr> <p><a href='#'>inicio</a></p><p><a href='#blog-seccion2'>Estudios</a></p><p><a href='#blog-seccion3'>Conocimiento informático</a></p><p><a href='#blog-seccion4'>Hooby</a></p>";

    document.getElementById("blog-relacionados").innerHTML = "<p><b>Temas relacionados:</b></p><hr> <p><a href='https://congresoutlvte.org/AlvaradoNicolas'>Alvarado Nicolas</a></p><p><a href='https://congresoutlvte.org/ZambranoMarcelo'>Zambrano Marcelo</a></p> <p><a href='https://congresoutlvte.org/PaezFranklin'>Paez Franklin</a></p> <p><a href='https://congresoutlvte.org/CevillanoJenny'>Cevillano Jenny</a></p> ";
</script>