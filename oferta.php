<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    require_once('php/common-functions.php');
    getTemplate('head.html');
    getTemplate('oferta-title-description.html');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
</head>
<body>
<?php
getNavigation('navigation.html', 'oferta-koncertowa-trigger');
?>
<main class="container">
    <a href="#" class="floatButton">
        <span class="fas fa-angle-up my-float"></span>
    </a>
    <div class="row mt-3">
        <div class="col-xl-8">
            <p class="pageText">
            <h1>Oferta koncertowa</h1> <i>Duetu Amabile</i> obejmuje zarówno koncerty tematyczne zawierające muzykę
            kościelną i przeznaczone do wykonywania w kościołach i innych miejscach kultu, jak i koncerty muzyki
            świeckiej. Dla koncertów muzyki religijnej nie mamy szczególnych wymagań co do wyposażenia kościoła - w
            zasadzie jedynym warunkiem jest obecność we wnętrzu sprawnych i nastrojonych organów piszczałkowych, bądź w
            ostateczności ich elektronicznej imitacji. Dla koncertów świeckich pożądana jest obecność profesjonalnego
            nagłośnienia, ale w przypadku braku takowej jesteśmy w stanie zapewnić sobie nagłośnienie sami.
            </p>
        </div>
    </div>
</main>
<?php
getTemplate('footer.html');
?>
</body>
<script src="js/oferta.js"></script>
</html>
