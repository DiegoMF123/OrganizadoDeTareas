<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al sistema</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/Ico2.ico">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plugins/pace/pace.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/listadoDeTareas.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/plugins/pace/pace.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/listadoTareas.js">
    </script>
    <!--Full Calendar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <!-- scropt para Dar color a la tabla en la parte de los encabezados -->
    <style type="text/css">
        table {
            background-color: #EAEDED;
            border: 5px solid black;
            width: 100%;

        }
    </style>


</head>


<body>


    <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">
                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn"> <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a> </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->

                        <!--Messages Dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-envelope fa-lg"></i> <span class="badge badge-header badge-warning">9</span> </a>
                            <!--Message dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av2.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Andy sent you a message</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av6.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Donna sent you a message</div>
                                                        <small class="text-muted">5 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Dropdown footer-->
                                <div class="pad-all bord-top"> <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages </a> </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End message dropdown-->
                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <div class="h4 text-muted text-thin mar-no"> Notification </div>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New comments waiting approval</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">HDD is full</div>
                                                        <small class="text-muted">50 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Write a news article</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Comment Sorting</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New User Registered</div>
                                                        <small class="text-muted">4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Dropdown footer-->
                                <div class="pad-all bord-top"> <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a> </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <!--Profile toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="hidden-xs" id="toggleFullscreen"> <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button"> <span class="sr-only">Toggle fullscreen</span> </a> </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Profile toogle button-->
                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">

                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">

                                <!--Abrimos llaves de php para poder llamar el tipo de variable session PARA llamar
                                        el campo nombre que es el que se muestra en la vista, "parte superior derecha donde indica
                                        el nombre del usuario que se ha logeado"-->

                                <div class="username hidden-xs"> Bienvenido: <?php echo $_SESSION["nombre"]; ?></div>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right with-arrow">


                                <ul class="head-list">

                                    <li>

                                        <!-- Boton que sirve para poder redireccionar a la vista del login, cuando el usuario quiera salir, en este caso la funcion esta en el controlador
                                     welcome y la funcion se llama salir -->

                                        <a href="<?php echo base_url(); ?>index.php/welcome/salir"> <i class="fa fa-sign-out fa-fw"></i> Salir </a>

                                    </li>

                                </ul>

                            </div>

                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->
            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <section id="content-container">
                <header class="pageheader hidden-xs">
                    <h3><i class="fa fa-home"></i> Actividades </h3>
                    
                </header>
                <!--Page content-->
                <!--===================================================-->
                <section id="page-content">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Listado de actividades</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Draggable Events -->
                                    <!-- ============================================ -->

                                   <br>
                                   <br>
                                    <div id="demo-external-events">
                                       <!-- <div class="fc-event">Tarea 1</div>-->
                                        <!--<div class="fc-event">Tarea 2</div> -->
                                        <!--<div class="fc-event">Tarea 3</div> -->
                                        
                                        <hr>
                                      
                                    </div>
                                    <!-- ============================================ -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="panel">
                                <div class="panel-body">
                                    <!-- Calendar placeholder-->
                                    <!-- ============================================ -->
                                    <div id='demo-calendar'></div>
                                    <!-- ============================================ -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--===================================================-->
                <!--End page content-->
            </section>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">


                <div class="navbar-header">

                    <a href="<?php echo base_url(); ?>" class="navbar-brand">

                        <!--Llamada  de imagen para el menú de nuestras vistas-->

                        <i><img src="<?php echo base_url(); ?>/assets/img/LogoApp.png" width="60" height="60">
                            <font size="5" face="georgia">Menú BRP </font>
                        </i>



                    </a>

                </div>



                <div id="mainnav">


                    <div id="mainnav-menu-wrap">

                        <div class="nano">

                            <div class="nano-content">

                                <ul id="mainnav-menu" class="list-group">


                                    <li class="list-header">Opciones De Navegación</li>

                                    <li>

                                        <a href="#">

                                            <i class="fa fa-home"></i>

                                            <span class="menu-title">Inicio</span>

                                            <i class="arrow"></i>

                                        </a>

                                        <!--Submenu-->

                                        <ul class="collapse">

                                            <li><a href="<?php echo base_url(); ?>index.php/welcome"><i class="fa fa-caret-right"></i>Pantalla Principal</a></li>

                                        </ul>

                                    </li>


                                    <li>

                                        <a href="#">

                                            <i class="fa fa-briefcase"></i>

                                            <span class="menu-title">Tablero</span>

                                            <i class="arrow"></i>

                                        </a>

                                        <!--Submenu-->

                                        <ul class="collapse">

                                            <li><a href="<?php echo base_url(); ?>index.php/tablero"><i class="fa fa-caret-right"></i>Iniciar Nuevo Tablero</a></li>

                                        </ul>

                                    </li>




                                </ul>


                            </div>

                        </div>

                    </div>



                </div>

            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>
                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2015 Your Company</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>


    <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.1.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/fast-click/fastclick.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/metismenu/metismenu.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/switchery/switchery.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/datatables/media/js/jquery.dataTables.js"></script>


    <script src="<?php echo base_url(); ?>/assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>


    <script src="<?php echo base_url(); ?>/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/plugins/screenfull/screenfull.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/demo/tables-datatables.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/demo/fullcalendar.js"></script> 
    <script src="<?php echo base_url(); ?>/assets/plugins/screenfull/screenfull.js"></script> 


</body>


</html>