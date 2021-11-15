<!DOCTYPE html>
<!--suppress HtmlUnknownTarget -->
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f185ecb56b.js" crossorigin="anonymous"></script>
    <title>Duet Amabile - piękna muzyka na każdą okazję</title>
    <meta name="description" content="Oprawa muzyczna ślubu i innych uroczystości kościelnych i świeckich. Piękna muzyka
na każdą okazję. Najwyższy poziom wykonania, przystępne ceny. Zarezerwuj nas na swój ślub już dziś!">
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light customNav">
    <div class="container">
        <a class="navbar-brand" href="duet-amabile">
            <img src="images/logo_czarne.gif" alt="Duet Amabile Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item p-xl-4">
                    <a class="nav-link active" href="duet-amabile">Strona główna</a>
                </li>
                <li class="nav-item p-xl-4">
                    <a class="nav-link " href="oferta-koncertowa">Oferta koncertowa</a>
                </li>
                <li class="nav-item p-xl-4">
                    <a class="nav-link " href="oprawa-muzyczna-slubu">Muzyka na ślubie</a>
                </li>
                <li class="nav-item p-xl-4">
                    <a class="nav-link " href="o-zespole">O zespole</a>
                </li>
                <li class="nav-item p-xl-4">
                    <a class="nav-link " href="kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="container">
    <div class="row mt-3">
        <div class="col-xl-6">
            <img class="img-fluid rounded shadow" id="mainImage" src="images/amabile-foto-2-edit.jpg"
                 alt="Duet Amabile">
        </div>
        <div class="col-xl-6 borderRight d-flex flex-column justify-content-between rounded">
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

<?php
function getTemplate($templateName)
{
    $content = file_get_contents('templates/' . $templateName);
    if ($content) {
        echo($content);
    }
}

