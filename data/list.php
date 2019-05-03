<?php require './controllers/getFest.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <title>Festival</title>
</head>
<body>
    <?php require './templates/header.html' ?>    
    <main>
        <div>
            <table>
                <tr>
                    <th>Festival</th>
                    <th>Style</th>
                    <th>Mois</th>
                    <th>Pays</th>
                    <th>Ville</th>
                </tr>
                <?php foreach($festivals as $festival): ?>
                <tr> 
                    <td><?= $festival['festival']?></td>
                    <td><?= $festival['style']?></td>
                    <td><?= $festival['month1']?></td>
                    <td><?= $festival['country']?></td>
                    <td><?= $festival['city']?></td>
                    <td>
                        <form action="./controllers/deleteOneFest.php" method="POST">
                            <input type="hidden" name="id" value="<?= $festival['id'] ?>">
                            <input type="submit" value="Supprimer">       
                        </form>
                    </td>
                    <td>
                        <form action="./updateFest.php" method="POST">
                            <input type="hidden" name="id" value="<?= $festival['id'] ?>">
                            <input type="submit" value="Modifier">
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </main>
</body>
</html>