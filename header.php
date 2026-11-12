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

    <!--Three divs, parent and childs. A tag with link to about page-->
    <header class="siteHeaders">
        <div class="siteHeader">
            <a href="/" class="logo" aria-label="startsida">
                <span aria-hidden="true">S</span>
                <span aria-hidden="true">P</span>
                <span aria-hidden="true">Å</span>
                <span aria-hidden="true">R</span>
            </a>
        </div>
        <div class="headerIcons">
            <nav class="navigation" aria-label="Huvudnavigation">
                <button class="menuButton" type="button" aria-label="öppnaMeny">
                    <img src="/assets/hamburger.svg" alt="hamburgermenu">
                </button>

                <button type="button" aria-label="sök">
                    <img src="/assets/search.svg" alt="search">
                </button>
            </nav>
            <div class="headerAction">
                <button type="button" aria-label="Varukorg">
                    <img src="/assets/shopping.svg" alt="shoppingCart">
                </button>

                <button type="button" aria-label="Konto">
                    <img src="/assets/user.svg" alt="user">
                </button>
            </div>

        </div>
        <nav class="desktopNavigation" aria-label="Produktkategorier">
            <a href="#nyheter">NYHETER</a>
            <a href="accessoarer">ACCESSOARER</a>
            <a href="skor">SKOR</a>
            <a href="kläder">KLÄDER</a>
            <a href="teknik">TEKNIK</a>
            <a href="gåvor">GÅVOR</a>
        </nav>

        <!--<a href="about.php">About</a>-->
    </header>