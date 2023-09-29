<!DOCTYPE html>
<html lang="fr">
<?php include('includes/header.html');?>
    <link rel="stylesheet" href="css/offres.css">
<body>
    <!-- Inclusion du fichier de navigation -->
    <?php include('includes/navigation.php'); ?>

    <div class="container">
        <!-- Titre de la page -->
        <h1>Données de la table Activité :</h1>
        <!-- Tableau pour afficher les données -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nom de l'activité</th>
                    <th>Niveau de l'activité</th>
                    <th>Jour de l'activité</th>
                    <th>Horaires de l'activité</th>
                    <th>Adresse de l'activité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('includes/connexionBD.php');
                include('includes/get_offres.php');
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row["nom_activité"] . "</td>";
                      echo "<td>" . $row["niv_act"] . "</td>";
                      echo "<td>" . $row["jour"] . "</td>";
                      echo "<td>" . $row["heure_deb"] . " - " . $row["heure_fin"] . "</td>";
                      echo "<td>" . $row["nom_rue"] . " - " . $row["ville"] . " - " . $row["cp"] . "</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "Aucune donnée trouvée ou bien impossible de se connecter à la Base de données.";
              }
                ?>
            </tbody>
        </table>
    </div>
    <?php include('includes/footer.html'); ?>
</body>
</html>
