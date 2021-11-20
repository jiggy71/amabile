<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    require_once ('php/common-functions.php');
    getTemplate('head.html');
    ?>
    <script src="js/error.js"></script>
    <title>Duet Amabile - 404 error</title>
    <meta name="description" content="Przyjazna użytkownikowi strona informująca o błędzie">
</head>
<body>
<?php
getTemplate('navigation.html');
?>
<main class="container">
    <p class="pageText">
        Przepraszamy, coś poszło nie tak... A może strony, której szukasz, po prostu nie ma na naszym serwerze? Zaczekaj
        chwilę, albo
        <a class="inlineLink" href="duet-amabile">
            kliknij tutaj
        </a>
        aby przejść na naszą stronę główną.
    </p>
</main>
<?php
getTemplate('footer.html');
?>
</body>
</html>
