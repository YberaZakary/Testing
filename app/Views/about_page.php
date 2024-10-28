<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>About</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


<section>
  <div class="uk-background-cover d-flex flex-column justify-content-start align-items-start" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill; padding-left: 20px; padding-right: 20px;" uk-img>
    <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-left: 16%; padding-top: 20px;">About</h1>

  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid style="margin: auto;">
      <div class="uk-card-media-left uk-cover-container">
        <iframe src="https://www.youtube-nocookie.com/embed/ZrR9ML0sxEE?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="100%" height="100%" allowfullscreen uk-responsive uk-video="automute: true" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
          <canvas width="700" height="450"></canvas>
    </div>
      <div>
        <div class="uk-card-body">
          <h3 class="uk-card-title" style="font-family: DynaPuff; color:rgb(43, 44, 65); text-align: justify; "><img class="card-img" src="<?= base_url('assets/images/BingoToy.png')?>" alt="Card image cap" style="width: 10%; height: 10%; object-fit: cover;">We Offer High quality products!</h3>
          <p style="font-family: DynaPuff; color:rgb(43, 44, 65); text-align: justify; ">We specialize in creating top-tier Bluey products that bring smiles to children and families alike. Our products are crafted with utmost care, using only the finest materials and advanced techniques. This ensures their safety, durability, and ability to withstand countless hours of imaginative play.
          Beyond entertainment, our products are designed to stimulate learning and development, making playtime a valuable experience.
          We are committed to providing exceptional value and service to our customers.
          Our diverse range of products caters to various preferences and occasions, making it easy to find the perfect Bluey gift.
          We believe in going the extra mile, offering free shipping on orders exceeding a certain amount to enhance your shopping experience.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: push" style="padding: 20px; width: 50%; height: 50%; margin: auto;">

     <div class="uk-slideshow-items">
        <div>
        <img class="card-img" src="<?= base_url('assets/images/RoomBluey.jpg')?>" alt="Card image cap">
            <div class="uk-position-center uk-position-small uk-text-center">
                <img class="card-img" src="<?= base_url('assets/images/BingoToy.png')?>" alt="Card image cap" style="width: 10%; height: auto;">
                <h2 uk-slideshow-parallax="x: 100,-100" style="background-color: rgba(0, 0, 0, 0.5); padding: 10px; font-family: DynaPuff;">Mission  
                    <p uk-slideshow-parallax="x: 200,-200" style="padding: 10px; color: white; font-family: DynaPuff; font-size: 14px;">To design and produce exceptional Bluey merchandise that reflects the show's values and inspires creativity, imagination, and family bonding.</p>
                </h2>
            </div>
        </div>

        <div>
        <img class="card-img" src="<?= base_url('assets/images/Vision.png')?>" alt="Card image cap">
            <div class="uk-position-center uk-position-small uk-text-center">
            <img class="card-img" src="<?= base_url('assets/images/BlueyToyHold.png')?>" alt="Card image cap" style="width: 25%; height: auto;">
            <h2 uk-slideshow-parallax="x: 100,-100" style="background-color: rgba(0, 0, 0, 0.5); padding: 10px; font-family: DynaPuff;">Vision
              <p uk-slideshow-parallax="x: 200,-200" style="padding: 10px; color: white; font-family: DynaPuff; font-size: 14px;">Create high-quality Bluey merchandise that captures the show's warmth, humor, and Australian charm, bringing joy and imaginative play to fans of all ages.</p>
            </h2>
            
            </div>
        </div>

        <div>
        <img class="card-img" src="<?= base_url('assets/images/Motto.jpg')?>" alt="Card image cap">
            <div class="uk-position-center uk-position-small uk-text-center">
            <img class="card-img" src="<?= base_url('assets/images/MuffinTu.png')?>" alt="Card image cap" style="width: 25%; height: auto;">
            <h2 uk-slideshow-parallax="x: 100,-100" style="background-color: rgba(0, 0, 0, 0.5); padding: 10px; font-family: DynaPuff;">Motto
            <p uk-slideshow-parallax="x: 200,-200" style="padding: 10px; color: white; font-family: DynaPuff; font-size: 14px;">"Quality Craftsmanship, Endless Fun, and Bringing the Magic of Bluey to Life."</p>
            </h2>
            </div>
        </div>
    </div>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>

  </div>    
  
  </section>

  
  

  <?= $this->endSection('content') ?>