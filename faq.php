<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O nás</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/css.css">
</head>
<body>
<!-------------------------------------------NAV BAR----------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo1.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        Chelsea FC Fanpage
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="novinky.php">Novinky</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="o-nas.php">O nás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-------------------------------------------NAV BAR----------------------------------------->
 
  <!-------------------------------------------SEKCIA MAIN----------------------------------------->
  <main>
  <section class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">FAQ</h1>
       <p>Fanušík Chelsea ktorý si vie otvoriť ústa a skritizovať zlý výkon ale zároveň pochváliť excelentný výkon</p>
       <p>Táto stránka slúži len ako fanpage k jedinému týmu v Londýne ktorý vyhral Ligu Majstrov a to dokonca 2x</p>
        <h2>Kontaktujte ma</h2>
          
        <div class="container mt-5">
          <form>
            <div class="form-group">
              <label for="meno">Vaše meno</label>
              <input type="text" class="form-control" id="meno" placeholder="Vaše meno" required>
            </div>
            <div class="form-group">
              <label for="email">Váš email</label>
              <input type="email" class="form-control" id="email" placeholder="Váš email" required>
            </div>
            <div class="form-group">
              <label for="sprava">Vaša správa</label>
              <textarea class="form-control" id="sprava" rows="5" placeholder="Vaša správa" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Odoslať</button>
          </form>
        </div>
  </section>
</main>
  <!-------------------------------------------SEKCIA MAIN----------------------------------------->
<!-------------------------------------------FOOTER------------------------------------------->

<footer class="bg-dark text-light text-center py-4 d-flex justify-content-between align-items-center">
  <div class="footer-social me-auto">
    <a href="https://www.instagram.com/" target="_blank" class="text-light me-3"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/" target="_blank" class="text-light me-3"><i class="fab fa-facebook"></i></a>
    <a href="https://x.com/juraj_felix" target="_blank" class="text-light me-3"><i class="fab fa-twitter"></i></a>
  </div>
  <p>&copy; 2023 Juraj Pálenkáš</p>
  <div class="contact-info ms-auto">
    <p>Kontaktujte ma na :</p>
    <p>Email: <a href="mailto:juraj.palenkas@student.ukf.sk">juraj.palenkas@student.ukf.sk</a></p>
    <p>Telefón: <a href="tel:+421902342637">+421902342637</a></p>
  </div>
</footer>



<script src="app/app.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
