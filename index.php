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
            array("Manchester City", 30, 75),
            array("Liverpool", 30, 67),
            array("Chelsea", 30, 63),
            array("Manchester United", 30, 59),
            array("Arsenal", 30, 54),
            array("Tottenham", 30, 52),
            array("West Ham", 30, 48),
            array("Wolverhampton", 30, 47),
            array("Leicester City", 30, 46),
            array("Aston Villa", 30, 45),
            array("Southampton", 30, 42),
            array("Everton", 30, 41),
            array("Crystal Palace", 30, 39),
            array("Brighton", 30, 38),
            array("Brentford", 30, 36),
            array("Leeds United", 30, 35),
            array("Newcastle", 30, 33),
            array("Watford", 30, 28),
            array("Burnley", 30, 27),
            array("Norwich City", 30, 20)
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
        <li>Zostup do EFL Championship: 18., 19., 20.</li>
      </ul>
  
      <h2>*</h2>
      <ul>
        <li>Everton má odobratých 10 bodov kvôli FA a závadzaniu v rámci strát počas covidu (10pts).</li>
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
