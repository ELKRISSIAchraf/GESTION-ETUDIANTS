<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" /> 
<title><?=$title?></title>
    </head>
    <body>
        <div class="container">
            <header>

<a href="index.php"><h1 >ETUDIANTS LSI</h1></a>
 </header>
             <div >
                <?= $content ?>
</div> <!-- #contenu --> <footer >
  <div class="container">

  </div>
<a  href="index.php?action=ajouter" class="btn btn-primary">AJOUTER ETUDIANT</a>
<a  href="index.php?action=afficher"  class="btn btn-primary">AFFICHER LISTE</a>
</footer>
</div> 
    </body>
</html>