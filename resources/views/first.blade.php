<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Senza Cookie</title>

</head>
<body>
    <div id="app">

    </div>

    <main id="main">
        <div id="jumbotron">
            <div class="container">
                <h1>Passa a Premium gratis per 1 mese</h1>
                <p id="end_promo">Al termine dell'offerta, solo € 9,99 al mese. Annulla in qualsiasi momento.</p>
                <a id="plans_button" href="#">VEDI I PIANI</a>
                <p id="terms_conditions">Si applicano Termini e condizioni. L'offerta di 1 mese gratis non è disponibile per gli utenti che hanno già provato Spotify Premium.</p>
            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="container-fluid">
            <small id="powered_footer">powered by alexsircu</small>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
