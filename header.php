<?php
//Define variable for title later used with echo
$title = 'SPÅR';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPÅR</title>
    <meta name="description" content="SPÅR website" />
    <meta property="og:title" content="This is my article page" />
    <meta property="og:description" content="Landing page design collection." />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="variables.css" />
</head>

<body>
    <!--accessability, when press tab, jump to main content-->
    <a class="skipLink" href="#main">Skip to content</a>
    <!--Three divs, parent and childs. A tag with link to about page-->
    <header class="siteHeaders">
        <div class="siteHeader">
            <a href="/" class="logo">SPÅR</a>
            <div class="headerAction">
                <button type="button" aria-label="Varukorg">
                    varukorg?
                </button>

                <button type="button" aria-label="Konto">
                    konto?
                </button>
            </div>
            <nav class="navigation" aria-label="Huvudnavigation">
                <button type="button" aria-label="öppnaMeny">
                    hamburgarmeny?
                </button>

                <button type="button" aria-label="sök">
                    sökikon?
                </button>
            </nav>
        </div>
        <a href="about.php">About</a>
    </header>
    <h1><?php echo $title ?></h1>