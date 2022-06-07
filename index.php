<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <?php
    $text = "Sir Winston Leonard Spencer Churchill (Woodstock, 30 novembre 1874 – Londra, 24 gennaio 1965) è stato un politico, storico, giornalista e militare britannico.
        È stato Primo ministro del Regno Unito dal 1940 al 1945 e nuovamente dal 1951 al 1955. È stato inoltre membro del Parlamento dal 1900 al 1922 e dal 1924 al 1964, rappresentando nel corso della sua carriera cinque diversi collegi. Come Primo ministro, è noto per aver guidato il Regno Unito alla vittoria nella seconda guerra mondiale; fu anche leader del Partito Conservatore per quindici anni, dal 1940 al 1955.";

    $text_lenght = strlen($text);
    ?>

    <h2>Visualizzazione del paragrafo</h2>
    <?php echo $text; ?>

    <h2>Lunghezza del paragrafo</h2>
    <?php echo $text_lenght; ?>

    <?php
    $forbidden = $_GET['forbidden'];
    $censored = str_replace($forbidden, "***", $text);
    ?>

    <h2>Paragrafo con parola censurata</h2>
    <?php
    echo $censored; ?>

    <h2> Nuova lunghezza del paragrafo</h2>
    <?php echo strlen($censored); ?>
</body>

</html>