<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Productos</title>
        <div class="container">
          <?php include("layaouts/navbar.php");  ?>

          <div class="presentacion col-sm-12">
            <h1>Productos</h1>
            <p>En representaciones Valsan estamos comprometidos con la calidad de nuestros productos, por lo que ofrecemos la garantía total de satisfacción del consumidor final. Para tal efecto, la amplia gama de productos ofrecidos cuenta con un proceso de empaque que permite garantizar la frescura del mismo durante la vida en anaquel; indicada en su fecha de consumo preferente, que va desde 4 meses como mínimo, hasta mas de dos años para algunos productos envasados al alto vacío.</p>
            <hr>
          </div>
          
          <div id="delCid" class="col-sm-12 cajaProductos">
            <div class="col-sm-3 text-center">
              <img id="prod-img-1" src="<?= base_url()?>public/images/products/delCID.png">
            </div>
            <div class="col-sm-9">
              <div class="col-sm-4">
                <div id="" class="caja_producto_titulo_rojo col-sm-12">Lata servibar</div>
                <?php 
                  foreach ($productos[1]['products'] as $key => $value) {
                    if($value['sub_category'] == 'lata_servibar'){ ?>
                      <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/1">
                        <div class="caja_producto_rojo col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                      </a>
                <?php    }
                    
                  }
                ?>
              </div>
              <div class="col-sm-4">
                <div id="" class="caja_producto_titulo_rojo col-sm-12">Granel</div>
                <?php 
                  foreach ($productos[1]['products'] as $key => $value) {
                    if($value['sub_category'] == 'granel'){ ?>
                      <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/1">
                        <div class="caja_producto_rojo col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                      </a>
                <?php    }
                    
                  }
                ?>
              </div>
<!--               <div class="col-sm-4">
                <div class="row">
                  <div id="" class="caja_producto_titulo_rojo col-sm-12">Bolsa 70 gr.</div>
                  <?php 
                    foreach ($productos[1]['products'] as $key => $value) {
                      if($value['sub_category'] == 'bolsa_70_gr'){ ?>
                        <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/1">
                          <div class="caja_producto_rojo col-sm-12">
                            <span><?= $value['name']?></span>
                          </div>
                        </a>
                  <?php    }
                      
                    }
                  ?>
                </div>
                <div class="row">
                  <div id="" class="caja_producto_titulo_rojo col-sm-12">Bolsa 40 gr.</div>

                  <?php 
                    foreach ($productos[1]['products'] as $key => $value) {
                      if($value['sub_category'] == 'bolsa_40_gr'){ ?>
                        <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/1">
                          <div class="caja_producto_rojo col-sm-12">
                            <span><?= $value['name']?></span>
                          </div>
                        </a>
                  <?php    }
                      
                    }
                  ?>
                </div>
                <div class="row">
                  <div id="" class="caja_producto_titulo_rojo col-sm-12">Bolsa 1 kg.</div>

                  <?php 
                    foreach ($productos[1]['products'] as $key => $value) {
                      if($value['sub_category'] == 'bolsa_1_kg'){ ?>
                        <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/1">
                          <div class="caja_producto_rojo col-sm-12">
                            <span><?= $value['name']?></span>
                          </div>
                        </a>
                  <?php    }
                      
                    }
                  ?>
                </div>                
              </div> -->
            </div>
            <hr>
          </div>
          <div class="col-sm-12"><hr></div>
          <div id="higieneIndustrial" class="col-sm-12 cajaProductos">
            <div class="col-sm-3 text-center">
              <img id="prod-img-2" src="<?= base_url()?>public/images/products/HigieneIndustrial.png">
            </div>
            <div class="col-sm-9">
              <div class="col-sm-4">
                <div id="" class="col-sm-12 caja_producto_titulo_azul">Vijusa</div>
              <?php 
                  foreach ($productos[2]['products'] as $key => $value) {
                    if($value['sub_category'] == 'vijusa'){ ?>
                      <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/2">
                        <div class="caja_producto_azul col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                      </a>
                <?php    }
                    
                  }
                ?>
              </div>
              <div class="col-sm-4">
                <div id="" class="col-sm-12 caja_producto_titulo_azul">Papel</div>
                <?php 
                  foreach ($productos[2]['products'] as $key => $value) {
                    if($value['sub_category'] == 'papel'){ ?>
                      <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/2">
                        <div class="caja_producto_azul col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                      </a>
                <?php    }
                    
                  }
                ?>
              </div>
              <div class="col-sm-4">
                <div id="" class="col-sm-12 caja_producto_titulo_azul">Sanitizantes</div>
              <?php 
                  foreach ($productos[2]['products'] as $key => $value) {
                    if($value['sub_category'] == 'sanitizantes'){ ?>
                      <a href="<?= base_url()?>productos/descripcion/<?= $value['idproduct'] ?>/2">
                        <div class="caja_producto_azul col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                      </a>
                <?php    }
                    
                  }
              ?>
              </div>
            </div>
          </div>
          <div class="col-sm-12"><hr></div>
          <div id="amenities" class="col-sm-12 cajaProductos">
            <div class="col-sm-3 text-center">
              <img id="prod-img-3" src="<?= base_url()?>public/images/products/Amenities.png">
            </div>
            <div class="col-sm-9">
              <div class="col-sm-4">
                <div id="" class="col-sm-12 caja_producto_titulo_verde">Lata menta</div>
                <?php 
                    foreach ($productos[2]['products'] as $key => $value) {
                      if($value['sub_category'] == 'lata_menta'){ ?>
                        <div class="caja_producto_verde col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                  <?php    }
                      
                    }
                ?>
              </div>
              <div class="col-sm-4">
                <div id="" class="col-sm-12 caja_producto_titulo_verde">Promocionales</div>
                <?php 
                    foreach ($productos[2]['products'] as $key => $value) {
                      if($value['sub_category'] == 'promocionales'){ ?>
                        <div class="caja_producto_verde col-sm-12">
                          <span><?= $value['name']?></span>
                        </div>
                  <?php    }
                      
                    }
                ?>
              </div>
              <div class="col-sm-4">

              </div>
            </div>
          </div>
          
          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
