		<style type="text/css">
			.tm-gallery-item{
				height: 30rem;
			}
			.galeri-desain{
				height: 29rem;
			}
			.galeri-desain:hover{
				box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
			}
		</style>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Sistem Informasi Penjualan Desain Interior Mobil</h2>
				<p  class="col-12 text-center" style="color: #000;"> Interior Mobil dengan desain mewah & nyaman tentunya dapat menjadi idaman banyak orang. Bahkan setiap orang mampu memiliki standar yang berbeda satu sama lain yang berkaitan dengan kenyamanan dalam berkendara. Sebagian besar orang ada yang merasa nyaman dengan sebuah desain interior yang mewah bahkan ada juga yang telah nyaman dengan desain interior bawaan dari mobil tersebut.</p>
				<p class="col-12 text-center" style="color: #000;"> Salah satu bagian interior yang juga cukup sering menjadi salah satu perhatian ketika ingin memodifikasi mobil yaitu Jok Mobil. Bukan hanya karena ingin interior mobil terlihat mewah, tetapi juga agar jok mobil tidak mudah kotor dan jamuran pada saat ditumpahi air dan kotoran lainnya. Diharapkan pemasangan jok mobil bisa membuat interior mobil nampak lebih mewah dan menarik namun juga terhindar dari resiko kotoran dan jamur.</p>
			</header>
			
			<div class="tm-paging-links" id="galery">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#galery" class="tm-paging-link active" style="text-decoration: none;">Galery</a></li>
						<li class="tm-paging-item"><a href="#galery" class="tm-paging-link" style="text-decoration: none;">Bahan</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-galery" class="tm-gallery-page">

					<?php 
					$galery = $this->db->query("SELECT * FROM informasi WHERE kategori = 'Galery'")->result();
					foreach ($galery as $g) {
						?>

						<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $g->id; ?>" style="text-decoration: none;">

							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure class="galeri-desain">
									<img src="<?php echo base_url('assets/uploads/informasi/galery/'. $g->gambar); ?>" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption style="padding: 0 15px;">
										<h4 class="tm-gallery-title" style="text-align: center;"><?php echo $g->nama; ?></h4>
										<p class="tm-gallery-description" style="text-align: justify;"><?php echo mb_strimwidth("$g->deskripsi", 0, 150, "..."); ?></p>
									</figcaption>
								</figure>
							</article>

						</a>

						<div class="modal fade bd-example-modal-lg<?php echo $g->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><?php echo $g->nama; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body" style="padding: 0 15px;">
										<img src="<?php echo base_url('assets/uploads/informasi/galery/'. $g->gambar); ?>" alt="Image" class="img-fluid text-center mb-3 mt-3" style="width: 100%;">
										<figcaption>
											<p class="tm-gallery-description" style="text-align: justify; font-size: 1em;">
												<?php echo $g->deskripsi; ?>
											</p>
										</figcaption>
									</div>
								</div>
							</div>
						</div>

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