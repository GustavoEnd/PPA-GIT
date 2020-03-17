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
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      border-radius: 5px;
    }

    td,
    th {
      border: 1px solid #4682B4;
      text-align: left;
      padding: 5px;
    }

    tr:nth-child(even) {
      background-color: #4682B4;
    }

    .btnExcluir:link,
    .btnExcluir:visited {
      background-color: #f44336;
      color: white;
      padding: 7px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
    }

    .btnEditar:link,
    .btnEditar:visited {
      background-color: #FFA500;
      color: white;
      padding: 7px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
    }

    .btnExcluir:hover,
    .btnExcluir:active {
      background-color: red;
      border-radius: 5px;
    }

    .btnEditar:hover,
    .btnEditar:active {
      background-color: #FF4500;
      border-radius: 5px;
    }

    .linkNovo {
      margin-top: 10px;
    }

    .linkNovo:link,
    .linkNovo:visited {
      background-color: #6495ED;
      color: white;
      padding: 7px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;

    }

    .linkNovo:hover,
    .linkNovo:active {
      background-color: #4169E1;
      border-radius: 5px;
    }

    .sub_titulo {
      text-align: center;
      background-color: #4682B4;
      border-radius: 5px;
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
                                        <li><a href="formaluno.html">Cadastrar</a></li>
                                        <li><a href="lista_aluno.php">Lista</a></li>

                                    </ul>
                                </li>

                                <li><a><i class="fa fa-edit"></i> Disciplina <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form_wizards.html">Cadastrar</a></li>
                                        <li><a href="form_upload.html">Listar</a></li>

                                    </ul>
                                </li>

                                <li><a><i class="fa fa-edit"></i> Turma <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form_wizards.html">Cadastrar</a></li>
                                        <li><a href="form_upload.html">Listar</a></li>

                                    </ul>
                                </li>


                                <li><a><i class="fa fa-edit"></i> Projeto <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form_wizards.html">Cadastrar</a></li>
                                        <li><a href="form_upload.html">Listar</a></li>

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
        <div class="text-center">


          <h2 class="sub_titulo">Alunos Cadastrados</h2>

          <div>


            <table>
              <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Curso</th>
                <th>Turma</th>
                <th>Número da Matricula</th>
                <th>Ano letivo</th>
                <th colspan='2' style='text-align: center'>Ações</th>
              </tr>
              <?php
              include 'banco_aluno.php';
              $result = get_alunos();
              foreach ($result as $linha) {
                echo '<tr>';
                echo '<td>' . $linha["nome"] . '</td>';
                echo '<td>' . $linha["telefone"] . '</td>';
                echo '<td>' . $linha["email"] . '</td>';
                echo '<td>' . $linha["sexo"] . '</td>';
                echo '<th>' . $linha["id_turma"] . '</th>';
                // echo '<td>' . $linha["id_curso"] . '<th>';
                echo '<th>' . $linha["matricula"] . '</th>';
                echo '<th>' . $linha["ano"] . '</th>';

                $num_matricula = $linha["matricula"];
                echo '<td><a class="btnExcluir" href="excluir_aluno.php?matricula=' .
                  $num_matricula . '">Excluir</a></td>';
                echo '<td><a class="btnEditar" href="editar_usuarios.php?matricula=' . $num_matricula . '">Editar</a></td>';
                echo '</tr>';
              }

              ?>
            </table>
          </div>

        </div>
        <!-- /page content -->

      </div>
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
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>