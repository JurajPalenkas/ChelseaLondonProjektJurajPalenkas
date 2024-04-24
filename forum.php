<!DOCTYPE html>
<html>
<head>
    <title>Chelsea London Projekt Juraj Palenkas - Fórum</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <?php
    require 'header.php';
    ?>

    <h1>Vitajte na fóre Chelsea London Projekt Juraj Palenkas</h1>

    <section id="forum">
        <?php
        require 'db.php';
        require 'classes.php';
        $articles = new Articles($conn);
        $articles->getArticles();
        ?>
    </section>

    <?php
    require 'footer.php';
    ?>

</body>
</html>