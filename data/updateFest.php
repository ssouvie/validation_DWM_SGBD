<?php require_once './controllers/getFest.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un festival</title>
</head>
<body>
<?php require_once './templates/header.html' ?> 
    <main>
        <form action="./controllers/updateOneFest.php" method='POST'>
            <input type="hidden" name="id" value="<?= $festivals['id'] ?>">
            <div>
                <label for="festival">Festival</label>
                <input type="text" name="festival" value="<?= $festivals['festival'] ?>">
            </div>
            <div>
                <label for="style">Style</label>
                <input type="text" name="style" value="<?= $festivals['style'] ?>">
            </div>
            <div>
                <label for="month1">Mois</label>
                <input type="text" name="month1" value="<?= $festivals['month1'] ?>">
            </div>
            <div>
                <label for="country">Pays</label>
                <input type="text" name="country" value="<?= $festivals['country'] ?>">
            </div>
            <div>
                <label for="city">Ville</label>
                <input type="text" name="city" value="<?= $festivals['city'] ?>">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>