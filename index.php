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
             <table border="1">
                <thead>
                  <tr>
                    <th>Position</th>
                    <th>Club</th>
                    <th>Played</th>
                    <th>Won</th>
                    <th>Drawn</th>
                    <th>Lost</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>GD</th>
                    <th>Points</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Liverpool</td>
                    <td>16</td>
                    <td>11</td>
                    <td>4</td>
                    <td>1</td>
                    <td>36</td>
                    <td>15</td>
                    <td>21</td>
                    <td>37</td>
                  </tr>
                  <tr>
       <td>2</td>
       <td>Arsenal</td>
       <td>16</td>
       <td>11</td>
       <td>3</td>
       <td>2</td>
       <td>33</td>
      <td>15</td>
       <td>18</td>
      <td>36</td>
      </tr>
      <td>3</td>
      <td>Aston Villa</td>
      <td>16</td>
      <td>11</td>
      <td>2</td>
      <td>3</td>
      <td>35</td>
      <td>20</td>
      <td>15</td>
      <td>35</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Manchester City</td>
      <td>16</td>
      <td>10</td>
      <td>3</td>
      <td>3</td>
      <td>38</td>
      <td>18</td>
      <td>20</td>
      <td>33</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Tottenham Hotspur</td>
      <td>16</td>
      <td>9</td>
      <td>3</td>
      <td>4</td>
      <td>33</td>
      <td>23</td>
      <td>10</td>
      <td>30</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Manchester United</td>
      <td>16</td>
      <td>9</td>
      <td>0</td>
      <td>7</td>
      <td>18</td>
      <td>21</td>
      <td>-3</td>
      <td>27</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Newcastle United</td>
      <td>16</td>
      <td>8</td>
      <td>2</td>
      <td>6</td>
      <td>33</td>
      <td>21</td>
      <td>12</td>
      <td>26</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Brighton and Hove Albion</td>
      <td>16</td>
      <td>7</td>
      <td>5</td>
      <td>4</td>
      <td>33</td>
      <td>28</td>
      <td>5</td>
      <td>26</td>
    </tr>
    <tr>
      <td>9</td>
      <td>West Ham United</td>
      <td>16</td>
      <td>7</td>
      <td>3</td>
      <td>6</td>
      <td>26</td>
      <td>30</td>
      <td>-4</td>
      <td>24</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Fulham</td>
      <td>16</td>
      <td>6</td>
      <td>3</td>
      <td>7</td>
      <td>26</td>
      <td>26</td>
      <td>0</td>
      <td>21</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Brentford</td>
      <td>16</td>
      <td>5</td>
      <td>4</td>
      <td>7</td>
      <td>23</td>
      <td>22</td>
      <td>1</td>
      <td>19</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Chelsea</td>
      <td>16</td>
      <td>5</td>
      <td>4</td>
      <td>7</td>
      <td>26</td>
      <td>26</td>
      <td>0</td>
      <td>19</td>
    </tr>
    <tr>
      <td>13</td>
      <td>Wolverhampton Wanderers</td>
      <td>16</td>
      <td>5</td>
      <td>4</td>
      <td>7</td>
      <td>21</td>
      <td>26</td>
      <td>-5</td>
      <td>19</td>
    </tr>
    <tr>
      <td>14</td>
      <td>Bournemouth</td>
      <td>16</td>
      <td>5</td>
      <td>4</td>
      <td>7</td>
      <td>21</td>
      <td>30</td>
      <td>-9</td>
      <td>19</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Crystal Palace</td>
      <td>16</td>
      <td>4</td>
      <td>4</td>
      <td>8</td>
      <td>15</td>
      <td>23</td>
      <td>-8</td>
      <td>16</td>
    </tr>
    <tr>
      <td>16</td>
      <td>Nottingham Forest</td>
      <td>16</td>
      <td>3</td>
      <td>5</td>
      <td>8</td>
      <td>17</td>
      <td>28</td>
      <td>-11</td>
      <td>14</td>
    </tr>
    <tr>
      <td>17</td>
      <td>Everton *</td>
      <td>16</td>
      <td>7</td>
      <td>2</td>
      <td>7</td>
      <td>20</td>
      <td>20</td>
      <td>0</td>
      <td>13</td>
    </tr>
    <tr>
      <td>18</td>
      <td>Luton Town</td>
      <td>16</td>
      <td>2</td>
      <td>3</td>
      <td>11</td>
      <td>17</td>
      <td>32</td>
      <td>-15</td>
      <td>09</td>
    </tr>
    <tr>
      <td>19</td>
      <td>Burnley</td>
      <td>16</td>
      <td>2</td>
      <td>2</td>
      <td>12</td>
      <td>16</td>
      <td>34</td>
      <td>-18</td>
      <td>08</td>
    </tr>
    <tr>
      <td>20</td>
      <td>Sheffield United</td>
      <td>16</td>
      <td>2</td>
      <td>2</td>
      <td>12</td>
      <td>12</td>
      <td>41</td>
      <td>-29</td>
      <td>08</td>
    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
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
