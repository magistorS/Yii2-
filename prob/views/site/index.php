<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '12345';
?>
<div class="site-index">

    <div class="jumbotron">
        <p id="counter">Счётчик обновится в ближайшие 3 секунды</p>
      
    </div>

    <div class="body-content">

        <div class="row">
           

        </div>

    </div>
</div>
<script>
var i = 0;
function hover(el){
    el.src = el.dataset.before;
}

function back(el){
    el.src = el.dataset.after;
}

function updateCounter(){
    $.ajax({
        type: 'GET',
        url: '<?= Url::toRoute('/site/counter') ?>',
        dataType: 'text',
        success: function (response){
            if(i != response){
                
                var a = new Audio('./1.mp3');
                a.play();
                i = response;
            }
            $('#counter').html('мы показываем сейчас ' + response + ' фильма');
        }
    });
}
setInterval(updateCounter, 3000);
</script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
 
  

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>добропожаловать в кинотеатр</h6>
                  <h4><em>посмотрите сейчас</em></h4>
                  <div class="main-button">
                    <a href="lk/create">заказать сейчас</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>самый популярный</em> фильм сейчас</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-01.jpg" alt="">
                      <h4>turbo<br><span>seychas</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-02.jpg" alt="">
                      <h4>batlstar<br><span>Battle</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-03.jpg" alt="">
                      <h4>какое то еще<br><span>романтика</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-04.jpg" alt="">
                      <h4>что то еще<br><span>Legendary</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">
                          <div class="item inner-item">
                            <img src="assets/images/popular-05.jpg" alt="">
                            <h4>Mini <br><span>легендарное</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="item">
                            <img src="assets/images/popular-06.jpg" alt="">
                            <h4>летит<br><span>Matrix</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-07.jpg" alt="">
                      <h4>Область тьмы<br><span>Max 3D</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-08.jpg" alt="">
                      <h4>Люцифер<br><span>Легендарное</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="lk/create">Заказать билет</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Смотреть сейчас</em> заказ</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>K.wbath</h4><span>зал 2</span></li>
                  <li><h4>Дата</h4><span>24/08/2030</span></li>
                  <li><h4>Уже посмотрели</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Заказать</h4><span>заказать</span></li>
                  <li><div class="main-border-button border-no-active"><a href="lk/create">Заказать</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>форма области</h4><span>сейчас</span></li>
                  <li><h4>дата запуска</h4><span>22/06/2036</span></li>
                  <li><h4>уже посмотрели</h4><span>740 H 52 Mins</span></li>
                  <li><h4>заказать</h4><span>сейчас</span></li>
                  <li><div class="main-border-button"><a href="lk/create">заказть</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>реальные изменения</h4><span>смотреь</span></li>
                  <li><h4>дата</h4><span>21/04/2036</span></li>
                  <li><h4>уже посмотрели </h4><span>892 H 14 Mins</span></li>
                  <li><h4>смотреть</h4><span>сейчас</span></li>
                  <li><div class="main-border-button border-no-active"><a href="lk/create">закзать</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="lk/index">ваши заказы</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php foreach($problems as $problem) :?>
                   
                    <div class="col-lg-3">
                        <h2> <?= $problem->text; ?></h2>

                        <p>.$problem->text.'</p>
                        

                    </div>
                    
                    <?php endforeach; ?>
                
                


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
