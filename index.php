<!--on insère le PHP-->
<?php
//Déclaration de la variable Answer
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 5</title>
  </head>
  <body>
    <p>
    <!--on insère le PHP dans le Html-->
      <?php
      if ($answer == 'yes'){
      echo 'Vous avez répondu'.' '.'oui';
      }else{
        echo 'Vous avez répondu'.' '.'non';
      }
      ?>
    </p>
  </body>
</html>
