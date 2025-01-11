<!DOCTYPE html>
<html lang="fr">

<?php
include_once '../layouts/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        include_once '../layouts/nav.php';
        include_once '../layouts/aside.php';
        ?>
        <main class="py-4">
            <div class="content-wrapper">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Gestion des Absences</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Statistiques d'Absences</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="absenceChart" width="300" height="200"></canvas>
                                </div>                                                               
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Statistiques Nombre d'Absences</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="barChart" width="300" height="200"></canvas>
                                </div>                                                               
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Statistiques Nombre d'Absences</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="radarChart" width="300" height="200"></canvas>
                                </div>                                                               
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var ctx = document.getElementById('barChart').getContext('2d');
                    var barChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Séance 1', 'Séance 2', 'Séance 3'], // Exemple de labels
                            datasets: [{
                                label: 'Nombre d\'absences',
                                data: [5, 10, 8], // Données d'exemple
                                backgroundColor: '#dc3545',
                                borderColor: '#dc3545',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('radarChart').getContext('2d');
    var radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Présent', 'Absent', 'Retard'], // Catégories
            datasets: [{
                label: 'Statut des absences',
                data: [50, 30, 20], // Données d'exemple
                backgroundColor: 'rgba(28, 167, 86, 0.2)',
                borderColor: '#28a745',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    });
});

        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('absenceChart').getContext('2d');
            var absenceChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Présent', 'Absent', 'Retard'],
                    datasets: [{
                        data: [60, 30, 10], // Exemple de données
                        backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    return `${tooltipItem.label}: ${tooltipItem.raw}%`;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

    <?php
    include_once '../layouts/footer.php';
    ?>
    <?php
    include_once '../layouts/script-link.php';
    ?>
</body>

</html>
