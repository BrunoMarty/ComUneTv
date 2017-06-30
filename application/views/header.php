<!DOCTYPE html>
<html>
    <head>
        <title>Com.Une.Tv</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/videojs.css">
        <link rel = "stylesheet" type = "text/css" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="<?php echo base_url(); ?>/js/video.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-3.2.1.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">

            <div class="row head">


        		<div class="col-md-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="<?php echo site_url('main/index'); ?>">Acceuil</a></li>
                        <li role="presentation"><a href="<?php echo site_url('main/ressourcerie'); ?>">Ressourcerie</a></li>

                        <?php
                        if(isset($_SESSION['user'])){ ?>
                            <li role="presentation"><a href="#">Déconnexion</a></li>
                            <li role="presentation"><a href="#">Mon Compte</a></li>

                        <?php
                    }else { ?>
                        <li role="presentation"><a href="<?php echo site_url('login'); ?>">Connexion</a></li>
                    <?php }
                        ?>
                    </ul>
        		</div>
        		<div class="col-md-2">
                    <a href="<?php echo site_url('home'); ?>"><img id="logo"src="/img/cut.png";/></a>
        		</div>
        	</div>
