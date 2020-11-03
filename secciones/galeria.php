    <?php
    $seccion="galeria";
    ?>
    
    <main>
        
    <div class="container separador2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 normalizar-img" src="<?= imagen ("Freddy1")?>" alt="iconos">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Freddy Krueger</h5>
                            
                          </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 normalizar-img" src="<?= imagen("jason1") ?>" alt="iconos">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Jason Voorhees</h5>
                            
                          </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 normalizar-img" src="<?= imagen("clow1") ?>" alt="iconos">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Pennywise, el payaso</h5>
                            
                          </div>
                </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>   
    </div>    
            
        
        <div class="container">
              <div class="row">
                  <h2 class="blanco center">---Freddy Krueger---</h2>
              </div>
              <div class="row">
              <?php
                foreach($galeria1 as $imagen):   
                ?>        
                <div class="col-lg-4 col-md-4 col-sm-12">
                            <img src="<?= $imagen; ?>" class="img-fluid rounded bottom normalizar-img" alt="imagen_freddy1">
                    </div>
              <?php
                endforeach;
              ?>
              </div>  
              
              <?php
                foreach($galeria2 as $nombre => $imagen):   
                ?> 
              <div class="row">
                    <h2 class="blanco center"><?=$nombre; ?></h2>
              </div>
              <div class="row">
                        <?php for($i=0;$i<4;$i++):   ?>
                        <div class="col-lg-6 col-md-6 col-sm-12">      
                            <img src="<?=$imagen[$i];?>" class="img-fluid rounded bottom normalizar-img" alt="imagen_jason">
                        </div>
                        <?php endfor; ?>
              </div>
              <?php
              endforeach;
              ?>


        </div>
        
      </main>