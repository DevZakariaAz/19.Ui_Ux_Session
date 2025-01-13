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
                    <!-- Card Header -->
                    <div class="card-header border-transparent">
                        <h3 class="h3">Tableau de Bord des Absences</h3>
                    </div>

                    <!-- Row with statistics boxes -->
                    <div class="row mx-3 mt-4">
                        <!-- Total Students -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $absenceData['total'] ?? 93 ?></h3>
                                    <p>Total Étudiants</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Present Students -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $absenceData['present'] ?? 70 ?></h3>
                                    <p>Présents</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Absent Students -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $absenceData['absent'] ?? 20 ?></h3>
                                    <p>Absents</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-times"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Excused Absences -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $absenceData['excused'] ?? 3 ?></h3>
                                    <p>Excusés</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts Section -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Statistiques d'Absences</h3>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="absenceChart" width="300" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Nombre d'Absences</h3>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart" width="300" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Répartition des Statuts</h3>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="radarChart" width="300" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Doughnut Chart
            new Chart(document.getElementById('absenceChart').getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['Présent', 'Absent', 'Retard'],
                    datasets: [{
                        data: [60, 30, 10],
                        backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                    }]
                },
                options: { responsive: true }
            });

            // Bar Chart
            new Chart(document.getElementById('barChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Séance 1', 'Séance 2', 'Séance 3'],
                    datasets: [{
                        label: 'Nombre d\'absences',
                        data: [5, 10, 8],
                        backgroundColor: '#dc3545',
                        borderColor: '#dc3545',
                    }]
                },
                options: { responsive: true, scales: { y: { beginAtZero: true } } }
            });

            // Radar Chart
            new Chart(document.getElementById('radarChart').getContext('2d'), {
                type: 'radar',
                data: {
                    labels: ['Présent', 'Absent', 'Retard'],
                    datasets: [{
                        label: 'Statut des absences',
                        data: [50, 30, 20],
                        backgroundColor: 'rgba(28, 167, 86, 0.2)',
                        borderColor: '#28a745',
                    }]
                },
                options: { responsive: true }
            });
        });
    </script>

    <?php include_once '../layouts/footer.php'; ?>
    <?php include_once '../layouts/script-link.php'; ?>
</body>

</html>
