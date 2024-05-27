<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IDK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
</head>



<!-------------------------------NAV BAR-------------------------------->
<body>
<?php
    require 'header.php';
    ?>
  <!-------------------------------NAV BAR-------------------------------->

<!-------------------------------Carousel-------------------------------->

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/chelsea1.png" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="img/reece2.jpg" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="img/stare.jpg" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<!-------------------------------TABULKA-------------------------------->

<section class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 mt-4">
      <h2>Aktuálna tabuľka Premier League</h2>
      <div class="table-container special-table">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Poradie</th>
              <th scope="col">Tím</th>
              <th scope="col">Zápasy</th>
              <th scope="col">Bodov</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $tabulka = array(
            array("Manchester City", 38, 91),
            array("Arsenal", 38, 89),
            array("Liverpool", 38, 82),
            array("Aston Villa", 38, 68),
            array("Tottenham Hotspur", 38, 66),
            array("Chelsea FC ", 38, 63),
            array("Newcastle United", 38, 60),
            array("Manchester United", 38, 60),
            array("West Ham United", 38, 52),
            array("Crystal Palace", 38, 49),
            array("Brighton & Hove Albion", 38, 48),
            array("AFC Bournemouth", 38, 48),
            array("Fulham", 38, 47),
            array("Wolverhampton Wanderers", 38, 46),
            array("Everton*", 38, 40),
            array("Brentford", 38, 39),
            array("Nottingham Forrest*", 38, 32),
            array("Luton Town", 38, 26),
            array("Burnley", 38, 24),
            array("Sheffield United", 38, 16)
          );
          ;

          foreach ($tabulka as $index => $tím) {
            echo "<tr>";
            echo "<th scope='row'>" . ($index + 1) . "</th>";
            echo "<td>" . $tím[0] . "</td>";
            echo "<td>" . $tím[1] . "</td>";
            echo "<td>" . $tím[2] . "</td>";
            echo "</tr>";
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

      <!-------------------------------ZOZNAM-------------------------------->

      <h3>Označenie:</h3>
      <ul>
        <li>Postup do Uefa Champions League: 1., 2., 3., 4.</li>
        <li>Postup do Europa League: 5.</li>
        <li>Postup do UEFA Conference league: 6.</li>
        <li>Zostup do EFL Championship: 18., 19., 20.</li>
      </ul>
  
      <h2>*</h2>
      <ul>
        <li>Everton má odobratých 8 bodov kvôli FA a závadzaniu v rámci strát počas covidu (8pts).</li>
        <li>Nottingham má odobraté 4 body (Rozhodnutie federácie)(4pts).</li>
      </ul>
    </section>
    <!-------------------------------cookies-------------------------------->

    <div id="cookieConsent" class="cookie-consent">
      Táto webová stránka používa cookies na zlepšenie používateľského zážitku.
      <button onclick="agreeCookie()">Súhlasím</button>
  </div>  
  </main>







<!-------------------------------------------FOOTER------------------------------------------->
<?php include_once "footer.php";
    ?>
<!-------------------------------------------FOOTER------------------------------------------->

<script src="app/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
