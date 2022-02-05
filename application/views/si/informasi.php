		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Sistem Informasi Penjualan Desain Interior Mobil</h2>
				 <p  class="col-12 text-center" style="color: #000;"> Interior Mobil dengan desain mewah & nyaman tentunya dapat menjadi idaman banyak orang. Bahkan setiap orang mampu memiliki standar yang berbeda satu sama lain yang berkaitan dengan kenyamanan dalam berkendara. Sebagian besar orang ada yang merasa nyaman dengan sebuah desain interior yang mewah bahkan ada juga yang telah nyaman dengan desain interior bawaan dari mobil tersebut.</p>
				<p class="col-12 text-center" style="color: #000;"> Salah satu bagian interior yang juga cukup sering menjadi salah satu perhatian ketika ingin memodifikasi mobil yaitu Jok Mobil. Bukan hanya karena ingin interior mobil terlihat mewah, tetapi juga agar jok mobil tidak mudah kotor dan jamuran pada saat ditumpahi air dan kotoran lainnya. Diharapkan pemasangan jok mobil bisa membuat interior mobil nampak lebih mewah dan menarik namun juga terhindar dari resiko kotoran dan jamur.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#galery" class="tm-paging-link active">Galery</a></li>
						<li class="tm-paging-item"><a href="#galery" class="tm-paging-link">Bahan</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery" id="galery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-galery" class="tm-gallery-page">

					<?php 
					$galery = $this->db->query("SELECT * FROM informasi WHERE kategori = 'Galery'")->result();
					foreach ($galery as $g) {
						?>

						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="<?php echo base_url('assets/uploads/informasi/galery/'. $g->gambar); ?>" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title"><?php echo $g->nama; ?></h4>
									<p class="tm-gallery-description"><?php echo $g->deskripsi; ?></p>
								</figcaption>
							</figure>
						</article>

					<?php } ?>

				</div> <!-- gallery page 1 -->

				<!-- gallery page 2 -->
				<div id="tm-gallery-page-bahan" class="tm-gallery-page hidden">

					<?php 
					$bahan = $this->db->query("SELECT * FROM informasi WHERE kategori = 'Bahan'")->result();
					foreach ($bahan as $b) {
						?>

						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="<?php echo base_url('assets/uploads/informasi/galery/'. $b->gambar); ?>" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title"><?php echo $b->nama; ?></h4>
									<p class="tm-gallery-description"><?php echo $b->deskripsi; ?></p>
								</figcaption>
							</figure>
						</article>

					<?php } ?>

				</div> <!-- gallery page 2 -->
			</div>
		</main>