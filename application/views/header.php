<!DOCTYPE html>
<html>
<head>

    <title>Agenda</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="image/x-icon" href="<?php echo base_url(); ?>img/favicon.png" rel="icon"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-switch.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css"/>
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css?ver=<?php echo time(); ?>"/> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/hover.css"/>

</head>

<body>
<div class="container-fluid">


  <!-- Modal de Alerta -->
<div class="modal fade " id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="setBody">
      <div class="modal-header">
        <h4 class="modal-title" id="tituloModal"></h4>
      </div>
      <div class="modal-body" id="contenidoModal">
      </div>
      <div class="modal-footer" id="pieModal">
      </div>

    </div>
  </div>
</div>
