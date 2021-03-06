<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
  .tm-gallery-description{
    color: #000;
  }
  .hidden {
    display: none !important;
  }
</style>

<link href="<?php echo get_theme_uri('css/templatemo-style.css'); ?>" rel="stylesheet" />

<?php 
$galery = $this->db->query("SELECT * FROM informasi WHERE id = '$id'")->result();
foreach ($galery as $g) {
  ?>
  <section class="ftco-section testimony-section" style="margin-top: -5%;">
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
            <p class="tm-gallery-description" style="text-align: justify; text-align: center; font-size: 1.2em;">
              <?php echo $g->deskripsi; ?>
            </p>
          </figcaption>

        </div>
      </div>
    </div>
  </section>
  <?php } ?>

   <section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Galery Lainnya</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">

        <!-- Gallery -->
        <div class="row tm-gallery">
          <!-- gallery page 1 -->
          <div id="tm-gallery-page-galery" class="tm-gallery-page">

            <?php 
            $galery = $this->db->query("SELECT * FROM informasi WHERE kategori = 'Galery'")->result();
            foreach ($galery as $g) {
              ?>

              <a href="<?php echo site_url('pages/galery_show/').$g->id; ?>" style="text-decoration: none;">

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

            <?php } ?>

          </div> 
        </div>
      </div>
    </div>
  </div>
</section>