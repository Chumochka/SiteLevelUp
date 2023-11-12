<?
include('db/dbcon.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Главная</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" type="image/x-icon" href="image/logoicon.png">
    </head>
    <body>
        <header>
            <div class="headrow1 d-lg-block d-none">
                <div class="container">
                    <div class="row align-items-center py-2">
                        <div class="col-5">
                            <div class="header-footer-UpText">Где мы находимся:</div>
                            <a class="header-footer-DownText" href="#map">г. Новосибирск, поселок Садовый ,ул. Российская 15</a>
                        </div>
                        <div class="col-3">
                            <div class="header-footer-UpText">Телефон для заказов и вопросов:</div>
                            <a class="header-footer-DownText" href="tel:+79139170782">+7 (913) 917 07 82</a>
                        </div>
                        <div class="col-3">
                            <div class="header-footer-UpText">Почта для связи:</div>
                            <a class="header-footer-DownText" href='mailto:boss_level_up@bk.ru'>boss_level_up@bk.ru</a>
                        </div>
                        <div class="col-1 d-flex justify-content-between">
                            <a href="https://vk.com" target="_blank">
                                <img class="float-end" src="image/vkLogo.png">
                            </a>
                            <a href="https://en.wikipedia.org/wiki/Instagram" target="_blank">
                                <img class="float-end" src="image/instagramLogo.png">
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="headrow2">
                <div class="container">
                    <div class="row">
                        <div class="col-5 d-flex align-items-center d-lg-none d-block">
                            <nav class="navbar-mob navbar navbar-dark">
                                <div class="container-md">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                                        <div class="offcanvas-header">
                                            <img class="offcanvas-logo" src="image/logoicon.png">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <a class="nav-link mb-4" href="#">Объемные буквы</a>
                                            <a class="nav-link mb-4" href="#">Вывески</a>
                                            <a class="nav-link mb-4" href="#">Информационные стенды</a>
                                            <a class="nav-link mb-4" href="#">Световые короба (лайт-боксы)</a>
                                            <a class="nav-link mb-4" href="#">Pos-материалы</a>
                                            <a class="nav-link mb-4" href="#">Таблички</a>                      
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="container-head-company col-7 d-inline-flex">
                            <img class="img-fluid head-logo" src="image/logo.png">
                            <p class="head-company text-lg-center text-end">Рекламно- производственная компания</p> 
                        </div>
                        <div class="headQuestionsCol col-3 d-lg-block d-none">
                            <span id="headQuestion1">У вас возникли вопросы?</span><br>
                            <a id="headQuestion2" href="#form">Задать вопрос</a>
                        </div>
                        <div class="col-2 align-self-center d-lg-block d-none">
                            <form action="#form">
                                <button id="btnOrderCall" type="submit">Заказать звонок</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar-normal navbar d-lg-block d-none">
                <div class="container-md">
                    <a class="nav-link" href="#">Объемные буквы</a>
                    <a class="nav-link" href="#">Вывески</a>
                    <a class="nav-link" href="#">Информационные стенды</a>
                    <a class="nav-link" href="#">Световые короба (лайт-боксы)</a>
                    <a class="nav-link" href="#">Pos-материалы</a>
                    <a class="nav-link" href="#">Таблички</a>                      
                </div>
            </nav>
        </header>
        <div class="main">
            <div id="slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/banner1.png" class="imgbanner d-none d-md-block w-100">
                        <img src="image/banner1mob.png" class="imgbannermob d-block d-md-none w-100">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 text-start h-100 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="bannerHeadText col-6 col-lg-6 col-md-8">Согласуем, нарисуем, изготовим, доставим, смонтируем</div>
                                </div>
                                <div class="row d-md-block d-none">
                                    <form action="#form">
                                        <button type="submit" id="bannerButton1" class="bannerButton py-2 px-5">Сделать заказ</button>
                                    </form>
                                </div>
                            </div>            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner2.png" class="imgbanner d-none d-md-block w-100">
                        <img src="image/banner2mob.png" class="imgbannermob d-block d-md-none w-100">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 text-start h-100 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div id="bannerHeadText2" class="bannerHeadText col-6 col-lg-6 col-md-8">Действительно низкие и прозрачные цены</div>
                                </div>
                                <div class="row d-md-block d-none">
                                    <form action="#form">
                                        <button type="submit" id="bannerButton2" class="bannerButton py-2 px-5">Сделать заказ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner3.png" class="imgbanner d-none d-md-block w-100">
                        <img src="image/banner3mob.png" class="imgbannermob d-block d-md-none w-100">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 text-start h-100 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 col-lg-6 col-md-8 text-start">
                                        <div class="bannerHeadText">Всегда идем на встречу нашим клиентам!</div>
                                        <div class="bannerUnderheadText">*в том числе и ночной монтаж</div>
                                    </div>
                                </div>
                                <div class="row d-md-block d-none">
                                    <form action="#form">
                                        <button type="submit" id="bannerButton3" class="bannerButton py-2 px-5">Сделать заказ</button>
                                    </form>
                                </div>         
                            </div>       
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
            <div class="container">
                <div class="containerMain">
                    <div class="MainTitle">Почему именно мы?</div>
                    <div id="row-why" class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/like.png">
                                <div class="span-why">Качество от производителя -  из первых рук</div>
                            </div>
                        </div>
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/clock.png">
                                <div class="span-why">Оперативное выполнение заказов любой сложности</div>
                            </div>
                        </div>
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/support.png">
                                <div class="span-why">Бесплатная консультация по любому типу рекламных материалов</div>
                            </div>
                        </div>
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/project.png">
                                <div class="span-why">Бесплатный вызов замерщика</div>
                            </div>
                        </div>
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/warranty.png">
                                <div class="span-why">Гарантия на изделия и монтаж 2 года</div>
                            </div>
                        </div>
                        <div class="col h-100 mt-4">
                            <div class="col-why d-flex align-items-center">
                                <img class="img-why" src="image/discount.png">
                                <div class="span-why">Скидки постоянным клиентам до 30%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerMain">
                    <h3 id="title-services" class="MainTitle">Наши услуги</h3>
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card h-100">
                            <img src="image/card1.png" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Объемные буквы</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div class="card-footer">
                              <a class="card-link" href="#">Подробнее</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="image/card2.png" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Вывески</h5>
                              <p class="card-text">Что такое вывеска? Это визитная карточка компании, играющая большую роль в имидже и развитии предприятия. Главный элемент наружной рекламы, который работает даже в вечернее и ночное время суток, когда вы отдыхаете!</p>
                            </div>
                            <div class="card-footer">
                                <a class="card-link" href="#">Подробнее</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="image/card3.png" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">Информационные стенды</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-footer">
                                <a class="card-link" href="#">Подробнее</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                              <img src="image/card4.png" class="card-img-top">
                              <div class="card-body">
                                <h5 class="card-title">Световые короба (лайт-боксы)</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              </div>
                              <div class="card-footer">
                                <a class="card-link" href="#">Подробнее</a>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <img src="image/card5.png" class="card-img-top">
                              <div class="card-body">
                                <h5 class="card-title">Pos-материалы</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              </div>
                              <div class="card-footer">
                                  <a class="card-link" href="#">Подробнее</a>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <img src="image/card6.png" class="card-img-top">
                              <div class="card-body">
                                <h5 class="card-title">Таблички</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              </div>
                              <div class="card-footer">
                                  <a class="card-link" href="#">Подробнее</a>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="containerMain">
                    <div id="clients-title" class="MainTitle">Наши клиенты</div>
                    <div class="swiper w-100">
                        <div class="swiper-wrapper d-flex align-items-center text-center">
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_moxito.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_cropp.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_totachi.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_sibacademstroi.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_2gis.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_moxito.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_cropp.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_totachi.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_sibacademstroi.png">
                          </div>
                          <div class="swiper-slide">
                            <img class="swiper-slide-image" src="image/logo_2gis.png">
                          </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      </div>
                </div>
                <div class="containerMain">
                    <a name="form"></a>
                    <div class="form">
                        <h3 class="form-title p-0 mb-2">Вы хотите сделать заказ или задать вопрос?</h3>
                        <form class="row" action="index.php" method="post">
                            <div class="col col-lg-4 col-md-6 col-12">
                                <label for="name" class="form-label">ФИО</label>
                                <input id="name" name="name" class="form-control" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="col col-lg-4 col-md-6 col-12">
                                <label for="phone" class="form-label">Телефон</label>
                                <input id="phone" name="phone" class="form-control" placeholder="+7 961 114 5503">
                            </div>
                            <div class="col col-lg-4 col-md-6 col-12">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" class="form-control" placeholder="example@mail.ru">
                            </div>
                            <div class="col col-lg-8 col-md-6 col-12">
                                <label for="order-type" class="form-label">Что интересует</label>
                                <select class="form-select" name="order-type">
                                    <option value="0" selected disabled>Выберите интерующий товар</option>
                                    <option value="1">Объемные буквы</option>
                                    <option value="2">Вывески</option>
                                    <option value="3">Информационные стенды</option>
                                    <option value="4">Световые короба (лайт-боксы)</option>
                                    <option value="5">Pos-материалы</option>
                                    <option value="6">Таблички</option>
                                </select>
                            </div>
                            <div class="col col-lg-4 col-md-12 d-flex align-items-end mt-lg-0 mt-4">
                                <button id="form-button" type="submit" name="send" class="btn w-100">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
<?
if(isset($_POST['send'])){
    $fullname = str_replace(' ', '',$_POST['name']);
    $name = explode(' ',$_POST['name']);
    $phone = str_replace(' ', '',$_POST['phone']);
    $email = str_replace(' ','',$_POST['email']);
    $ordertype = (int)$_POST['order-type'];
    if(empty($fullname) || empty($phone) || empty($email) || $ordertype == 0){
        echo "<div class='alert alert-warning alert-dismissible fade show mt-4' role='alert'>
            Заполните поля.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Закрыть'></button>
            </div>";
    }else{
        if(count($name)==2){
            $sql = "INSERT INTO `orders`(`Surname`, `Name`, `Phone`, `Email`, `OrderType`)
            VALUES ('$name[0]','$name[1]','$phone','$email','$ordertype')";
            $cms->query($sql);
            echo "<div class='alert alert-success alert-dismissible fade show mt-4' role='alert'>
            Вы успешно оставили заявку.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Закрыть'></button>
            </div>";
        }else{
            if(count($name)==3){
                $sql = "INSERT INTO `orders`(`Surname`, `Name`, `Patronymic`, `Phone`, `Email`, `OrderType`)
                VALUES ('$name[0]','$name[1]','$name[2]','$phone','$email','$ordertype')";
                $cms->query($sql);
                echo "<div class='alert alert-success alert-dismissible fade show mt-4' role='alert'>
                Вы успешно оставили заявку.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Закрыть'></button>
                </div>";
            }else{
                echo "<div class='alert alert-warning alert-dismissible fade show mt-4' role='alert'>
                    Некорректные данные в поле ФИО.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Закрыть'></button>
                    </div>";
            }
        }
    }
}
?>
            </div>
        </div>
        <footer>
            <div class="container">
                <a name="map"></a>
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col-lg-8 m-0 order-lg-2 f-right">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae5950a642af36e12e62097c7b5af3bbba84f9a42dbcaa8e99e1b7d31127fd978&amp;width=100%25&amp;height=433&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <div class="col-lg-4 my-5 my-lg-0 order-lg-1 d-flex align-items-center">
                        <div>
                            <div class="row">
                                <div class="col">
                                    <img id="footer-logo" src="image/logo.png">
                                    <span id="footer-title" class="header-footer-DownText">ООО “ЛЕВЕЛ АП”</span>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="header-footer-UpText">Где мы находимся:</div>
                                <a class="header-footer-DownText" href="#map">г. Новосибирск, поселок Садовый ,ул. Российская 15</a>
                            </div>
                            <div class="row pb-3">
                                <div class="header-footer-UpText">Телефон для заказов и вопросов:</div>
                                <a class="header-footer-DownText" href="tel:+79139170782">+7 (913) 917 07 82</a>
                            </div>
                            <div class="row pb-3">
                                <div class="header-footer-UpText">Почта для связи:</div>
                                <a class="header-footer-DownText" href='mailto:boss_level_up@bk.ru'>boss_level_up@bk.ru</a>
                            </div>
                            <div class="row">
                                <a class="footer-link" href="https://vk.com" target="_blank">
                                    <img class="footer-icon" src="image/vkLogo.png">
                                    <span class="px-2">boss_level_up</span>
                                </a>
                                <a class="footer-link pt-1" href="https://en.wikipedia.org/wiki/Instagram" target="_blank">
                                    <img class="footer-icon" src="image/instagramLogo.png">
                                    <span class="px-2">boss_level_up</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>