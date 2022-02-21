<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title> <?php echo $title; ?> | <?php echo get_store_name(); ?></title>

	<link rel="stylesheet" href="<?= base_url('assets/themes/interior/css/'); ?>bootstrap.min.css">

	<script src="<?= base_url('assets/themes/interior/js/'); ?>jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/themes/interior/js/'); ?>popper.min.js"></script>
	<script src="<?= base_url('assets/themes/interior/js/'); ?>bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="<?= base_url('assets/si/'); ?>css/templatemo-style.css" rel="stylesheet" />
	<link rel="icon" href="<?php echo base_url('assets/uploads/sites/Logo.png'); ?>">
</head>

<body> 

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/si/'); ?>img/bgjokk.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="<?= base_url('assets/si/'); ?>img/BI.png" alt="Logo" class="tm-site-logo" style="width: 15rem;"/>
						</div>

						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="<?= base_url('index.php/index/'); ?>" class="tm-nav-link" style="color: #00E4FF; text-decoration: none;">Home</a></li>
								<li class="tm-nav-li"><a href="#galery" class="tm-nav-link" style="color: #00E4FF; text-decoration: none;">Galery</a></li>
								<li class="tm-nav-li"><a href="<?= base_url('index.php/home/'); ?>" class="tm-nav-link" style="color: #00E4FF; text-decoration: none;">Belanja</a></li>
								<li class="tm-nav-li"><a href="<?php echo site_url('pages/about'); ?>" class="tm-nav-link" style="color: #00E4FF; text-decoration: none;">About</a></li>
								<li class="tm-nav-li"><a href="<?php echo site_url('pages/contact'); ?>" class="tm-nav-link" style="color: #00E4FF; text-decoration: none;">Kontak</a></li>
								<li class="tm-nav-li dropdown">
									<a class="tm-nav-link" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #00E4FF; text-decoration: none;">Akun</a>
									<div class="dropdown-menu" aria-labelledby="dropdown05">
										<?php if ( is_login() && is_customer()) : ?>
										<a class="dropdown-item" href="<?php echo site_url('customer'); ?>">Akun saya</a>
										<a class="dropdown-item" href="<?php echo site_url('customer/orders'); ?>">Order</a>
										<div class="divider"></div>
										<a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
										<?php elseif ( is_login() && is_admin()) : ?>
										<a class="dropdown-item" href="<?php echo site_url('admin'); ?>">Dasbor</a>
										<div class="divider"></div>
										<a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
										<?php else : ?>
											<a class="dropdown-item" href="<?php echo site_url('auth/login'); ?>">Login</a>
											<a class="dropdown-item" href="<?php echo site_url('auth/register'); ?>">Daftar</a>
										<?php endif; ?>
									</div>
								</li>

							</ul>

						</nav>	


					</div>
				</div>
			</div>
		</div>

