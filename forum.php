<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <?php
    require 'header.php';
    ?>

    <h1>Fórum modrých trpiteľov</h1>

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