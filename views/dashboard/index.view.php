<?php
$title = "Inicio";
$page = "Inicio";
?>
<?php include APP_PATH . '/views/templates/head.view.php' ?>
<?php include APP_PATH . '/views/templates/sidebar.view.php' ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="card box-shadow-md mt-none">
                <div class="card-content">
                    <div class="row">
                        <?php
                        switch ($_SESSION['codi_tipo_usua']) {
                            case 1:
                                print('<div class="col-md-6 right"><a id="helperx" class="waves-effect waves-green btn-flat btn-small" href="../web/manuales/dashboard_administrador.pdf" target="_blank"><i class="material-icons">help</i></a></div>');
                                break;
                            case 2:
                                print('<div class="col-md-6 right"><a id="helperx" class="waves-effect waves-green btn-flat btn-small" href="../web/manuales/dashboard_financiero.pdf" target="_blank"><i class="material-icons">help</i></a></div>');
                                break;
                            case 3:
                                print('<div class="col-md-6 right"><a id="helperx" class="waves-effect waves-green btn-flat btn-small" href="../web/manuales/dashboard_encargado.pdf" target="_blank"><i class="material-icons">help</i></a></div>');
                                break;
                        }
                        ?>
                            <span class="card-title">Dashboard</span>

                    </div>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 4 || $_SESSION['codi_tipo_usua'] == 5 || $_SESSION['codi_tipo_usua'] == 6) {
                        print('                    <div class="row">
                    <div class="col-sm-12 col-md-6 center">
                        <span class="card-title" id="eventoNombre">
                            Mi evento
                        </span>
                    </div>
                    <div class="col-md-6 right"><a id="helperx" class="waves-effect waves-green btn-flat btn-small" href="../web/manuales/curso.pdf" target="_blank"><i class="material-icons">help</i></a></div>
                </div>
                <table class="responsive-table hover no-wrap row-border striped" id="table-evento-detalle-dashboard" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Nombre de Invitado
                            </th>
                            <th>
                                Empresa de Invitado
                            </th>
                            <th>
                                Etiqueta de Invitado
                            </th>
                            <th>
                                Asistencia
                            </th>
                        </tr>
                    </thead>
                </table>');
                    }

                    ?>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 4 || $_SESSION['codi_tipo_usua'] == 5 || $_SESSION['codi_tipo_usua'] == 8) { } else {
                        print('<ul class="collapsible" id="ulPendienteFinalizar">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">timer</i>
                                Cursos a punto de finalizar
                                <span data-badge-caption="Pendientes" id="cantidadCursos" name="cantidadCursos" class="new badge blue"></span>
                            </div>
                            <div class="collapsible-body">
                                <div class="collection" id="cursosPendientes" name="cursosPendientes">

                                </div>
                            </div>
                        </li>
                    </ul>');
                    }
                    ?>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 2 || $_SESSION['codi_tipo_usua'] == 3) {
                        if ($_SESSION['codi_cate'] == 4) {
                            print('<ul class="collapsible" id="ulPendienteInformeFactura">
        <li>
            <div class="collapsible-header">
                <i class="material-icons">library_books</i>
                Cursos a finalizados pendientes informe y factura
                <span data-badge-caption="Pendientes" id="cantidadCursosInformeFactura" name="cantidadCursosInformeFactura" class="new badge blue"></span>
            </div>
            <div class="collapsible-body">
                <div class="collection" id="cursosPendientesInformeFactura" name="cursosPendientesInformeFactura">

                </div>
            </div>
        </li>
    </ul>');
                        } else {
                            print('
                    <ul class="collapsible" id="ulPendienteInforme">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">library_books</i>
                                Cursos a finalizados pendientes informe
                                <span data-badge-caption="Pendientes" id="cantidadCursosInforme" name="cantidadCursosInforme" class="new badge blue"></span>
                            </div>
                            <div class="collapsible-body">
                                <div class="collection" id="cursosPendientesInforme" name="cursosPendientesInforme">

                                </div>
                            </div>
                        </li>
                    </ul>
                    ');
                        }
                    }
                    ?>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 1) {
                        print("
                        <ul class='collapsible' id='ulPendienteAprobacion'>
                            <li>
                                <div class='collapsible-header'>
                                    <i class='material-icons'>list_alt</i>
                                    Cursos pendientes de aprobacion de informe
                                    <span data-badge-caption='Pendiente' id='cantidadCursosInformeAprov' name='cantidadCursosInformeAprov' class='new badge blue'></span>
                                </div>
                                <div class='collapsible-body'>
                                    <div class='collection' id='informesPendientesAprovacion' name='informesPendientesAprovacion'>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        ");
                    }
                    ?>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 2) {
                        print('
        <ul class="collapsible" id="ulPendienteFactura">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">attach_money</i>
                                Cursos Pendientes de Factura
                                <span data-badge-caption="Pendientes" id="pendientesFactura" name="pendientesFactura" class="new badge blue"></span>
                            </div>
                            <div class="collapsible-body">
                                <div class="collection" id="cursosPendientesFactura" name="cursosPendientesFactura">

                                </div>
                            </div>
                        </li>
                    </ul>
        ');
                    }
                    ?>
                    <?php
                    if ($_SESSION['codi_tipo_usua'] == 2) {
                        print("
                        <ul class='collapsible' id='ulPendienteQuedan'>
                        <li>
                            <div class='collapsible-header'>
                                <i class='material-icons'>list_alt</i>
                                Quedan pendientes de abonar
                                <span data-badge-caption='Pendientes' id='pendientesQuedan' name='pendientesQuedan' class='new badge blue'></span>
                            </div>
                            <div class='collapsible-body'>
                                <div class='collection' id='quedanPendientesAbono' name='quedanPendientesAbono'>
                                </div>
                            </div>
                        </li>
                    </ul>
                        ");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- SCRIPTS -->
<?php
if ($_SESSION['codi_tipo_usua'] == 4 || $_SESSION['codi_tipo_usua'] == 5 || $_SESSION['codi_tipo_usua'] == 6) {
    print('<script src="' . WEB_PATH . 'js/AJAX/dashboardEvento.js"></script>');
} else {
    print('<script src="' . WEB_PATH . 'js/AJAX/dashboard.js"></script>');
}

?>
<?php include APP_PATH . '/views/evento/asistenciaInvitado.view.php' ?>
<?php include APP_PATH . '/views/curso/informeAgregado.view.php' ?>
<?php include APP_PATH . '/views/curso/informeAgregadoFactura.view.php' ?>
<?php include APP_PATH . '/views/curso/informeAprovacion.view.php' ?>
<?php include APP_PATH . '/views/templates/footer.view.php' ?>