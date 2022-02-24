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
foreach ($galery as $b) {
  ?>
  <section class="ftco-section testimony-section" style="margin-top: -5%;">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Deskripsi <?php echo $b->kategori; ?></span>
          <h2 class="mb-4"><?php echo $b->nama; ?></h2>
        </div>
        <div class="col-md-12 text-center">

          <img src="<?php echo base_url('assets/uploads/informasi/galery/'. $b->gambar); ?>" alt="Image" class="img-fluid text-center mb-3 mt-3" style="width: 50rem;">
          <br>
          <figcaption>
            <p class="tm-gallery-description" style="text-align: justify; text-align: center; font-size: 1.2em;">
              <?php echo $b->deskripsi; ?>
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
        <h2 class="mb-4">Bahan Lainnya</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">

        <!-- Gallery -->
        <div class="row tm-gallery">
          <div id="tm-gallery-page-bahan" class="tm-gallery-page">

            <?php 
            $bahan = $this->db->query("SELECT * FROM informasi WHERE kategori = 'Bahan'")->result();
            foreach ($bahan as $b) {
              ?>
              <a href="<?php echo site_url('pages/bahan_show/').$b->id; ?>" style="text-decoration: none;">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                  <figure class="galeri-desain">
                    <img src="<?php echo base_url('assets/uploads/informasi/galery/'. $b->gambar); ?>" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption style="padding: 0 15px;">
                      <h4 class="tm-gallery-title" style="text-align: center;"><?php echo $b->nama; ?></h4>
                      <p class="tm-gallery-description" style="text-align: justify;"><?php echo mb_strimwidth("$b->deskripsi", 0, 150, "..."); ?></p>
                    </figcaption>
                  </figure>
                </article>
              </a>

            <?php } ?>

          </div> <!-- gallery page 2 -->
        </div>
      </div>
    </div>
  </div>
</section>