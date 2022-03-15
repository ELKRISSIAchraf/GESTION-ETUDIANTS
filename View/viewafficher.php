<?php $this->title = "AFFICHAGE"; ?>
<?php  ?>
  <table  class="table table-bordered table-hover" >
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Cne</th>
    <th>Action</th>
    <?php
    foreach ($etudiants as $etudiant): 
       $i=$etudiant->getId(); 
        ?>
        <tr >
        <td ><?php echo $etudiant->getNom()?> </td>
        <td><?php echo $etudiant->getPrenom()?> </td>
        <td><?php echo $etudiant->getAge()?> </td>
        <td><?php echo $etudiant->getCne()?> </td>
        <td>
        <a href="<?= "index.php?action=modifier&id=" . $etudiant->getId(); ?>" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Modifier</a>
        
        <a class="btn btn-danger" href="<?= "index.php?action=supprimer&id=" . $etudiant->getId(); ?>" role="button">Supprimer</a>
        </td>
        </tr>
        <?php endforeach;?>
         </table>
       