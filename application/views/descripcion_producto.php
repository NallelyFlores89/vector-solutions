<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Productos</title>
        <div class="container">
          <?php include("layaouts/navbar.php");  ?>

          <div class="col-sm-12 category-header" style="background-image:url(../../../public/images/products/barra-<?=$productos['idcategory']?>.png)">
            <div class="title-category-header col-sm-12 text-right">
              <h1><?= $productos['name']?></h1>
            </div>
          </div>

          <?php if(array_key_exists('prox', $productos)){ ?>
            <div class="col-sm-12 product_description_box text-center prox"><h1>¡Próximamente!</h1>
          <?php }else{ ?>
          
          <div class="col-sm-12 product_description_box">
            <div id="description" class="col-sm-8">
              <h1>Descripción</h1>
              <?php if(isset($productos['description'])){ ?>
              <p><?= $productos['description']?></p>
              <?php }else{ ?>
              <p>Descripción no disponible.</p>
              <?php } ?>
              <?php 
                if(isset($productos['presentation'])){?>
                <h1>Presentaciones</h1>
                <ul>
                <?php foreach ($productos['presentation'] as $key => $value) { ?>
                  <li><?= $value ?></li>
                <?php }} ?>
              </ul>
            </div>
            <div id="description-slider" class="col-sm-4 text-center">
              <?php 
                if(isset($productos['photos'])){
                  foreach ($productos['photos'] as $key => $value) { ?>
                    <img src="<?= base_url()?>public/images/<?= $value?>">
                <?php  }}else{ ?>
                    <img src="<?= base_url()?>public/images/nofoto.png">
            </div>
          <?php }
          } ?>
          </div>

          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
