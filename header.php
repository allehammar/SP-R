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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
    <script src="/JavaScript.js" defer></script>
</head>

<body>


    <header class="siteHeaders">
        <div class="siteHeader">
            <a href="/" class="logo" aria-label="startsida">
                <img src="/assets/Frame 57.svg" alt="SPÅR Logo">
            </a>
        </div>
        <div class="headerIcons">
            <nav class="navigation" aria-label="Huvudnavigation">
                <button class="menuButton" type="button" aria-label="öppnaMeny" aria-controls="mobileMenu" aria-expanded="false">
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
            <a href="#accessoarer">ACCESSOARER</a>
            <a href="#skor">SKOR</a>
            <a href="#kläder">KLÄDER</a>
            <a href="#teknik">TEKNIK</a>
            <a href="#gåvor">GÅVOR</a>
        </nav>

        <div class="megaMenu" id="newsMenu">
            <div class="megaMenuLinks">
                <a href="#senaste">Senaste</a>
                <a href="#friluft">Friluftskollektion</a>
                <a href="#favoriter">Säsongens favoriter</a>
                <a href="#hållbarhet">Hållbara initiativ</a>
                <a href="#material">Innovativa material</a>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>FRILUFTSKOLLEKTION</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>SÄSONGENS FAVORITER</p>
            </div>

        </div>

        <div class="megaMenu" id="accessoriesMenu">

            <div class="megaMenuLinkBoxes">

                <div class="megaMenuLinks">
                    <p>KATEGORIER</p>
                    <a href="#armband">Armband</a>
                    <a href="#vattenflaskor">Vattenflaskor</a>
                    <a href="#mossor">Mössor</a>
                    <a href="#glasogon">Glasögon</a>
                </div>

                <div class="megaMenuLinks">
                    <p>HÖJDPUNKTER</p>
                    <a href="#resor">Resor</a>
                    <a href="#vandring">Vandring</a>
                    <a href="#motion">Motion</a>
                </div>

            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>MÖSSOR</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>GLASÖGON</p>
            </div>

        </div>

        <div class="megaMenu" id="shoesMenu">

            <div class="megaMenuLinkBoxes">

                <div class="megaMenuLinks">
                    <p>KATEGORIER</p>
                    <a href="#livsstil">Livsstil</a>
                    <a href="#löpning">Löpning</a>
                    <a href="#vandring">Vandring</a>
                    <a href="#träning">Träning</a>
                </div>

                <div class="megaMenuLinks">
                    <p>UTFORSKA</p>
                    <a href="#vardagen">Vardagen</a>
                    <a href="#äventyr">För äventyr</a>
                    <a href="#årstiderna">För årstiderna</a>
                </div>

            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>SKOR</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>SKOR</p>
            </div>
        </div>

        <div class="megaMenu" id="clothesMenu">

            <div class="megaMenuLinkBoxes">

                <div class="megaMenuLinks">
                    <p>KATEGORIER</p>
                    <a href="#jackor">Jackor</a>
                    <a href="#byxor">Byxor</a>
                    <a href="#tröjor">Tröjor</a>
                    <a href="#underställ">Underställ</a>
                </div>

                <div class="megaMenuLinks">
                    <p>UTFORSKA</p>
                    <a href="#regnkläder">Regnkläder</a>
                    <a href="#lager">Lager på lager</a>
                    <a href="#dam-herr">Dam & herr</a>
                </div>

            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>JACKOR</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>BYXOR</p>
            </div>

        </div>

        <div class="megaMenu" id="techMenu">

            <div class="megaMenuLinkBoxes">

                <div class="megaMenuLinks">
                    <p>KATEGORIER</p>
                    <a href="#goretex">GORE-TEX</a>
                    <a href="#vattentätt">Vattentätt</a>
                    <a href="#vindtätt">Vindtätt</a>
                    <a href="#andas">Andas</a>
                </div>

                <div class="megaMenuLinks">
                    <p>UTFORSKA</p>
                    <a href="#material">Material</a>
                    <a href="#slitstyrka">Slitstyrka</a>
                    <a href="#hållbarhet">Hållbarhet</a>
                </div>

            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>GORE-TEX</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>SKÖTSELRÅD</p>
            </div>

        </div>

        <div class="megaMenu" id="giftsMenu">

            <div class="megaMenuLinkBoxes">

                <div class="megaMenuLinks">
                    <p>KATEGORIER</p>
                    <a href="#till-henne">Till henne</a>
                    <a href="#till-honom">Till honom</a>
                    <a href="#under-500">Under 500 kr</a>
                    <a href="#presentkort">Presentkort</a>
                </div>

                <div class="megaMenuLinks">
                    <p>UTFORSKA</p>
                    <a href="#julklappar">Julklappar</a>
                    <a href="#bästsäljare">Bästsäljare</a>
                </div>

            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>JULKLAPPAR</p>
            </div>

            <div class="megaMenuCard">
                <div class="megaMenuImage"></div>
                <p>PRESENTKORT</p>
            </div>

        </div>


        <div class="mobileMenu" id="mobileMenu">
            <div class="mobileMenuTop">
                <button class="closeMenuButton" type="button" aria-label="Close menu">x</button>

                <div class="mobileMenuLogo">
                    SPÅR
                </div>

                <div class="mobileMenuActions">
                    <button type="button" aria-label="shopping">
                        <img src="/assets/shopping.svg" alt="Varukorg">
                    </button>

                    <button type="button" aria-label="Account">
                        <img src="/assets/user.svg" alt="Användare">
                    </button>
                </div>
            </div>

            <div class="mobileMenuSearch">
                <button type="button" aria-label="search">
                    <img src="/assets/search.svg" alt="Sök">
                </button>
            </div>

            <nav class="mobileMenuLinks" aria-label="MobileNavigation">
                <a href="#nyheter">NYHETER<div aria-hidden="true">></div></a>
                <a href="#accessoarer">ACCESSOARER<div aria-hidden="true">></div></a>
                <a href="#skor">SKOR<div aria-hidden="true">></div></a>
                <a href="#kläder">KLÄDER<div aria-hidden="true">></div></a>
                <a href="#teknik">TEKNIK<div aria-hidden="true">></div></a>
                <a href="#gåvor">GÅVOR<div aria-hidden="true">></div></a>
            </nav>

            <div class="mobileMenuBottom">
                <a href="#kundservice">KUNDSERVICE</a>
                <a href="#kontakt">KONTAKT</a>
            </div>
        </div>
        <!--<a href="about.php">About</a>-->
    </header>