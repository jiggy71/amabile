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
            <h1 class="paddedHeader">Oferta koncertowa <i>Duetu Amabile</i></h1>
            <p class="pageText">obejmuje zarówno koncerty tematyczne zawierające muzykę
            kościelną i przeznaczone do wykonywania w kościołach i innych miejscach kultu, jak i koncerty muzyki
            świeckiej. Dla koncertów muzyki religijnej nie mamy szczególnych wymagań co do wyposażenia kościoła - w
            zasadzie jedynym warunkiem jest obecność we wnętrzu sprawnych i nastrojonych organów piszczałkowych, bądź w
            ostateczności ich elektronicznej imitacji. Dla koncertów świeckich pożądana jest obecność profesjonalnego
            nagłośnienia, ale w przypadku braku takowego jesteśmy w stanie zapewnić sobie nagłośnienie sami.
            </p>
        </div>
        <div class="col-xl-4 displayOnDesktopOnly">
            <img class="img-fluid rounded shadow" src="images/amabile-foto19cut.jpg" alt="Zdjęcie zespołu w Katedrze" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2>Poniżej podajemy przykładowe propozycje naszych koncertów:</h2>
        </div>
    </div>
</main>
<?php
getTemplate('footer.html');
?>
</body>
<script src="js/oferta.js"></script>
</html>
