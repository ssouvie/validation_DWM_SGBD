<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un festival</title>
</head>
<body>
    <?php require_once './templates/header.html' ?>
    <main>
    <form action="./controllers/addOneFest.php" method='POST'>
            <div>
                <label for="festival">Festival</label>
                <input type="text" name="festival">
            </div>
            <div>
                <label for="style">Style</label>
                <input type="text" name="style">
            </div>
            <div>
                <label for="month1">Mois</label>
                <input type="text" name="month1">
            </div>
            <div>
                <label for="country">Pays</label>
                <input type="number" name="country">
            </div>
            <div>
                <label for="city">Ville</label>
                <input type="number" name="city">
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>