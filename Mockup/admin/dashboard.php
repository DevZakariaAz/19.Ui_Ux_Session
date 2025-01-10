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
                        <!-- Ajouter une absence -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="button">Ajouter une absence</button>
                            </div>
                        </div>

                        <!-- Filtrer par Séance -->
                        <div class="row mb-3">
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
                        </div>

                        <!-- Filtrer par Nom -->
                        <div class="row mb-3">
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
                        </div>

                        <!-- Filtrer par Calendrier -->
                        <div class="row mb-3">
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
                        </div>
                    </div>
                                            

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
                        </table>
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
        <?php
        include_once '../layouts/footer.php';
        ?>
    </div>
    <?php
    include_once '../layouts/script-link.php';
    ?>
</body>

</html>
