<!doctype html>
<html lang="en">
  <head>
    <?php 
      require_once "php/functions.php";
      $factories=getAllFactories();
      $vakants=getAllVakants();
      $title="Merzhan &mdash; Промышленные предприятия Павлодарской области";
    ?>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@merzhan.com</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">+7 (777) 777 7777</span></a>
            

            <div class="float-right">

            <a href="#" class="text-white"><span class="mr-2 text-white icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="#" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="/" class="text-black"><span class="text-primary">Merzhan</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Главная</a></li>
                <li><a href="#blog-section" class="nav-link">Предприятия</a></li>
                <li><a href="#about-section" class="nav-link">В области</a></li>
                <li><a href="#services-section" class="nav-link">Информация</a></li>
              


                <li><a href="#press-section" class="nav-link">Вакансии</a></li>
                <li><a href="#contact-section" class="nav-link">Написать</a></li>
              </ul>
              </nav>
          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    <div class="owl-carousel slide-one-item">
      

      

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero6.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">Найди работу мечты</h1>  
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Мы предлагаем для вас лучшие предприятия для работы</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#blog-section" class="btn btn-outline-white border-w-2 btn-md">Найти</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_4.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Начни свою карееру в лучшей предприятии</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Хорошая карьера делается в больших компаниях – это непреложный факт</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#blog-section" class="btn btn-outline-white border-w-2 btn-md">Найти</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_6.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Зарабатывай в Павлодарской области</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Промышленность — одна из самых высокооплачиваемых отраслей в Казахстане</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#blog-section" class="btn btn-outline-white border-w-2 btn-md">Найти</a></p>
            </div>
          </div>
        </div>

      </div>
      

    </div>

    

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <span>Промышленные предприятия в Павлодарской области</span>
              <h2>Промышленные предприятия</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php for($i=0; $i<count($factories); $i++){?>
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div>
              <a href="single.php?id=<?=$factories[$i]['id']?>" class="mb-4 d-block"><img src="images/<?=$factories[$i]['img']?>" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.php?id=<?=$factories[$i]['id']?>"><?=$factories[$i]['name']?></a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2"><?=$factories[$i]['date']?></span> Добавил Админ</p>
              <p><?=$factories[$i]['intro_text']?></p>
              <p><a href="single.php?id=<?=$factories[$i]['id']?>">Перейти...</a></p>
            </div>
          </div>
          <?php }?>

        </div>
      </div>
    </div>

    <div class="site-section bg-dark" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="http://www.bogatyr.kz/media/header/video.mp4" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h3>В области: </h3>
            <div class="row">
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                  <span class="number"><span data-number="1000">0</span>+</span>
                  <span class="caption">промышленных предприятий</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                  <span class="number"><span data-number="7.3">0</span>%</span>
                  <span class="caption">Здесь сосредоточено 7,3 % всего промышленного производства страны</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                  <span class="number"><span data-number="61.1">0</span>%</span>
                  <span class="caption">добываемого угля</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                  <span class="number"><span data-number="44.3">0</span>%</span>
                  <span class="caption">вырабатываемой электроэнергии</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="41.7">0</span>%</span>
                  <span class="caption">производства бензина</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="100">0</span>%</span>
                  <span class="caption">республиканского производства глинозема и алюминия необработанного</span>
                </div>
              </div>
              <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                  <span class="number"><span data-number="76.1">0</span>%</span>
                  <span class="caption">производства ферросплавов</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422" style="background-image: url('images/img_1.jpg');" data-aos="fade-right" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">Кем можно работать на предприятиях</h2>
              <p>Профессии в промышленности могут быть самыми разными – всё зависит от отрасли: каждая имеет перечень собственных специальностей.</p>
              <p>Если перейти к отраслевым особенностям, то можно назвать такие специальности:</p>
              <ul class="ul-check primary list-unstyled mt-5">
                <li>тяжелая промышленность: доменщик, штамповщик, литейщик;</li>
                <li>металлообработка и машиностроение: конструктор, токарь, фрезеровщик, сборщик, электромонтер, механик, наладчик;</li>
                <li>добыча полезных ископаемых: шахтер, геодезист, проходчик, взрывник, маркшейдер;</li>
                <li>строительство: плиточник-облицовщик, сантехник, каменщик, штукатур, маляр, арматурщик, крановщик, сварщик, экскаваторщик;</li>
                <li>т.д.;</li>
              </ul>

              
            </div>

          </div>
        </div>      
      </div>


      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/img_2.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>

            

            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">Где получать образование</h2>
              <p>Чтобы занять руководящий пост или войти в число ИТР (инженерно-технических работников), необходимо иметь высшее образование. Его можно получить в профильных технических вузах или в классических университетах с широким перечнем специальностей. Важно правильно подобрать направление обучения, поскольку технологии постоянно меняются, некоторые профессии устаревают, другие же, наоборот, остаются перспективными.</p>

              <p>Рабочие специальности получают в основном в системе профессионально-технического образования, включающей в себя колледжи и техникумы.</p>


            </div>

          </div>
        </div>      
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <h3>Полезная информация</h3>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-mining"></span>
              </div>
              <h3 class="mb-3">Добыча полезных ископаемых</h3>
              это процесс извлечения горных пород или минералов из земли путем их извлечения из карьера или добычи.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-gold-ingots"></span>
              </div>
              <h3 class="mb-3">Добыча золота</h3>
              процесс извлечения золота из естественных источников. Среднее содержание золота в литосфере составляет 4,3⋅10−7% по массе.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-wagon"></span>
              </div>
              <h3 class="mb-3">Грунтовоз</h3>
              предназначенные для транспортировки грунта, извлекаемого со дна водоема земснарядами.
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-refinery"></span>
              </div>
              <h3 class="mb-3">Золотодобывающая промышленность</h3>
              отрасль горной промышленности, занятая добычей золота из коренных и россыпных месторождений.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-blacksmith"></span>
              </div>
              <h3 class="mb-3">Кузнец с наковальней</h3>
              это специалист, который обязан знать особенности конструкции, а также функционирования горна и печи.
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block__35630">
              <div class="icon mb-3">
                <span class="flaticon-crucible"></span>
              </div>
              <h3 class="mb-3">Тигель для расплава Золота</h3>
              Это ёмкость для нагрева, высушивания, сжигания, обжига или плавления различных материалов.
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Вакансии</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <?php for($i=0; $i<count($vakants); $i++){?>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <h2 class="h4">
                  <a href="press-single.php?id=<?=$vakants[$i]['id']?>">
                    <?=$vakants[$i]['dolzhnostt']?>
                    <span class="ml-2 text-primary"><?=$vakants[$i]['zarplata']?></span>
                  </a>
                </h2>
                
                <span class="d-block text-muted mb-3">
                  <span><?=$vakants[$i]['date']?></span>
                  <span clasd="ml-3"><?=$vakants[$i]['factory_name']?></span>
                </span>
                <p><?=mb_strimwidth($vakants[$i]['text'], 0, 300, "...")?></p>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span>обратная связь</span>
              <h2>Написать нам</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Ваше ФИО" id="inp_name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Ваш телефон" id="inp_phone">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Ваш Email" id="inp_email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" class="form-control" placeholder="Ваше сообщения для нас." cols="30" rows="10" id="inp_message"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="button" class="btn btn-block btn-primary text-white py-3 px-5" value="Отправить собщение" id="btn_feedback">
                </div>
              </div>
              <p class="text-danger" id="p_error"></p>
              <p class="text-success" id="p_success"></p>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black">Нужно узнать больше о деталях? Связаться c нами по почте</h2>
            <p>Если у вас возкникли какие-нибудь вопросы касательно трудоустрорйства в предпреятих Павлодарской области, то вы можете отправить на ваше сообщение, заполнив формучку.</p>
          </div>
        </div>
      </div>
    </div>


    <?php require_once 'blocks/footer.php'?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  <script src="js/feedback.js"></script>  
  </body>
</html>