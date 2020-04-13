
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div>
                <a href="index.php" class="navbar-left"><img class="logo" src="img/logo_small.png" alt=""></a>
                <a class="navbar-brand logo_text" href="index.php" style="color: #097020;">
                    <strong>Фонд имени Шейха Зайеда</strong><br>
                    <sup>по поддержке предпринимательства и инноваций</sup>
                </a>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="?page=about">О Фонде</a>
                </li>
                <li class="dropdown">
                    <a href="?page=services" class="dropdown-toggle" data-toggle="dropdown">Услуги <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?page=funding">Финансирование</a>
                        </li>
                        <li>
                            <a href="?page=counseling">Консультация</a>
                        </li>
                        <li>
                            <a href="?page=training">Обучение</a>
                        </li>
                        <li>
                            <a href="?page=support">Сопровождение</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?page=news">Новости</a>
                </li>
                <li>
                    <a href="?page=projects">Проекты</a>
                </li>
                <li>
                    <a href="?page=contact">Контакты</a>
                </li>
                <li>
                    <form class="navbar-form" action="?page=apply" method="post">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Подать заявку</button>
                        </div>
                    </form>
                </li>
                <li style="padding-top: 5px;">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="img/rus24.png">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href='<?php echo "http://zayedfund.com".$_SERVER['REQUEST_URI']; ?>'><img src="img/rus24.png"> Русский</a></li>
                            <li><a href='<?php echo "http://en.zayedfund.com".$_SERVER['REQUEST_URI']; ?>'><img src="img/eng24.png"> English</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

