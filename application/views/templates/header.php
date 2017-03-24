<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>CodeIgniter Tutorial</title>
                <meta name="description" content="">
                <meta name="keywords" content="">
                <meta name="author" content="">

                <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	        <link href="/assets/css/style.css" rel="stylesheet">

                <?php
                if (isset($css)){
                        foreach ($css as $_css) {
                         echo  '<link href="' . $_css . '" rel="stylesheet">';
                         echo "\n\t\t\t\t";
                        }
                }
                if (isset($js)){
                        foreach ($js as $_js) {
                         echo  '<script src="' . $_js . '"></script>';
                         echo "\n\t\t\t\t";
                        }
                }
                ?>
        </head>
        <body>
                <header id="site-header">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url() ?>">Site title</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
							<li><a href="<?= base_url('logout') ?>">Logout</a></li>
						<?php else : ?>
							<li><a href="<?= base_url('register') ?>">Register</a></li>
							<li><a href="<?= base_url('login') ?>">Login</a></li>
						<?php endif; ?>
					</ul>
				</div><!-- .navbar-collapse -->
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->

	<main id="site-content" role="main">
		
		<?php if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php var_dump($_SESSION); ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		<?php endif; ?>
                