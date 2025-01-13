<!DOCTYPE html>
<html lang="fr">
<?php
include_once '../../layouts/head.php'; // Inclusion de l'en-tête
?>

<head>
    <style>
        /* Style pour le conteneur de cases à cocher */
        .checkbox-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* Espacement entre les cases */
        }

        .checkbox-container .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Personnalisation des cases à cocher */
        .form-check-input {
            width: 18px;
            height: 18px;
        }

        /* Amélioration du style des étiquettes */
        .form-check-label {
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        include_once '../../layouts/nav.php'; // Barre de navigation
        include_once '../../layouts/aside.php'; // Barre latérale
        ?>
        <main class="py-4">
            <div class="content-wrapper">
                <div class="card card-info">
                <div class="card-header border-transparent">
                    <h3 class="h3">Créer une Absence</h3>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="create_absence.php" method="POST" class="container">
                            <!-- Sélection du Stagiaire -->
                            <div class="form-group">
                                <label for="trainee">Stagiaire</label>
                                <select class="form-control" id="trainee" name="trainee" required>
                                    <option value="" selected disabled>Sélectionnez un stagiaire</option>
                                    <option value="1">Jean Dupont</option>
                                    <option value="2">Marie Curie</option>
                                    <option value="3">Ahmed Khalid</option>
                                    <option value="4">Sara Lee</option>
                                </select>
                            </div>

                            <!-- Sélection des Séances avec cases à cocher -->
                            <div class="form-group">
                                <label>Choisissez les Séances</label>
                                <div class="checkbox-container">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sessions[]" id="session1" value="1">
                                        <label class="form-check-label" for="session1">Séance 1 (10h00 - 12h00)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sessions[]" id="session2" value="2">
                                        <label class="form-check-label" for="session2">Séance 2 (13h00 - 15h00)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sessions[]" id="session3" value="3">
                                        <label class="form-check-label" for="session3">Séance 3 (15h30 - 17h30)</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Date de l'absence -->
                            <div class="form-group">
                                <label for="date">Date de l'absence</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <!-- Statut -->
                            <div class="form-group">
                                <label for="status" style="font-weight: bold; margin-bottom: 8px;">Statut</label>
                                <select class="form-control" id="status" name="status" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
                                    <option value="" selected disabled>Sélectionnez un statut</option>
                                    <option value="Absence">Absence</option>
                                    <option value="Retard">Retard</option>
                                </select>
                            </div>

                            <!-- Commentaires -->
                            <div class="form-group">
                                <label for="comments">Commentaires</label>
                                <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Ajoutez des notes supplémentaires (facultatif)"></textarea>
                            </div>

                            <!-- Boutons -->
                        <div class="row">
                            <div class="col-12">
                            <a href="../dashboard/dashboard.php" class="btn btn-secondary">Annuler</a>
                            <a href="./index.php" class="btn btn-md btn-info float-right">Ajouter</a>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </main>
        <?php
        include_once '../../layouts/footer.php'; // Pied de page
        ?>
    </div>
    <?php
    include_once '../../layouts/script-link.php'; // Scripts
    ?>
</body>
</html>
