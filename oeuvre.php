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

    <?php require_once(__DIR__ . '/header.php'); ?>

    <main>
        <article id="detail-oeuvre">
            <?php require_once(__DIR__ . '/oeuvres.php'); // Tableau des oeuvres

            $work = $_GET[0]; // Récupération de l'id de l'URL , ou $_GET['id']

                function getWorks(array $work): array {
                $valid_work = [];

                // Objectif :
                    // Rechercher dans le tableau l'oeuvre qui correspond à cet id :
                    // pour cela, il faut parcourir le tableau et pour chacune des oeuvres dedans,
                    // regarder si l'id de l'oeuvre = id de l'URL
            
                foreach ($works as $work) 
                {
                    if (isValidWork($work)) 
                    {
                        $valid_works[] = $work;
                    }
                }
            
                return $valid_works; }
            ?>

            <div id="img-oeuvre">
                <?php
                    echo '<a href="oeuvre.php?id=' .$work[0] . '">';
                    echo '<img src="' . $work[4] . '">';
                ?>
            </div>

            <div id="contenu-oeuvre">
                <h1><?php echo $work[2]; ?></h1>
                <p class="description"><?php echo  $work['author']; ?></p>
                <p class="description-complete"><?php echo $work['description']; ?></p>
            </div>
        </article>
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>
    
</body>
</html>