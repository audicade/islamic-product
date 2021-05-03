<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Islamic Product</title>
    
    <!--
    Lava Landing Page
    https://templatemo.com/tm-540-lava-landing-page
    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url('main/index'); ?>" class="logo">
                            Islamic
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Tentang</a></li>
                            <li class="scroll-to-section"><a href="#promotion" class="menu-item">Promosi</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimoni</a></li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">Tentang Kami</a></li>
                                    <li><a href="" class="menu-item">Fitur</a></li>
                                    <li><a href="" class="menu-item">Pertanyaan</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                    <li><a href="" class="menu-item" data-toggle="modal"
                                    data-target="#admin">Admin</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Hubungi Kami</a></li>
                            <?php
                                if($this->session->userdata('admin_id')) :
                            ?>
                            <li class="scroll-to-section"><a href="" data-toggle="modal" data-target="#logout">Logout</a></li>
                            <li class="scroll-to-section"><a href="" data-toggle="modal" data-target="#agen">Agen</a></li>

                            <?php
                                else :
                            ?>
                            <li class="scroll-to-section"><a href="" data-toggle="modal" data-target="#admin">Admin</a></li>
                
                            <?php
                                endif;
                            ?>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    