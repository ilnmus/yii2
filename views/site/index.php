
<?php

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<?php

use kv4nt\owlcarousel\OwlCarouselWidget;

OwlCarouselWidget::begin([
    'container' => 'div',
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class'
    ],
    'pluginOptions'    => [
        'items'             => 1,
        'loop'              => true,
        'itemsDesktop'      => [1199, 3],
        'itemsDesktopSmall' => [979, 3],
        'stagePadding' => 100,
        'autoplay' => true,
        'autoplayTimoute' => 1000,
        'smartSpeed' => 1000,
        'nav' => true,
        'navText' => false,
        'responsive' => [
          0 => [
            'items' => 1,
            'stagePadding' => 50
          ],
          1300 => [
            'stagePadding' => 100,
          ],
          1700 => [
           'stagePadding' => 300
         ],
         2198 => [
           'stagePadding' => 600
         ]
        ]
    ]
]);
?>
  <div class="owl-item" >
    <img class="slide_image" src="../web/pic/germany3.jpg" alt="Image 1">
    <h1 class="countries">Germany</h1>
  </div>
  <div class="owl-item">
    <img class="slide_image" src="../web/pic/finland1.jpg" alt="Image 2">
    <h1 class="countries">Finland</h1>
  </div>
  <div class="owl-item">
    <img class="slide_image" src="../web/pic/italy1.jpg" alt="Image 3">
    <h1 class="countries">Italy</h1>
  </div>
  <div class="owl-item">
    <img class="slide_image" src="../web/pic/spain1.jpg" alt="Image 4">
    <h1 class="countries">Spain</h1>
  </div>

<?php OwlCarouselWidget::end(); ?>


<div class="site-index">
  <div class="body-content">
      <div class="container">

        <div class="row">
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
              <img class="img-circle" src="../web/pic/5person.png" alt="">
              <div class="caption">
                <h3>Michael Petrov</h3>
                <p> Technical manager
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
            <img class="img-circle" src="../web/pic/2person.png" alt="">
              <div class="caption">
                <h3>Nikoaly Sergeev </h3>
                <p>General manager</p>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
              <img class="img-circle" src="../web/pic/3person.png" alt="">
              <div class="caption">
                <h3>Andrei Durov</h3>
                <p>Traveler</p>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
              <img class="img-circle" src="../web/pic/4person.png" alt="">
              <div class="caption">
                <h3>Darya Sokolova</h3>
                <p>Sales manager</p>
              </div>
            </div>
          </div>
        </div>

        <div class="jumbotron plane_content">
            <h1 class="plane_header">Let's go for travel!</h1>
            <p class=>We have you covered when it comes to value
               travel and the cheapest flights Browse our options to get the
               best deals on airline tickets, no matter where you’re headed.</p>
            <p class="plane_more"><a href="#">Learn more</a></p>
        </div>

        <div class="row">
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
              <img class="img hotel" src="../web/pic/ph.jpg" alt="">
              <div class="caption">
                <h3>Panorama hotel</h3>
              </div>
            </div>

          </div>
          <div class="col-xs-8 col-md-6">
            <div class="thumbnail">
            <img class="img main_hotel" src="../web/pic/hc.png" alt="">
            <div class="caption" >
              <h3>Cardoso hotel</h3>
            </div>
          </div>
          </div>
          <div class="col-xs-4 col-md-3">
            <div class="thumbnail">
              <img class="img hotel" src="../web/pic/ch.jpg" alt="">
              <div class="caption">
                  <h3>Caravella hotel</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<style>
.slide_image {
  width: 100%;
  opacity: .5;
  background-color: black;
}

.owl-nav {
  position: absolute;
  width: 100%;
  top: 50%;
  height: auto;
  color: white;
}

.owl-prev {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAfCAYAAADupU20AAAAoElEQVQ4T6XUuw2AMAxFUTIWEmuwGktQUdIzGHYRlK/t90CKRHMPkZCdFv7ZJF0T2Wt8ytkZ4IsFeFCgivX2CNDFCDCMo8A0jgBm7AFubAGheAaE4xEAxS0AxyVAxRmg4wxc8nLLOZjJ1Fn4fQP9MI2U00gh7TjDyGgfQMhsoYQRayOFEG+luYgHuL84AphIFJgiCDBEUKBDGKBCWCAj6wuqmjmCScdd/QAAAABJRU5ErkJggg==) no-repeat;
  width: 16px;
  height: 31px;
  position: absolute;
  left: 20px;
}

.owl-next {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAfCAYAAADupU20AAAAn0lEQVQ4T7XVwRGAIAwEQOjLvxXYhH+rsg1nbMvw0AEJJHciM/dkow8uMYSwSU7JIYFPlBuTZJcsDJKAdGjkBmgkByjkDcCIBkBIC3AjPcCFWICJeIAu4gWaCAKoCApUCAMUCAskZJXMLPC8XgYonj4KVL2BAGrpeIFmY3mAbt1ZgNmVv/WBOfleIMM70T1Z+wL4ckKGbCZqcv4Ln7bzBd6XO0k8LxCWAAAAAElFTkSuQmCC);
  width: 16px;
  height: 31px;
  position: absolute;
  right: 20px;
}

.countries {
	position: absolute;
  right: 9%;
  top: 75%;
  text-align: right;
	width: 100%;
  color: #4f545b;
  font-weight: bold;
}

.owl-item {
  position: relative;
}

.row {
  margin-top: 2.5%;
  margin-bottom: 2.5%
}

.thumbnail {
  border: none;
}
.jumbotron {
  background-color: #eee;
}
.plane_content {
  text-align: left;
}
.plane_header {
  margin-bottom: 3%
}
.plane_more {
  text-align: right;
}

.img-circle {
  background-color: #eee;
}
.caption {
  text-align: center;
}

.caption_right {
  text-align: right;
}

.caption_left {
  text-align: left;
}

.hotel {
  opacity: .5;
  border-radius: 50%;
}
.main_hotel {
  opacity: .5;
  border-radius: 3%;
}
</style>
