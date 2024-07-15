<html class="site-html">
<body class="site-body"></body>
<footer class="bg-dark text-light text-center py-4 d-flex justify-content-between align-items-center">
  <div class="footer-social me-auto">
    <a href="https://www.instagram.com/" target="_blank" class="text-light me-3"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/" target="_blank" class="text-light me-3"><i class="fab fa-facebook"></i></a>
    <a href="https://x.com/juraj_felix" target="_blank" class="text-light me-3"><i class="fab fa-twitter"></i></a>
  </div>
  <p>&copy; <?php echo date("Y"); ?> Juraj Pálenkáš</p>
  <div class="contact-info ms-auto">
    <p>Kontaktujte ma na :</p>
    <p>Email: <a href="mailto:juraj.palenkas@student.ukf.sk">juraj.palenkas@student.ukf.sk</a></p>
    <p>Telefón: <a href="tel:+421902342637">+421902342637</a></p>
  </div>
  <!-- Scroll to Top Button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none; position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; background-color: rgba(0, 0, 0, 0.5); color: white; cursor: pointer; padding: 15px; border-radius: 4px;">↑</button>
</footer>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>