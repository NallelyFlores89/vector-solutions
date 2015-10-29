<!doctype html>
<html>
    <?php include("header.php");  ?>
    <body>
        <title><?= $title ?></title>
        <div class="container">
        <?php include("navbar.php");  ?>

		<div class="col-sm-2 col-xs-2 noPadding">
      		<?php include("sidebar.php");  ?>				
		</div>
		<div class="col-sm-10 col-xs-10 noPadding" style="background:<?=$color?>">
			<?= $page ?>
		</div>		          
	    <?php include("footer.php");  ?>
        </div> <!--container-->
    </body>
</html>
