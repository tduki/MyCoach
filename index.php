<!DOCTYPE html>
<html lang="fr">
<?php include('includes/header.html');?>
<body>
    <!-- Inclusion du fichier de navigation -->
    <?php include('includes/navigation.php'); ?>
    <link rel="stylesheet" href="css/index.css">

    <!-- En-tête de la page -->
    <header>
        <section class="first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Titre et contenu principal -->
                        <h1>MyCoach Mike</h1>
                        <p>
                            Bonjour,
                            <br>
                            je suis Coach Mike, et je suis ravi de vous accueillir sur mon chemin vers la réussite personnelle et professionnelle. En tant que coach certifié, je suis déterminé à vous aider à atteindre vos objectifs et à dépasser vos limites pour réaliser votre plein potentiel.
                        </p>
                        <a href="quisuis.php" class="btn btn-primary">EN SAVOIR PLUS</a>
                    </div>
                    <div class="col-md-6">
                        <!-- Image d'accueil -->
                        <img src="img/salle.jpg" alt="Image d'accueil" style="width: 600px; height: 400px;">
                    </div>
                </div>
            </div>
        </section>
    </header>

<?php include('includes/footer.html'); ?>

    <!-- Scripts JavaScript nécessaires pour Bootstrap (jQuery, Popper.js, Bootstrap.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
