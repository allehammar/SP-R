<?php

declare(strict_types=1);

//Fetch data from the different arrays
require_once __DIR__ . '/header.php';

?>


<main>
  <div class="heros">
    <div class="hero">
      <h1>Upptäck nya möjligheter</h1>
      <a href="#collection">Se kollektion</a>
    </div>
  </div>

  <div class="products" id="collection">
    <div class="productList">
      <article class="productCard">
        <div class="productImage"></div>
        <h2>Karbinladdare</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>Skor</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>Vattenflaska</h2>
      </article>
    </div>
    <p>Karusell</p>
  </div>

  <div class="cardUtvecklatFörDig">
    <h3>UTVECKLAT FÖR DIG</h3>
    <h2>
      Ett funktionellt tillbehör som förenar en välbekant form med ett nytt
      syfte. Med integrerade solceller för portabel laddning.
    </h2>
    <h3><a href="">LÄS MER OM AVANCERAD TEKNIK</a></h3>
  </div>

  <div class="grid">
    <div class="box a"></div>
    <div class="box b"></div>
    <div class="box c"></div>
    <div class="box d"></div>
  </div>

  <div class="naturen">
    <p class="label">SPÅR OUTDOOR-KOLLEKTION</p>
    <h1 class="heading-2">För naturen.<br>Med unik design.</h1>
  </div>
  <div class="naturenGrid">
    <div class="box a"></div>
    <div class="box b"></div>
  </div>

  <div class="inbjudan">
    <div class="inbjudanGrid">
      <div class="box a"></div>
      <div class="box b"></div>
      <div class="box c"></div>
    </div>
  </div>

  <form action="">
    <label for="Email">
      Email:
      <input type="text" />
    </label>
    <button>Subscribe</button>
  </form>
</main>
<footer>
  <p>Testing footer.</p>
  <a href="https://www.facebook.com/">Facebook</a>
  <a href="https://www.instagram.com/">Instagram</a>
  <a href="https://www.tiktok.com/">Tiktok</a>
</footer>
</body>

</html>