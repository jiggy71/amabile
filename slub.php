<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
    require_once 'php/common-functions.php';
    getTemplate('head.html');
    ?>
    <title>Duet Amabile - oprawa muzyczna ślubu</title>
    <meta name="description"
          content="Oprawa muzyczna ślubu i innych uroczystości kościelnych i świeckich. Najwyższy poziom wykonania, przystępne ceny. Z nami Twój ślub jest piękniejszy! Zarezerwuj nas już dziś!">
</head>
<body>
<?php
getNavigation('navigation.html', 'oprawa-muzyczna-slubu-trigger');
?>
<main class="container">
    <div class="row mt-3">
        <div class="col text-center">
            <h1>Oprawa muzyczna ślubu</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-6 borderLeft rounded">
            <p class="boldText rounded shadow">
                Z nami Twój ślub jest piękniejszy.
            </p>
            <p class="pageText">
                Oferujemy muzykę wykonywaną na najwyższym poziomie,
                muzykę, która prawdziwie ubogaca Liturgię, stanowiąc o jej pięknie i niepowtarzalności. Utwory,
                które proponujemy, pozostają w całkowitej zgodzie z
                <a class="inlineLink" href="https://diecezja.siedlce.pl/153034-2/">
                    przepisami Kościoła
                </a> dotyczącymi muzyki podczas sprawowania Sakramentu Małżeństwa.
                <br/>
                Zapraszamy na
                <a class="inlineLink" href="https://www.youtube.com/playlist?list=PLqX_SDVgT1htmL1loPUciusVes5amKFZw">
                    nasz kanał YouTube
                </a>
                , gdzie prezentujemy całą naszą ofertę muzyki ślubnej.
            </p>
            <p>
                <a href="https://www.youtube.com/playlist?list=PLqX_SDVgT1htmL1loPUciusVes5amKFZw">
                    <button class="btn btn-dark float-end button-link">Przejdź na nasz kanał YouTube</button>
                </a>
            </p>
        </div>
        <div class="col-xl-6">
            <div class="rounded shadow embed-responsive ratio ratio-16x9 mt-3 mt-xl-0">
                <iframe class="embed-responsive-item"
                        width="100%"
                        src="https://www.youtube.com/embed/a-x8w-iplJY"
                        title="Duet Amabile - piękna muzyka na każdą okazję"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p class="advertText rounded shadow">
                Aby poznać naszą ofertę koncertową
                <a class="inlineLink" href="oferta-koncertowa">
                    kliknij tutaj
                </a>
                .
            </p>
        </div>
    </div>
</main>
<?php
getTemplate('footer.html');
?>
</body>
</html>