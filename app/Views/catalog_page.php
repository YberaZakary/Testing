<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>The Bluey Shop - Catalog</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<section>
  <div class="uk-background-cover" data-src="<?= base_url('assets/images/Markets.jpg')?>" style="object-fit: contain; padding-bottom: 10%;" uk-img>
    <div style="padding-block: 50px; max-width: 60%; margin: auto;">
      <h1 style="font-family: DynaPuff; font-size: 90px; font-weight: bold; color: rgb(210,235,255); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-block: 10px;">Browse Our Catalog</h1>
      <button class="zoom genbutton mt-3" onclick="window.location.href='<?= base_url('/'); ?>'" style="color: rgb(47, 62, 70); text-decoration: none;">Go Back</button>
      <div uk-filter="target: .js-filter">
        <ul class="uk-subnav uk-subnav-pill">
              <li class="uk-active" uk-filter-control><a href="#">All</a></li>
              <li uk-filter-control="[data-color='white']"><a href="#">White</a></li>
              <li uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
              <li uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
        </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/BABBingo.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-dark uk-position-bottom">
              <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BADanceMode.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BABMKenzie.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li><li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFBeachDay.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFFishing.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BABMuffin.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BASleepyTime.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BAPajamas.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFChefs.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="black">
          <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFFamily.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BAFrlife.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFHammerbarn.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/BABChattermax.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-dark uk-position-bottom">
              <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BATrioSpring.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BABBluey.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BABestDay.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="blue">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BAKeepyUppy.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFseason4.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/BABGrannyJanet.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-dark uk-position-bottom">
              <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </li>
          <li data-color="white">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/BABGrannyRita.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-dark uk-position-bottom">
              <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </li>
          <li data-color="black">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/BFQueens.png')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-dark uk-position-bottom">
                <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?= $this->endSection('content') ?>



