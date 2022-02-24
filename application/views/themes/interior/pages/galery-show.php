<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="<?php echo get_theme_uri('css/templatemo-style.css'); ?>" rel="stylesheet" />

<?php 
$galery = $this->db->query("SELECT * FROM informasi WHERE id = '$id'")->result();
foreach ($galery as $g) {
  ?>
  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Deskripsi <?php echo $g->kategori; ?></span>
          <h2 class="mb-4"><?php echo $g->nama; ?></h2>
        </div>
        <div class="col-md-12 text-center">

          <img src="<?php echo base_url('assets/uploads/informasi/galery/'. $g->gambar); ?>" alt="Image" class="img-fluid text-center mb-3 mt-3" style="width: 50rem;">
          <br>
          <figcaption>
            <p class="tm-gallery-description" style="text-align: justify; font-size: 1.2em;">
              <?php echo $g->deskripsi; ?>
            </p>
          </figcaption>

        </div>
      </div>
    </div>
  </section>
  <?php } ?>