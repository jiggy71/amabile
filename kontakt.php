<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    require_once('php/common-functions.php');
    getTemplate('head.html');
    ?>
  <title>Duet Amabile - kontakt z nami</title>
  <meta name="description" content="Duet Amabile - dane kontaktowe. Zapraszamy do kontaktu w sprawie oprawy muzycznej ślubu
i innych uroczystości kościelnych i świeckich. Piękna muzyka na każdą okazję - to właśnie my!">
</head>
<body>
<?php
getNavigation('navigation.html', 'kontakt-trigger');
?>
<main class="container">
  <div class="row mt-3">
    <div class="col-xl-6 borderLeft rounded">
      <p class="boldText rounded shadow">
        Zapraszamy do kontaktu z nami.
      </p>
      <p class="pageText">
        Można do nas zadzwonić:
        <a class="inlineLink" href="tel:796012503"><strong>796 012 503</strong></a>
         albo napisać SMS-a.
      </p>
      <p class="pageText">
        Można wysłać nam message'a na Facebooku:<br />
        <a class="inlineLink" href="https://www.facebook.com/duetamabile/"><strong>facebook.com/duetamabile</strong></a>
      </p>
      <p class="pageText">
        Można do nas napisać maila:
        <a class="inlineLink" href="mailto:duet.amabile@gmail.com"><strong>duet.amabile@gmail.com</strong></a>
      </p>
    </div>
    <div class="col-xl-6 d-none d-xl-block">
      <img class="img-fluid rounded shadow" src="images/amabile-foto-6.jpg"
           alt="Zdjęcie zespołu">
    </div>
  </div>
</main>
<?php
getTemplate('footer.html');
?>

</body>
</html>