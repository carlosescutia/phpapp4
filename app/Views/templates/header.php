<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url()?>favicon.png"/>

    <title>phpapp4</title>

    <link href="<?=base_url()?>assets/css/phpapp4.css" rel="stylesheet"/>

    <!-- jquery -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>

    <!-- semantic-ui -->
    <link href="<?=base_url()?>assets/css/semantic.min.css" rel="stylesheet"/>
    <script src="<?=base_url()?>assets/js/semantic.min.js"></script>

    <!-- datatables -->
    <link href="<?=base_url()?>assets/css/datatables.min.css" rel="stylesheet"/>
    <script src="<?=base_url()?>assets/js/datatables.min.js"></script>

    <!-- chart.js -->
    <script src="<?=base_url()?>assets/js/chart.js"></script>
    <script src="<?=base_url()?>assets/js/chartjs-plugin-datalabels"></script>
    <style type="text/css">
    .secondary.pointing.menu .toc.item {
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
            display: none;
        }
        .secondary.pointing.menu .toc.item {
            display: block;
        }
    }
    </style>

    <script>
    $(document).ready(function() {
        // create sidebar and attach to menu open
        $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
        ;
    });
    </script>
</head>
<body>

<!-- Sidebar Menu -->
<div class="ui vertical sidebar menu">
    <a class="item" href="/">Inicio</a>
    <a class="item" href="/usuario">Procesar</a>
    <a class="item">Reportes</a>
    <a class="item">Catálogos</a>
    <a class="item" href="/logout">Salir</a>
</div>

<!-- Page Contents -->
<div class="pusher">
<div class="ui vertical center aligned segment">

    <div class="ui container barra">
        <div class="ui large secondary pointing menu">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <h3 class="ui header toc item">PHPapp4</h3>
            <a class="item" href="/">Inicio</a>
            <a class="item" href="/usuario">Procesar</a>
            <a class="item">Reportes</a>
            <a class="item">Catálogos</a>
            <div class="right menu">
                <a class="item" href="/logout">Salir</a>
            </div>
        </div>
    </div>

</div>
