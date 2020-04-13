<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Контакты</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li class="active">Контакты</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <!-- Contact Form -->
                <div class="well">
                        <h3>Напишите нам</h3>
                        <br>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="control-group form-group col-lg-6">
                                    <div class="controls">
                                        <label for="name">Имя</label>
                                        <input type="text" class="form-control" id="name" required data-validation-required-message="Введите ваше имя.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group col-lg-6">
                                    <div class="controls">
                                        <label for="phone">Телефон</label>
                                        <input type="tel" class="form-control bfh-phone" data-format="+7 (ddd) ddd-dddd" id="phone" required data-validation-required-message="Введите ваш номер телефона.">
                                    </div>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Введите ваш электронный адрес.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="message">Сообщение</label>
                                    <textarea rows="7" cols="100" class="form-control" id="message" required data-validation-required-message="Введите ваше сообщение" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </form>
                </div>
            </div>

            <!-- Contact Details Column -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="well">
                    <h3>Наш адрес</h3>
                    <br>
                    <p>
                        <?php echo $company['address']; ?>
                    </p>
                    <p><i class="fa fa-phone"></i>
                        <?php echo $company['phone'] ?></p>
                    <p><i class="fa fa-envelope-o"></i>
                        <a href="mailto:<?php echo $company['email'] ?>"><?php echo $company['email'] ?></a>
                    </p>
                    <p><i class="fa fa-clock-o"></i>
                    График работы:<br>
                    С понедельника по пятницу c 9:00 до 18:00<br>
                    Обед с 13:00 до 14:00
                    </p>
                    <p><i class="fa fa-file-text"></i>
                    День открытых дверей и приема заявок:<br>
                    Вторник c 9:00 до 18:00<br>
                    </p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li><a href="https://www.facebook.com/Sheikh-Zayed-Fund-1016722801764897/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="https://www.instagram.com/zayed_fund" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-12">
                <!-- Embedded Google Map -->
                <div id="map-canvas"></div>
            </div>
        </div>


        <?php require_once('footer.php'); ?>
