<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODEO - Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/iconly/bold.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/simple-datatables/style.css');?>">


    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap-icons/bootstrap-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/logo.ico');?>" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo base_url('Home'); ?>" class="text-warning">RODEO</a>
                            <p class="fs-6">Frutas y Legumbres El Rodeo S.P.R de R.I</p>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('Home'); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bag-check"></i>
                                <span>Pedidos</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Pedidos') ?>"><i class="bi bi bi-card-list"></i>
                                        <span>Ver Pedidos</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Pedidos/Agregarpedido') ?>"><i
                                            class="bi bi-clipboard-plus"></i> <span>Crear Pedido</span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi bi-broadcast"></i>
                                <span>Rastreo</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Rastreo') ?>"><i class="bi bi bi-card-list"></i>
                                        <span>Ver Hojas de rastreo</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Rastreo/Agregarhrastreo') ?>"><i
                                            class="bi bi-clipboard-plus"></i> <span>Crear hoja de rastreo</span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-clipboard-data"></i>
                                <span>Lotes</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Lotes') ?>"><i class="bi bi bi-card-list"></i>
                                        <span>Ver lotes</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Lotes/Agregarlote') ?>"><i
                                            class="bi bi-clipboard-plus"></i> <span>Crear lote</span></a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-box-seam"></i>
                                <span>Embarques</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Embarques') ?>"><i class="bi bi-card-list"></i>
                                        <span>Ver Packing list</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Embarques/Agregarembarque') ?>"><i
                                            class="bi bi-clipboard-plus"></i> <span>Crear embarque</span></a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Usuarios</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Embarques') ?>"><i class="bi bi-people"></i> <span>Ver
                                            Usuarios</span></a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Embarques/Agregarembarque') ?>"><i
                                            class="bi bi-person-plus"></i></i> <span>Crear Usuario</span></a>
                                </li>

                            </ul>
                        </li>



                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>

            </header>

            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card tex-center">
                                <div class="card-body px-3 py-4-5">
                                    <i class="bi bi-grid-fill"><span><?= $title; ?></span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 ">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="<?= base_url('assets/images/faces/1.jpg');  ?> " alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold"><?php echo session('usuario'); ?></h5>
                                    <h6 class="text-muted mb-0"><a
                                            href="<?php echo base_url('Login/destroy_session'); ?>">Salir </a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>