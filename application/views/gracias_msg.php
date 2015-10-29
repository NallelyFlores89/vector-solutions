<!doctype html>
<html>
    <?php include("layaouts/header.php");  ?>
    <body>
        <title>Gracias por tu mensaje</title>
        <div id="gracias_msg" class="container">
          <?php include("layaouts/navbar.php");  ?>

          <h2><?= ucwords($name) ?>, ¡Gracias por tu mensaje!</h2>
          <h3>Dentro de poco nos pondremos en contacto contigo</h3>
          <?php include("layaouts/footer.php");  ?>

        </div> <!--container-->

    </body>
</html>
