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
<?php
    require 'header.php';
    ?>
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

<?php
    require 'footer.php';
    ?>




<script src="app/app.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
