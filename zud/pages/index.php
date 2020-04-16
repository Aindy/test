<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill_logo"></div>
            </div>
            <div class="item">
                <img class="fill" style="background-image:url('img/car_1.jpg');">
                <!--
                <div class="carousel-caption">
                    <h2>Фонд имени Шейха Зайеда</h2>
                </div>
                -->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/car_2.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/car_3.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <section class="container">


        <div class="row">
            <div class="col-sm-8">
                <h2>О Фонде</h2>
                <p>Фонд имени Шейха Зайеда по поддержке предпринимательства и инноваций создан в 2017 г. в результате
                    договоренности между Главой Чеченской Республики, Героем России Р.А.Кадыровым и
                    Президентом ОАЭ, Шейхом Халифа бин Зайед Аль Нахайяном.</p>
                <p> По распоряжению наследного принца Абу-Даби, заместителя Главного Командующего Вооруженных Сил ОАЭ Шейха
                    Мухаммеда бин Зайеда Аль Нахайяна учредителем Фонда в Чеченской Республике выступил Фонд Халифа
                    по развитию предпринимательства (Khalifa Fund for Enterprise Development).</p>
                <p>Основная цель Фонда - стать ключевым элементом системы содействия предпринимательской деятельности
                    для достижения устойчивого социально-экономического эффекта в Чеченской Республике посредством
                    оказания целевой поддержки малому и среднему бизнесу.
                   </p>
                <p>
                    <a class="btn btn-default" href="?page=about">Подробнее &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Наш адрес</h3>
                <address><p><?php echo $company['address']; ?></p></address>
                <p><i class="fa fa-phone"></i>
                    <?php echo $company['phone'] ?></p>
                <p><i class="fa fa-envelope-o"></i>
                    <a href="mailto:<?php echo $company['email'] ?>"><?php echo $company['email'] ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    Приемные дни:<br>
                    Вторник c 9:00 до 18:00<br>
                    Обед с 13:00 до 14:00
                </p>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Наши Услуги</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        <span class="fa-stack fa-5x text-success">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center">Финансирование</h4>
                        <p>Фонд предлагает предпринимателям несколько финансовых продуктов, выгодно отличающихся от традиционных банков.</p>
                        <div class="text-center">
                            <a href="?page=funding" class="btn btn-success">Подробнее &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                            <span class="fa-stack fa-5x text-success">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-handshake-o fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center">Консультация</h4>
                        <p>Сотрудники Фонда оказывают заявителям консультационную поддержку при проработке бизнес-идеи и составлении бизнес-плана для реализации проекта.</p>
                        <div class="text-center">
                            <a href="?page=counseling" class="btn btn-success">Подробнее &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                            <span class="fa-stack fa-5x text-success">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                            </span>
                </div>
                    <div class="panel-body">
                        <h4 class="text-center">Обучение</h4>
                        <p>Для предпринимателей разработаны программы тренингов по проработке идей, бизнес-планированию и другим инструментам ведения бизнеса.</p>
                        <div class="text-center">
                            <a href="?page=training" class="btn btn-success">Подробнее &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                            <span class="fa-stack fa-5x text-success">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center">Сопровождение</h4>
                        <p>Фонд оказывает административную и юридическую поддержку предпринимателям на протяжениии всего периода реализации проекта.</p>
                        <div class="text-center">
                            <a href="?page=support" class="btn btn-success">Подробнее &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Результаты</h2>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Рассмотрено заявок</h3>
                </div>
                <div class="panel-body">
                    <span class="price">584</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Одобрено</h3>
                </div>
                <div class="panel-body">
                    <span class="price"><span style="color: #000000;">73</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="panel panel-success text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Профинансировано</h3>
                </div>
                <div class="panel-body">
                    <span class="price">45</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Прошли тренинги</h3>
                </div>
                <div class="panel-body">
                    <span class="price">>270</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Content -->

<?php require_once('footer.php'); ?>