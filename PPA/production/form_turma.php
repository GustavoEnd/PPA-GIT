<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icone.ico" type="image/ico" />

    <title>PRATICA PROFISSIONAL ARTICULADORA| </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <style>
        .custom-select-sm {
            border-color: transparent;
            background-color: #e6e6ff;
            color: rgb(85, 83, 83);
        }

        input {
            border-color: transparent;
            background-color: #e6e6ff;
            border-radius: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: grey;
        }

        #nome {
            width: 300px;
        }

        #email {
            width: 200px;
        }

        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            width: inherit;
            /* Or auto */
            padding: 0 10px;
            /* To give a bit of padding on the left and right */
            border-bottom: none;
        }

        a,
        a:hover,
        a:active {
            color: white;
        }
    </style>
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><span>PPA</span></a>
                        <img href="images/icone.ico " type="image/ico"><span></span></img>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bem Vindo,</span>
                            <h2>Professor(a)</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                     <!-- sidebar menu -->
                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3></h3>
                            <ul class="nav side-menu">
                                <li><a href="index.html"><i class="fa fa-home"></i> Inicio </a>

                                    <li><a><i class="fa fa-edit"></i> Professor <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">Cadastrar</a></li>
                                            <li><a href="lista_professor.php">Listar</a></li>


                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Aluno <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="formaluno.php">Cadastrar</a></li>
                                            <li><a href="lista_aluno.php">Lista</a></li>

                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-edit"></i> Disciplina <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="formdisciplina.html">Cadastrar</a></li>
                                            <li><a href="lista_disciplina.php">Listar</a></li>

                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-edit"></i> Turma <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form_turma.php">Cadastrar</a></li>
                                            <li><a href="lista_turma.php">Listar</a></li>

                                        </ul>
                                    </li>


                                    <li><a><i class="fa fa-edit"></i> Projeto <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form_projeto.html">Cadastrar</a></li>
                                            <li><a href="lista_projeto.php">Listar</a></li>

                                        </ul>
                                    </li>





                                    <li><a><i class="fa fa-table"></i> Acompanhamento<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tabelas</a></li>
                                        </ul>
                                    </li>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Configurações">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Tela Cheia">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Travar vizualização">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Sair" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Professor(a)
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="profile.html"> Perfil</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Configurações</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Ajuda</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">1</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>Professor(a)</span>
                                                <span class="time">3 mins atrás</span>
                                            </span>
                                            <span class="message">
                                                cadastro concluído!
                                            </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>Todos os alertas</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- index.html -->
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- INICIO CADASTRO ALUNO -->

                <nav>
                    <h4> Cadastro Turma </h4>
                </nav>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border"> Por favor, preencha os dados referentes ao turma </legend>
                    <form method="POST" action="formulario_turma.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                Descrição:
                                <br>
                                <input type="text" name="descricao" id="descricao" class="campo"> <br>
                            </div>
                           
                            <div class="form-group col-md-6">
                                Série: <br>
                                <input type="text" name="serie" id="serie" class="campo">
                                <br>
                            </div>

                           <div class="form-group col-md-6">
                                Curso:
                                <br>
                                <?php
                                echo  '<select name="id_curso" id="id_curso" class="custom-select-sm">';

                                include 'banco.php';
                                include 'banco_curso.php';
                                $result = get_cursos();
                                foreach ($result as $linha) {
                                    echo '<option value="' . $linha['id_curso'] . '">' .   $linha['descricaoCurso'] . '</option>';
                                }
                                echo '</select>';

                                ?>
                                <br>
                            </div>

                            <div class="form-group col-md-6">
                                Turno:
                                <br>

                                <select name="turno" id="turno" class="custom-select-sm">

                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Noturno">Noturno</option>

                                </select>


                                <br>
                            </div>


                            <div class="form-group col-md-6">
                                Ano Letivo:
                                <br>
                                <input type="number" name="ano_letivo" id="ano_letivo" class="campo">
                                <br>
                            </div>
                            <br>
                            <div class="form-group col-md-6 ">
                                <br>
                                <button type="submit" class="btn btn-dark">Enviar</button>

                            </div>

                        </div>



                    </form>
                </fieldset>



































                <!-- FIM CADASTRO ALUNO -->
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>