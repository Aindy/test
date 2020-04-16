<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>

    <!-- Page Content - include in all page because the end tag is in footer -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">404
                    <small>Страница не найдена</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1><span class="error-404">404</span>
                    </h1>
                    <p>Страница которую вы хотели посетить не существует! Внизу, вы найдете все доступные вам страницы.</p>
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="?page=about">О Фонде</a></li>
                        <li><a href="?page=services">Услуги</a>
                            <ul>
                                <li><a href="?page=funding">Финансирование</a>
                                    <ul>
                                        <li><a href="?page=islamic">Исламское</a></li>
                                        <li><a href="?page=traditional">Традиционное</a></li>
                                        <li><a href="?page=leasing">Лизинг (рассрочка)</a></li>
                                    </ul>
                                </li>
                                <li><a href="?page=counseling">Консультация</a></li>
                                <li><a href="?page=training">Обучение</a></li>
                                <li><a href="?page=support">Сопровождение</a></li>
                            </ul>
                        </li>
                        <li><a href="?page=news">Новости</a></li>
                        <li><a href="?page=projects">Проекты</a></li>
                        <li><a href="?page=contact">Контакты</a></li>
                        <li>
                            Другие страницы
                            <ul>
                                <li><a href="?page=privacy">Политика Конфиденциальности</a></li>
                                <li><a href="?page=terms">Условия Использования</a></li>
                                <li><a href="?page=faqs">Вопросы и Ответы</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <?php require_once('footer.php'); ?>
