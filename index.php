<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
<!-- Inclusion de l'en-tête du site -->
    <?php require_once(__DIR__ . '/header.php');  // ou include ?>

    <main>
        <!-- Tableau des oeuvres -->
        <?php require_once(__DIR__ . '/oeuvres.php'); ?>
        <div id="liste-oeuvres">
            <!-- Boucle sur la liste des oeuvres -->
            <?php foreach ($works as $work) : ?>
                <article class="oeuvre">
                    <?php echo '<a href="oeuvre.php?id=' .$work['id'] . '">';?>
                    <?php echo '<img src="' . $work['image'] . '">';?>
                    <h2><?php echo $work['title']; ?></h2>
                    <p class="description"><?php echo $work['author']; ?></p>   
                </article>
            <?php endforeach ?>
        </div>
    </main>

    <!-- Inclusion du pied de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>