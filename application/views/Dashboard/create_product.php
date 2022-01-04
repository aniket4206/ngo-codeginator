<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js') ?>) - Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-172926962-1');
    </script>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>layout/img/favicon1.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>layout/img/favicon1.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        NGO &mdash; Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/paper-dashboard.css?v=2.0.0') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/css/dashboard.css') ?>" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="index.html" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="<?= base_url() ?>layout/img/favicon1.png">
                    </div>
                </a>
                <a href="<?= base_url('home') ?>" class="simple-text logo-normal">
                    NGO
                    <!-- <div class="logo-image-big">
            <img src="img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?= base_url('dashboard') ?>">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('products_p') ?>">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Gallery Page</p>
                        </a>
                    </li>
                    <li>
                    <a href="<?= base_url('video_p') ?>">
              <i class="nc-icon nc-tile-56"></i>
              <p>Video Page</p>
            </a>
          </li>
                    <li>
                        <a href="<?= base_url('contact_data') ?>">
                            <i class="nc-icon nc-email-85"></i>
                            <p>Contact Form Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admins') ?>">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Current Admins</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="<?= base_url('home') ?>">NGO Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" onkeyup="myFunction()" id="search_input" class="form-control" placeholder="Search for name..">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-circle-10"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= base_url('admins') ?>">Admin Profile</a>
                                    <a class="dropdown-item" href="<?php echo base_url() . 'logout' ?>">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- <div class="panel-header panel-header-sm">


</div> -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Add Gallery
                                </h4>
                            </div>
                            <div class="card-body ">
                                <?= form_open_multipart('Dashboard/add_products/'); ?>
                                <div class="row ml-auto mr-auto align-items-center justify-content-center">
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="form-group">
                                            <b><label class="col-md-3">Title :</label></b>
                                            <div class="col-md-9">
                                                <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control" id="title">
                                                <p style="color: red;"><?php echo form_error('title', "*"); ?></p>
                                            </div>
                                        </div>
                                    </div>

            
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="form-group">
                                            <b><label class="col-md-3">Category:</label></b>
                                            <div class="col-md-9">
                                                <select class="form-control " name="category" id="category">
                                                    <option>Ngo</option>
                                                    <option>Event</option>
                                                    <option>Social</option>
                                                </select>
                                            </div>
                                            <p style="color: red;"><?php echo form_error('category', "*");   ?></p>
                                        </div>

                                    </div>
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="form-group">
                                            <b><label class="col-md-8">Active :</label></b>
                                            <div class="col-md-9">
                                                <select class="form-control" name="active" id="active">
                                                    <option>Publish</option>
                                                    <option>Unpublish</option>
                                                </select>
                                                <p style="color: red;"><?php echo form_error('active', "*"); ?></p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <b><label>Image :</label></b>
                                                <input type="file" class="form-control form-control-file" name="image" id="Image"> <button class="btn btn-info">Upload </button>
                                                <p style="color: red;"><?php echo form_error('image', "*"); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto mr-auto">
                                        <button type="submit" name="submit" class="btn btn-primary btn-round">Add Content</button>
                                        <a type="submit" href="<?php echo base_url() . 'change_products' ?>" class="btn btn-secondary btn-round">Back</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto">
                            <span class="copyright">
                                Copyright © 2020 Designed by <a href="https://ddsio.com/">DDSIO</a>. All rights reserved.
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search_input");
            filter = input.value.toUpperCase();
            table = document.getElementById("table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/js/paper-dashboard.min.js') ?>?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>

</html>