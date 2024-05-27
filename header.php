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
            <a class="nav-link" href="forum.php">Fórum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="novinky.php">Novinky</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
          <?php session_start(); ?>
          <?php if (!isset($_SESSION["username"])): ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <?php endif; ?>
          <?php if (isset($_SESSION["username"])): ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>