<?php

declare(strict_types=1);

require_once __DIR__ . '/header.php';

$message = '';

if (isset($_POST['email'])) {
  $email = trim($_POST['email']);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = 'Tack! Du är nu anmäld.';
  } else {
    $message = 'Ogiltig e-postadress, försök igen.';
  }
}


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
        <h2>KARBINLADDARE</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>SKOR</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>VATTENFLASKA</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>HOODIE</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>JACKA</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>SOLGLASÖGON</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>DIGITAL KLOCKA</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>HANDSKAR</h2>
      </article>

      <article class="productCard">
        <div class="productImage"></div>
        <h2>MÖSSA</h2>
    </div>
  </div>

  <div class="cardUtvecklatFörDig">
    <h3>UTVECKLAT FÖR DIG</h3>
    <h2 class="heading-1">
      Ett funktionellt tillbehör som förenar en välbekant form med ett nytt
      syfte. Med integrerade solceller för portabel laddning.
    </h2>
    <a href="">LÄS MER OM AVANCERAD TEKNIK</a>
  </div>

  <div class="grid">
    <div class="box a"></div>
    <div class="box b"></div>
    <div class="box c"></div>
    <div class="box d"></div>
  </div>

  <div class="sustainabilities">
    <div class="sustainabilityHeading">
      <p>SPÅRS HÅLLBARHET</p>
      <h2>Hållbarhet i varje detalj</h2>
    </div>

    <div class="sustainabilityNumbers">
      <div class="number">
        <p>ÅTERVUNNET MATERIAL</p>
        <h3>80%</h3>
        <a href="">LÄS MER</a>
      </div>

      <div class="number">
        <p>MINDRE KOLDIOXIDUTSLÄPP JÄMFÖRT MED 2022</p>
        <h3>30%</h3>
        <a href="">LÄS MER</a>
      </div>

      <div class="number">
        <p>REPERATIONER VARJE ÅR</p>
        <h3>12 000</h3>
        <a href="">LÄS MER</a>
      </div>
    </div>
  </div>

  <div class="naturen">
    <p class="label">SPÅR OUTDOOR-KOLLEKTION</p>
    <h1 class="heading-2">För naturen.<br>Med unik design.</h1>
  </div>
  <div class="naturenGrid">
    <div class="naturenBox1"></div>
    <div class="naturenBox2"></div>
  </div>


  <div class="configurators">
    <div class="configuratorText">
      <div class="configuratorInfo">
        <div class="configuratorInfoEtiquette">
          <p>UPPTÄCK VARJE DETALJ</p>
        </div>

        <div class="configuratorInfoDescription">
          <h3>Utforska samspelet mellan form, material och funktion. Se produkten från alla vinklar och upptäck detaljerna som gör skillnaden.</h3>
        </div>
      </div>

      <div class="configuratorLink">
        <a href="">UPPLEV KOLLEKTIONEN</a>
      </div>
    </div>

    <div class="configuratorTools">
      <div class="configurator3D">

      </div>

      <div class="configuratorChoices">
        <div class="productChoiceName">
          <div class="productChoiceNameText">
            <p>SKOR</p>
          </div>
        </div>

        <div class="productChoiceColor">
          <div class="colorOne">

          </div>

          <div class="colorTwo">

          </div>

          <div class="colorThree">

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="inbjudan">
    <div class="inbjudanGrid">
      <div>
        <img src="assets/infinity.svg" alt="">
        <p class="label">LIVSTIDSGARANTI</p>
        <h2 class="heading-2">Täcker funktionsfel på produkten.</h2>
        <a href="" class="nav-link"> UPPTÄCK</a>
      </div>
      <div>
        <img src="assets/arrow.svg" alt="">
        <p class="label">KOSTNADSFRI RETUR</p>
        <h3 class="heading-2">30 dagars öppet köp.</h3>
        <a href="" class="nav-link">UPPTÄCK</a>
      </div>
      <div>
        <img src="assets/truck.svg" alt="">
        <p class="label">KOSTNADSFRI LEVERANS</p>
        <h3 class="heading-2">Levereras utan extra kostnad.</h3>
        <a href="" class="nav-link">UPPTÄCK</a>
      </div>
      <div class="inbjudanText">
        <p>En inbjudan</p>
        <h3>Oregelbundna notiser om nya kollektioner, utomhusberättelser och annat värt att veta.</h3>
        <form class="newsletter" action="#" method="post">
          <label for="email" class=""></label>
          <input type="email" id="email" name="email" placeholder="Din e-postadress" required>
          <button type="submit">Håll dig uppdaterad</button>
        </form>
        <?php if ($message !== ''): ?>
          <p><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
      </div>
    </div>


</main>
<footer>
  <div class="accordion footerNav">
    <details>
      <summary>Kontakt</summary>
      <div class="content">
        <p><a href="">Kundtjänst</a></p>
        <p><a href="">Chatta med oss</a></p>
        <p><a href="">Hitta butik</a></p>
        <p><a href="">Vanliga frågor</a></p>
        <p><a href="mailto:spar@fashion.com">spar@fashion.com</a></p>
      </div>
    </details>

    <details>
      <summary>Om oss</summary>
      <div class="content">
        <p><a href="">Vår historia</a></p>
        <p><a href="">Hållbarhet</a></p>
        <p><a href="">Material &amp; teknik</a></p>
      </div>
    </details>

    <details>
      <summary>Tjänster</summary>
      <div class="content">
        <p><a href="">Frakt &amp; leverans</a></p>
        <p><a href="">Returer &amp; byten</a></p>
        <p><a href="">Garanti &amp; reparation</a></p>
        <p><a href="">Storleksguide</a></p>
        <p><a href="">Presentkort</a></p>
      </div>
    </details>
  </div>

  <div class="footerLang">
    <a href="#">Svenska</a> | <a href="#">Engelska</a>
  </div>
</footer>
</body>

</html>