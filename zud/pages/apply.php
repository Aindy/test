<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Заявка</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active">Заявка</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Процесс отбора заявок</h3>

                <div class="applicationProcess">

                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>

                                <li class="active">
                                    <a href="#consultant" data-toggle="tab" title="Консультант">
                                        <span class="round-tabs one">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#otbor" data-toggle="tab" title="Отборочная комиссия">
                                        <span class="round-tabs one">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#training" data-toggle="tab" title="Обучение">
                                        <span class="round-tabs one">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#businessPlan" data-toggle="tab" title="Разработка БП">
                                        <span class="round-tabs one">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#complete" data-toggle="tab" title="Защита БП">
                                        <span class="round-tabs one">5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#finish" data-toggle="tab" title="Перечисление средств">
                                        <span class="round-tabs one">6</span>
                                    </a>
                                </li>
                                <li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="consultant">
                                <h3 class="head text-center">1. Первое собеседование с бизнес-консультантом</h3>
                                <p>
                                    Для рассмотрения Фондом Вашей идеи необходимо заполнить Форму Регистрации по прилагаемому образцу. Форма заполняется в электронном виде, распечатывается и подписывается заявителем.
                                    Помимо заявки на получение финансирования, можно также подать заявку на прохождение бесплатного обучения по программам Фонда.
                                    <br>Ссылку на скачивание Формы Регистрации Вы найдёте ниже.
                                </p>
                                                <p>    После заполнения Формы Регистрации заявитель приглашается на первое собеседование с бизнес-консультантом. К собеседованию необходимо подготовить краткое описание бизнес-идеи,
                                    а также сопровождающие документы в соответствии со Списком документов для обработки заявки.
                                </p>
                                <p class="text-center">
                                    <a href="#list" class="btn btn-success btn-outline-rounded green"> Список документов <span style="margin-left:10px;" class="glyphicon glyphicon-arrow-down"></span></a>
                                </p>

                                <div class="row" id="list">
                                    <div class="col-lg-12">
                                        <h3 class="page-header">Список документов для обработки заявки</h3>
                                    </div>
                                    <div class="hidden-xs col-md-6 col-sm-6 col-lg-6">
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading" style="padding-top:13px;"><strong>Форма регистрации заявителя</strong>
                                                    <a href="bin/application.docx" class="btn btn-link" target="_blank" download>
                                                        <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading service_padding1"><strong>Краткое резюме вашей бизнес-идеи</strong>
                                                    <a href="bin/businessDescription.docx" class="btn btn-link" target="_blank" download>
                                                        <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading service_padding"><strong>Копия документа об образовании</strong></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden-xs col-md-6 col-sm-6 col-lg-6">
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-vcard fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading service_padding"><strong>Копия паспорта</strong></h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading service_padding"><strong>2 личных фото</strong></h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-drivers-license-o fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading service_padding1"><strong>Личное резюме</strong>
                                                    <a href="bin/cv.doc" class="btn btn-link" target="_blank" download>
                                                        <i class="fa fa-download" aria-hidden="true"></i> Скачать образец</a>
                                                </h4>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                        </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                    <h4 class="media-heading service_padding1"><strong>Cогласие на проверку кредитной истории</strong>
                                                        <a href="bin/forma.docx" class="btn btn-link" target="_blank" download>
                                                            <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                                    </h4>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- For mobile version -->
                                    <div class="visible-xs col-xs-12">
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Форма регистрации заявителя</h4>
                                                <a href="bin/application.docx" class="btn btn-success btn-xs" target="_blank" download>
                                                    <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading apply_margin2">Краткое резюме вашей бизнес-идеи</h4>
                                                <a href="bin/businessDescription.docx" class="btn btn-success btn-xs" target="_blank" download>
                                                    <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading apply_margin2">Копия документа об образовании</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-vcard fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading apply_margin">Копия паспорта</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading apply_margin">2 личных фото</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-drivers-license-o fa-stack-1x fa-inverse"></i>
                        </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading apply_margin2">Личное резюме
                                                    <a href="bin/cv.doc" class="btn btn-success btn-xs" target="_blank" download>
                                                        <i class="fa fa-download" aria-hidden="true"></i> Скачать образец</a>
                                                </h4>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                        </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading apply_margin2">Cогласие на проверку кредитной истории
                                                        <a href="bin/forma.docx" class="btn btn-success btn-xs" target="_blank" download>
                                                            <i class="fa fa-download" aria-hidden="true"></i> Скачать</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>
                            <div class="tab-pane fade" id="otbor">
                                <h3 class="head text-center">2. Отборочная комиссия</h3>
                                <p>
                                    Заполненная Форма Регистрации вместе с кратким описанием бизнес-идеи и сопровождающими документами рассматривается на заседании Отборочной Комиссии Фонда.
                                    Основные критерии оценки заявок Фондом включают:
                                </p>
                                <ol>
                                    <li>Ваш уровень образования, профессиональный опыт и наличие необходимых навыков для реализации бизнес-идеи;</li>
                                    <li>Энтузиазм и количество времени, которое Вы готовы уделить своему проекту;</li>
                                    <li>Размер Вашего собственного вклада в предлагаемый к реализации проект и Ваши текущие финансовые возможности;</li>
                                    <li>Уровень квалификации работников, которые будут вовлечены в реализацию Проекта;</li>
                                    <li>Осуществимость бизнеса с точки зрения рыночных условий, спроса и предложения;</li>
                                    <li>Месторасположение бизнеса;</li>
                                    <li>Иные факторы, влияющие на возможность успешной реализации предлагаемого Вами бизнеса.</li>
                                </ol>
                                <p>
                                    <em>Обратите внимание, что при заполнении Формы Регистрации Вы соглашаетесь с тем, что Фонд имени Шейха Зайеда имеет право отклонить Вашу заявку по собственному усмотрению в любое время без объяснения причин отказа.
                                        <br>Предоставление заведомо ложной информации на этапе подаче заявки может послужить причиной отказа на последующих этапах рассмотрения Вашей заявки.</em>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="training">
                                <h3 class="head text-center">3. Обучение</h3>
                                <p>
                                    По итогам рассмотрения Вашей заявки Отборочной Комиссией Вам может быть предложено пройти профильное обучение, предоставляемое Фондом на бесплатной основе.
                                    В частности, возможные направления обучения включают тренинг по генерации идей, предназначенный для предпринимателей, чья бизнес-идея ещё не до конца проработана и требует дополнительного уточнения, и тренинг по разработке бизнес-плана.
                                    <br>Более подробная информация о предоставляемых видах обучения приведена в соответствующем разделе - <a href="?page=training" class="btn btn-link">Обучение</a>.
                                    <br>По итогам тренингов проводится тестирование заявителей для оценки успешности усвоения представленного материала.
                                </p>
                                <p><em>Обратите внимание, что непосещение тренингов и небрежное к ним отношение может послужить причиной отказа от дальнейшего рассмотрения Вашей заявки.</em></p>
                            </div>
                            <div class="tab-pane fade" id="businessPlan">
                                <h3 class="head text-center">4. Разработка бизнес плана</h3>
                                <p>
                                    Заявителям, успешно прошедшим предшествующие этапы рассмотрения заявки, включая обучение, если таковое было рекомендовано, будет предложено подготовить бизнес-план Проекта по утвержденному
                                    Фондом формату. В ходе подготовки бизнес-плана заявитель будет иметь возможность посоветоваться с закрепленным за ним бизнес-консультантом по поводу содержания бизнес-плана, уточнить детали
                                    расчетов. В свою очередь, бизнес-консультанты могут давать замечания по содержанию бизнес-плана и требовать уточнения и подтверждения предположений, заложенных в бизнес-плане.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="complete">
                                <h3 class="head text-center">5. Защита бизнес плана</h3>
                                <p>
                                    После успешной подготовки бизнес-плана и устранения всех замечаний бизнес-консультантов, заявитель будет приглашен на заседание Кредитного Комитета Фонда, где ему будет представлена возможность защитить свой бизнес-план и ответить на вопросы экспертов.
                                    В случае окончательного одобрения бизнес-плана по итогам заседания Кредитного Комитета, с заявителем будет заключен договор займа.
                                </p>
                                <p>
                                    Обратите внимание, что одобрение бизнес-плана может быть условным.
                                    В случае условного одобрения заявителю будет предоставлено время (до трех месяцев) на выполнение условий выдачи займа.
                                </p>
                                <p>
                                    В число подобных условий могут входить такие как:
                                <ol>
                                    <li>Регистрация юридического лица для реализации проекта;</li>
                                    <li>Обеспечение места реализации проекта и предоставление всех необходимых подтверждающих документов на производственное помещение;</li>
                                    <li>Предоставление залогового имущества для обеспечения займа.</li>
                                </ol>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="finish">
                                <h3 class="head text-center">6. Перечисление заемных средств</h3>
                                <p>
                                    Перечисление средств в рамках договора займа производится поэтапно, в соответствии со статьями расходов, согласованными в рамках бизнес-плана.
                                    <br>Перечисление происходит безналичным способом.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        




<?php require_once('footer.php'); ?>