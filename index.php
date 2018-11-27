<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Afficher dans url!</a>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
    <p>
      <?= 'Les paramètres sont bien présent.'; ?>
    </p>
    <?php
    }
    else {
    ?>
    <p>
      <?= 'Les paramètres ne sont pas présent'; }?>
    </p>
  </body>
</html>
