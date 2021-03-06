<?php
/*
    Fábio Simulator
    Copyright LenilsonJr - falecom@lenilsonjr.com & Rannyeri Rodrigues - rannyerirbatista@gmail.com
*/
require_once( 'functions.php' );
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IFPE Fábio Simulator</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css" media="screen" charset="utf-8">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Mudar navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost"><img class="img-respinsive pull-left" style="margin-right: 10px;" height="18px" width="16px" src="sport.png" alt="Sport Recife" />IFPE Fábio Simulator</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost"><i>"<?php showSlogan(); ?>"</i></a></li>
                    <li><img width="42px" height="42px;" src="fabio.png" alt="Fábio Feliciano" class="img-responsive center-block" /></li>
                </ul>

            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">

                <?php
                if ( !isset ( $_REQUEST[ 'exercicios' ] ) ) {
                ?>
                <div class="jumbotron" style="margin-top: 160px;">
                    <form id="formGerarProgramas" method="post">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="exercicios">Número de exercicios a gerar:</label>
                                    <input type="number" min="1" class="form-control" name="exercicios" placeholder="Digite o número de exercicios que deseja..." value="10">
                                </div>

                            </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="especificações">Número de especificações a gerar:</label>
                                    <input type="number" min="2" max="7" class="form-control" value="2" name="especificacoes" placeholder="Digite o número de especificações que deseja...">
                                </div>

                            </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="instruções">Número de instruções a gerar:</label>
                                    <input type="number" min="2" max="5" class="form-control" value="2" name="instrucoes"  placeholder="Número de instruções que deseja...">
                                </div>

                            </div>
                            <div class="col-md-2">

                                <div class="form-group">
                                    <button style="margin-top: 14px;" type="submit" class="btn btn-lg center-block btn-success">GERAR!</button>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
                <?php
                } else {
                ?>
                <div class="jumbotron">
                <?php
                    $exercises = generateExercises( $_REQUEST['exercicios'], $_REQUEST['especificacoes'], $_REQUEST['instrucoes'] );

                    foreach ( $exercises as $exercise ) {

                        echo '<div class="row">';

                        echo '<h3>'. $exercise .'</h3>';

                        echo '</div>';
                        echo '<hr>';

                    }

                ?>
                    <div class="row">

                        <div class="pull-left">

                            <a href="http://localhost" type="button" class="btn btn-lg btn-danger"> < VOLTAR</a>

                        </div>

                    </div>
                </div>
                <?php
                }
                ?>


        </div>

    </body>
</html>
