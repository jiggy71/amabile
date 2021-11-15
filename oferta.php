<!DOCTYPE html>
<html lang="pl">
<head>
  <?php
    require_once ('php/common-functions.php');
    getTemplate('head.html');
    getTemplate('oferta-title-description.html');
    ?>
</head>
<body>
<?php
getNavigation('navigation.html', 'oferta-koncertowa-trigger');
?>
<main class="container">
  Oferta koncertowa
</main>
<?php
getTemplate('footer.html');
?>
</body>
</html>
