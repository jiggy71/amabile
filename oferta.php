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
                zasadzie jedynym warunkiem jest obecność we wnętrzu sprawnych i nastrojonych organów piszczałkowych,
                bądź w
                ostateczności ich elektronicznej imitacji. Dla koncertów świeckich pożądana jest obecność
                profesjonalnego
                nagłośnienia, ale w przypadku braku takowego jesteśmy w stanie zapewnić sobie nagłośnienie sami.
            </p>
        </div>
        <div class="col-xl-4 displayOnDesktopOnly">
            <img class="img-fluid rounded shadow" src="images/amabile-foto19cut.jpg" alt="Zdjęcie zespołu w Katedrze"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2>Poniżej podajemy przykładowe propozycje naszych koncertów:</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-6">
            <h3>Koncerty kościelne</h3>
            <p class="pageText">
                - <strong>„Z Maryją przez rok liturgiczny”</strong> – koncert prezentujący utwory o tematyce maryjnej.
                Obejmuje różne
                opracowania antyfony „Ave Maria” (autorstwa F. Schuberta, C. Saint-Saënsa, J. S. Bacha - Ch. Gounoda, G.
                Donizettiego i innych) oraz pieśni maryjne w artystycznym opracowaniu na głos, flet i organy (m. in.
                „Ciebie na wieki wychwalać będziemy”, „Idźmy, tulmy się jak dziatki”, „O Maryjo, w niebo uniesiona”).
            </p>
            <p class="pageText">
                - <strong>Koncert muzyki pasyjnej</strong> - obejmuje arie z wielkopostnych kantat J. S. Bacha i z jego
                „Pasji według św. Mateusza” w opracowaniu na głos, flet i organy, motety wielkopostne J. Rheinbergera,
                odpowiednio dobrane części sonat
                fletowych kompozytorów takich jak G. F. Haendel, J. Telemann i innych oraz kompozycje organowe
                przeznaczone na czas Wielkiego Postu.
            </p>
            <p class="pageText">
                - <strong>„I zmartwychwstał dnia trzeciego” - koncert wielkanocny</strong>. Wykonujemy fragmenty dzieł
                kompozytorów takich jak J. S. Bach, F. Mendelssohn, J. Brahms, wielkanocne motety J. Rheinbergera,
                fragmenty utworów C. Francka i G. Donizettiego.
            </p>
            <p class="pageText">
                - <strong>Koncert Bożonarodzeniowy</strong> - prezentujemy utwory bożonarodzeniowe (m. in. z oratorium
                „Mesjasz” J. F. Haendla) oraz kolędy polskie i zagraniczne opracowane na głos, flet i organy.
            </p>
        </div>
        <div class="col-xl-6">
            <h3>Koncerty świeckie</h3>
        </div>
    </div>
</main>
<?php
getTemplate('footer.html');
?>
</body>
<script src="js/oferta.js"></script>
</html>
