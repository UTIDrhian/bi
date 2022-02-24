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

<section class="ftco-section testimony-section" style="margin-top: -5%;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3" >
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Sistem Informasi Penjualan Desain Interior Mobil</span>
        <h2 class="mb-4" >Galeri & Bahan</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="tm-paging-links" id="galery">
          <nav>
            <ul style="padding-left: 1%; margin-top:-6%;">
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

          </div> <!-- gallery page 1 -->

          <!-- gallery page 2 -->
          <div id="tm-gallery-page-bahan" class="tm-gallery-page hidden">

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

<script>
  $(document).ready(function(){
      // Handle click on paging links
      $('.tm-paging-link').click(function(e){
        e.preventDefault();
        
        var page = $(this).text().toLowerCase();
        $('.tm-gallery-page').addClass('hidden');
        $('#tm-gallery-page-' + page).removeClass('hidden');
        $('.tm-paging-link').removeClass('active');
        $(this).addClass("active");
      });
    });
  </script>

