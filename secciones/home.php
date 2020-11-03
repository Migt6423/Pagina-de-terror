<?php
    $seccion="home";
?>
      
<main>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bg">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-5 font-weight-normal">Iconos del Terror</h1>
        </div>
      </div>

      
<div class="container-fluid">
      <div class="row blanco">
        <h2 class="center">Terror</h2>
      </div>
     <p class="blanco justificado">Un cuento de terror o relato de terror es una narración por lo general breve, perteneciente al ámbito literario o al popular, que busca ocasionar al lector sensaciones de miedo y de angustia, a través de la recreación por lo general de situaciones imaginarias, fantásticas o sobrenaturales.

 </p>
</div>
    

<div class="container">
    <div class="row">
    <?php
            foreach($home as $valor):
                
    ?>    
    <div class="col-lg-5 col-md-5 col-sm-12">
            <img class="separador img-fluid normalizar-img" src="<?= $valor["imagen"]; ?>" alt="<?= $valor["titulo"];?>">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 blanco separador">
            <h3><?= $valor["titulo"]; ?></h3>
            <p><?=$valor["descripcion"]; ?></p>
        </div>
        <?php
            endforeach;
        ?>
    </div>
</div>

</main>