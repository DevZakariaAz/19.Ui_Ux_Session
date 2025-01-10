<!DOCTYPE html>
<html lang="en">

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
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>15</h3>
                                    <p>Absences aujourd'hui</p>
                                </div>
                                <div class="icon"><i class="fa fa-calendar"></i></div>
                                <a href="#" class="small-box-footer">Plus de détails <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                                                <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Statistiques d'Absences</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="absenceChart" width="400" height="200"></canvas>
                            </div>
                        </div>

                    </div>

                        <!-- Ajouter une absence -->
                        <!-- <div class="row mb-3">
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="button">Ajouter une absence</button>
                            </div>
                        </div> -->

                        <!-- Filtrer par Séance -->
                        <!-- <div class="row mb-3">
                            <div class="col-md-6">
                                <form class="form-inline">
                                    <div class="input-group input-group-sm w-100">
                                        <select name="filter-session" id="filter-session" class="form-control custom-select">
                                            <option value="" style="color: #ced4da;">Filtrer par Séance</option>
                                            <option value="seance1">Séance 1</option>
                                            <option value="seance2">Séance 2</option>
                                            <option value="seance3">Séance 3</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="submit">
                                                <i class="fas fa-filter"></i> Filtrer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        <!-- Filtrer par Nom -->
                        <!-- <div class="row mb-3">
                            <div class="col-md-6">
                                <form class="form-inline">
                                    <div class="input-group input-group-sm w-100">
                                        <input type="text" id="filter-name" name="filter-name" class="form-control"
                                            placeholder="Filtrer par Nom">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="submit">
                                                <i class="fas fa-filter"></i> Filtrer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        <!-- Filtrer par Calendrier -->
                        <!-- <div class="row mb-3">
                            <div class="col-md-6">
                                <form class="form-inline">
                                    <div class="input-group input-group-sm w-100">
                                        <input type="date" id="filter-date" name="filter-date" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="submit">
                                                <i class="fas fa-filter"></i> Filtrer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    <!-- </div>
                                            

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nom du Stagiaire</th>
                                    <th>Seance</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Reda Touil</td>
                                    <td><span class="badge badge-success">Seance 1 </span></td>
                                    <td>05/01/2025</td>
                                    <td><span class="badge badge-primary">Absence</span></td>
                                    <td class="text-center">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Yasmine Ben</td>
                                    <td><span class="badge badge-warning">Seance 2</span></td>
                                    <td>06/01/2025</td>
                                    <td><span class="badge badge-primary">Absence</span></td>
                                    <td class="text-center">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                    <!-- </div> -->
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('absenceChart').getContext('2d');
            var absenceChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Présent', 'Absent', 'Retard'],
                    datasets: [{
                        data: [60, 30, 10], // Example data
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
    </div>
    <?php
    include_once '../layouts/script-link.php';
    ?>
</body>

</html>
