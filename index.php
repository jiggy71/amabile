<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="pl">
<head>
    <?php
    require_once ('php/common-functions.php');
    getTemplate('head.html');
    getTemplate('index-title-description.html');
    ?>
</head>
<body>
<?php
getNavigation('navigation.html', 'duet-amabile-trigger');
?>
<main class="container">
    <div class="row mt-3">
        <div class="col-xl-6">
            <img class="img-fluid rounded shadow" id="mainImage" src="images/amabile-slide-1.jpg"
                 alt="Duet Amabile">
        </div>
        <div class="col-xl-6 borderRight d-flex flex-column justify-content-around rounded">
            <div id="mainMotto" class="rounded">
                Piękna muzyka<br/>na każdą okazję
            </div>
            <div class="advertText rounded shadow">
                <p>
                    Proponujemy Państwu uświetnienie ważnych momentów w życiu piękną, starannie dobraną i profesjonalnie
                    wykonaną muzyką. W naszej ofercie znajdują się:
                <ul>
                    <li>
                        <h1>oprawa muzyczna ślubu</h1> i innych uroczystości kościelnych
                    </li>
                    <li>
                        oprawa muzyczna uroczystości świeckich, imprez firmowych, eventów, spotkań
                    </li>
                    <li>
                        koncerty okolicznościowe we wnętrzach kościelnych i świeckich
                    </li>
                </ul>
                </p>
                <p>
                    Zachęcamy do zapoznania się z naszą
                    <a class="inlineLink" href="oferta-koncertowa">
                        ofertą koncertową
                    </a>
                    oraz naszymi propozycjami dotyczącymi muzyki podczas
                    <a class="inlineLink" href="oprawa-muzyczna-slubu">
                        Mszy Św. ślubnej
                    </a>
                    .
                </p>
            </div>
            <div id="buttonsLayer" class="rounded">
                <a href="oprawa-muzyczna-slubu">
                    <button class="btn btn-dark float-end button-link">Poznaj naszą ofertę</button>
                </a>
            </div>
        </div>
    </div>
</main>
<?php
getTemplate('footer.html');
?>
</body>
</html>


