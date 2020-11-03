    <?php
    $seccion="formulario";
    ?>
<main>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-4 mt-5">
          <?php
              if(!empty($_GET["estado"])):
                    $estado = $_GET["estado"];

                  if($estado == "error"):

                        if(!empty($_GET["campo"]) && ($_GET["campo"] == "email" || $_GET["campo"] == "comentario" || $_GET["campo"] == "apellido" || $_GET["campo"] == "nombre" || $_GET["campo"] == "villano")):
                            $campo = $_GET["campo"];
            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>Error!</strong><br> Completar el campo <b><?= $campo ?></b>.
                                </div>
                <?php
                        endif; 
                  elseif($estado == "ok"): 
                      $usuario = $_GET["usuario"] ?? "";
                ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <strong>Felicidades <?= $usuario ?>!</strong><br> Tus datos han sido enviados. <br>
                                    <hr>
                                    Tu asesino favorito es: <br> <strong><?php echo $_GET['villano'];?></strong>
                                </div>
                <?php
                        
                  endif;
                endif;  
                ?>  
          
          <form action="procesar-form.php" method="post" class="p-4">
                <div class="form-group">
                  <label class="blanco" for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingrese su nombre">
                </div>

                <div class="form-group">
                    <label class="blanco" for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Ingrese su apellido">
                  </div>

                <div class="form-group">
                  <label class="blanco" for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="usuario@mail.com">
                </div>

                <label class="blanco">¿Qué pelicula de Terror te gusta?</label>
                <?php
                foreach($checkbox as $nomb => $nombre):   
                ?> 
                <div class="form-check">
                    <label class="form-check-label blanco">
                        <input type="checkbox" class="form-check-input" name="check[]" id="<?=$nomb?>" value="<?=$nomb?>">
                        <?=$nombre?>
                  </label>
                </div>
                <?php
                endforeach;
                ?>
                
                
                <label class="blanco">¿Qué villano de terror te gusta más?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="villano" id="" value="Fantasmas">
                    <label class="form-check-label blanco" for="villano">
                      Fantasmas
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="villano" id="" value="Asesino Seriales">
                    <label class="form-check-label blanco" for="villano">
                      Asesinos Seriales
                    </label>
                  </div>
                  <br>
                  
                  <?php
                  foreach($text as $valor):   
                  ?> 
                  <div class="form-group">
                      <label class="blanco" for="<?= $valor["datos"]; ?>"><?= $valor["titulo"]; ?></label>
                      <textarea class="form-control" name="<?= $valor["datos"]; ?>" id="<?= $valor["datos"]; ?>" rows="3" placeholder="<?= $valor["placehold"]; ?>"></textarea>
                    </div>
                  <?php
                  endforeach;
                  ?>
                
                <button type="submit" class="btn btn-block btn-dark">Enviar!</button>
            </form>
          </div>
      </div>
    </div>
</main>