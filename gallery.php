<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="icon" type="image/png" href="img/milons_icon.png">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <title>Борцовский клуб "Милонс"</title>
</head>

<body>
  <div class="wrapper">

  <?php include "blocks/header.php"; ?>

    <main>
        <!-- <div class="gallery">
            <div class="gallery_content">
              <div><img src="img/gallery/BRENT_METCALF.jpg" alt="">Брент Меткалф</div>
              <div><img src="img/gallery/Pin-1024x683.jpg" alt="">Пацики рубятся</div>
              <div><img src="img/gallery/wreslte_1024x1024.jpg" alt="">Захват жопой</div>
              <div><img src="img/gallery/c4-19-of-24.jpg" alt="">Сел, насрал и победил</div>
              <div><img src="img/gallery/images.jpg" alt="">Мне нужны ваши Яши</div>
            </div>
            <div class="gallery_content_sml">
              <div class="thumb"><img src="img/gallery/sml_BRENT_METCALF.jpg" alt=""></div>
              <div class="thumb"><img src="img/gallery/sml_Pin-1024x683.jpg" alt=""></div>
              <div class="thumb"><img src="img/gallery/sml_wreslte_1024x1024.jpg" alt=""></div>
              <div class="thumb"><img src="img/gallery/sml_c4-19-of-24.jpg" alt=""></div>
              <div class="thumb"><img src="img/gallery/sml_images.jpg" alt=""></div>
            </div>
          </div> -->
      <div class="gallery">
        <div class="gallery_content">
          <div><img src="img/gallery/DSC_8444.jpg" alt=""></div>
          <div><img src="img/gallery/DSC06643.jpg" alt=""></div>
          <div><img src="img/gallery/Lanzatella_action.jpg" alt=""></div>
          <div><img src="img/gallery/SergioMendezSM001.jpg" alt=""></div>
          <div><img src="img/gallery/Shan_Ruhnke.jpg" alt=""></div>
          <div><img src="img/gallery/wrestling-3.jpg" alt=""></div>
          <div><img src="img/gallery/wrestling-shoes-2.jpg" alt=""></div>
        </div>
        <div class="gallery_content_sml">
        <div  class="thumb"><img src="img/gallery/sml/sml_DSC_8444.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_DSC06643.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_Lanzatella_action.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_SergioMendezSM001.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_Shan_Ruhnke.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_wrestling-3.jpg" alt=""></div>
          <div class="thumb"><img src="img/gallery/sml/sml_wrestling-shoes-2.jpg" alt=""></div>
        </div>
      </div>
    </main>

    <?php include "blocks/footer.php"; ?>

  </div>
  <script src="js/script.js"></script>
  <script src="js/pure-swipe.min.js"></script>
  <script type="text/javascript" src="js/slick.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.gallery_content').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      asNavFor: '.gallery_content_sml',
      swipeToSlide: true,
      arrows: true
    });
    $('.gallery_content_sml').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.gallery_content',
      centerMode: true,
      focusOnSelect: true,
      arrows: false,
      dots: true
    });
    });
  </script>
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        $('.gallery_content').slick({
          dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
      });
      // $('.gallery_content_sml').slick({
      //   slidesToShow: 3,
      //   slidesToScroll: 1,
      //   asNavFor: '.gallery_content',
      //   centerMode: true,
      //   focusOnSelect: true,
      //   arrows: false
      // });
      });
    </script> -->
</body>

</html>
