<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <script type="text/javascript" src="//www.vivocha.com/a/nallelyflores89/api/vivocha.js"></script>    
        <title>Inicio</title>
        <div class="container noPadding">
          <?php include("layaouts/navbar.php");  ?>
          
          <div id="principal">
            <div class="itemleft" id="proyectos">
                <a href="<?= base_url()?>proyectos">
                  <span >Proyectos</span>
                  <img src="<?= base_url()?>public/images/proyectos.png">
                </a>
            </div>
            <div class="itemleft" id="servicios">
                <a href="<?= base_url()?>servicios_especiales">
                  <span>Servicios Especiales</span>
                  <img src="<?= base_url()?>public/images/servicios.png">
                </a>
            </div>            
            <div class="itemleft" id="valor">
                <a href="<?= base_url()?>valor_agregado">
                  <span>Valor Agregado</span>
                  <img src="<?= base_url()?>public/images/valor.png">
                </a>
            </div>
            <div class="itemright" id="lego">
                <a href="<?= base_url()?>lego">
                  <span>Lego Serious Play</span>
                  <img src="<?= base_url()?>public/images/lego.png">
                </a>
            </div>   
           <div class="itemright" id="entregas">
                <a href="<?= base_url()?>entregas">
                  <span>Entregas</span>
                  <img src="<?= base_url()?>public/images/entregas.png">
                </a>
            </div>   
           <div class="itemright" id="infra">
                <a href="<?= base_url()?>infraestructura">
                  <span>Infraestructura</span>
                  <img src="<?= base_url()?>public/images/infra.png">
                </a>
            </div>   
           <div class="itemright" id="almacenaje">
                <a href="<?= base_url()?>almacenaje">
                  <span>Almacenaje</span>
                  <img src="<?= base_url()?>public/images/almacenaje.png">
                </a>
            </div> 
           <div class="itemright" id="distribucion">
                <a href="<?= base_url()?>distribucion">
                  <span>Distribución</span>
                  <img src="<?= base_url()?>public/images/distribucion.png">
                </a>
            </div>                                                                       
          </div>
        <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
