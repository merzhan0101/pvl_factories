<!doctype html>
<html lang="en">
  <head>
    <?php 
      require_once "php/functions.php";
      $vakant=getOneVakant($_GET["id"]);
      $vakants=getVakantsLimit(5);
      $title=$vakant["dolzhnostt"];
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
  
  <div class="site-wrap">

    <?php require_once "blocks/header.php";?>
    
    <div class="site-section-cover overlay inner-page bg-light" style="background-image: url('images/<?=$vakant['factory_img']?>')" data-aos="fade">
      
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <span class="d-block mb-3 text-white"  data-aos="fade-up"><?=$vakant['date']?></span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?=$vakant['dolzhnostt']?></h1>
                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100"><?=$vakant['zarplata']?></h2>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="site-section pb-0" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto blog-content">
            <?=$vakant['text']?>
          </div>
          
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <div class="categories">
                <h3>Контактная информация компании <?=$vakant['factory_name']?></h3>
                <li><p>Адрес:</p> <?=$vakant['factory_adress']?></li>
                <li><p>Телефон:</p> <?=$vakant['factory_tels']?></li>
                <li><p>Почта:</p> <?=$vakant['factory_email']?></li>
                <li><p>Веб-сайт:</p> <a href="<?=$vakant['factory_web_site']?>" target="_blank"><?=$vakant['factory_web_site']?></a></li>
              </div>
            </div>
            
            <div class="sidebar-box">
              <?=$vakant['factory_url_map']?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <div >
              <div class="comment-form-wrap">
                <h3 class="mb-5">Написать на почту предприятия 	&laquo;<?=$vakant['factory_name']?>&raquo;</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="inp_name">Ваше Имя *</label>
                    <input type="text" class="form-control" id="inp_name">
                  </div>
                  <div class="form-group">
                    <label for="inp_email">Ваш Email *</label>
                    <input type="email" class="form-control" id="inp_email">
                    <input type="email" class="d-none" id="inp_email_factory" value="<?="merzhankuralay@gmail.com"//$vakant['factory_email']?>">
                  </div>
                  <div class="form-group">
                    <label for="inp_phone">номер телефона</label>
                    <input type="text" class="form-control" id="inp_phone">
                  </div>

                  <div class="form-group">
                    <label for="inp_message">Ваше сообщение</label>
                    <textarea name="" id="inp_message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="button" value="Отправить" class="btn btn-primary btn-md text-white" id="btn_email_faktory">
                  </div>
                  <p class="text-danger" id="p_error"></p>
                  <p class="text-success" id="p_success"></p>
                </form>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 sidebar">
            <div class="sidebar-box">
              <div class="block-heading-1">
                <span>Вакансии</span>
                <h2>Еще Вакансии</h2>
              </div>
              <ul class="list-unstyled">
                <?php for($i=0; $i<count($vakants); $i++){?>
                <br>
                <li class="mb-4">
                  <h2 class="h4">
                    <a href="press-single.php?id=<?=$vakants[$i]['id']?>"><?=$vakants[$i]['dolzhnostt']?></a>
                    <span class="ml-2 text-warning"><?=$vakants[$i]['zarplata']?></span>
                  </h2>
                  <span class="d-block text-secondary">
                    <span><?=$vakants[$i]['date']?></span>
                    <span class="ml-2"><?=$vakants[$i]['factory_name']?></span>
                  </span>
                  <p><?=mb_strimwidth($vakants[$i]['text'], 0, 300, "...")?></p>
                </li>
                <?php } ?>
                <a href="/#press-section" class="btn btn-warning text-white">Еще...</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php require_once "blocks/footer.php";?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  <script src="js/send_email_factory.js"></script>
  
  </body>
</html>
