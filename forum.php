<!DOCTYPE html>
<html>
<head>
    <title>Chelsea London Projekt Juraj Palenkas - Fórum</title>
</head>
<body>
    <h1>Vitajte na fóre Chelsea London Projekt Juraj Palenkas</h1>

    <section id="forum">
        <?php
        require 'db.php';
        require 'classes.php';
        $articles = new Articles($conn);
        $articles->getArticles();
    
        ?>

        <!-- Ďalšie témy... -->
    </section>
</body>
</html>