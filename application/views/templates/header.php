<!DOCTYPE html>
<html>

<head>

<!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css" media="screen,projection"
  />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/designJS.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hodgesJS.js"></script> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
</head>

<body>
  <nav>
    <div class="nav-wrapper blue ">
      <a href="<?php echo base_url();?>" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="<?php echo base_url(); ?>usuario">USUARIO</a>
        </li>

      </ul>
    </div>
  </nav>

  <ul class="sidenav blue lighten-3" id="mobile-demo">
    <li>
      <a href="<?php echo base_url(); ?>usuario">USUARIO</a>
    </li>

  </ul>