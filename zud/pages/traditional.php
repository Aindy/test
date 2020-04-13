<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Традиционное Финансирование</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li><a href="?page=services">Услуги</a></li>
                <li><a href="?page=funding">Финансирование</a></li>
                <li class="active">Традиционное</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron col-lg-12 col-md-12">
                <h3 class="text-center">Калькулятор кредита</h3>
                <br>

                <div class="panel panel-default col-lg-5">
                    <div class="panel-body">
                        <form id="calculator" action="" method="post">
                            <div class="form-group has-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="аmount">Сумма кредита:</label>
                                <div class="input-group col-lg-8 col-md-5 col-sm-5 col-xs-9">
                                    <input type="number" class="form-control" id="аmount" name="amount" min="1000" max="100000000" placeholder="3500000" data-validator-number-message="Введите только цифры">
                                    <div class="input-group-addon">Руб.</div>
                                </div>
                            </div>
                            <div class="form-group has-success col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="percent">Процентная ставка:</label>
                                <div class="input-group col-lg-3 col-md-2 col-sm-2 col-xs-5">
                                    <input type="text" class="form-control" id="percent" name="percent" value="11" disabled>
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                            <label for="period" style="padding-left: 15px;">Общий срок займа:</label>
                            <div class="form-inline col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="select1">
                                            <select class="form-control" name="year">
                                                <option value="0">0 лет</option>
                                                <option value="1">1 год</option>
                                                <option value="2">2 года</option>
                                                <option value="3">3 года</option>
                                                <option value="4">4 года</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <div class="select2">
                                            <select class="form-control" name="month">
                                                <option value="0">0 месяцев</option>
                                                <option value="1">1 месяц</option>
                                                <option value="2">2 месяца</option>
                                                <option value="3">3 месяца</option>
                                                <option value="4">4 месяца</option>
                                                <option value="5">5 месяцев</option>
                                                <option value="6">6 месяцев</option>
                                                <option value="7">7 месяцев</option>
                                                <option value="8">8 месяцев</option>
                                                <option value="9">9 месяцев</option>
                                                <option value="10">10 месяцев</option>
                                                <option value="11">11 месяцев</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-10" style="padding-top: 25px;">
                                <button type="submit" id="calculate" data-loading-text="Подождите..." class="btn btn-success btn-block">Посчитать</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default col-lg-5 col-lg-offset-2">
                    <h4 class="text-center"><strong>Итог расчёта:</strong></h4>

                    <table class="table table-responsive">
                        <tbody>
                        <tr>
                            <td>Ежемесячный платёж:</td>
                            <td><span id="span1">0</span> &#8381;</td>
                        </tr>
                        <tr>
                            <td>Льготный период:</td>
                            <td><span id="span2">0</span> мес.</td>
                        </tr>
                        <tr>
                            <td>Количество платежей:</td>
                            <td><span id="span3">0</span></td>
                        </tr>
                        <tr>
                            <td>Всего заплатите:</td>
                            <td><span id="span4">0</span> &#8381;</td>
                        </tr>
                        <tr>
                            <td>Переплата по кредиту:</td>
                            <td><span id="span5">0</span> &#8381;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="errorCalculatorForm"></div>
                <br>

            </div>
        </div>
    </div><!-- /.row -->

    <div class="row">
        <div class="col-lg-12">

            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td><strong>Договор</strong></td>
                        <td>Продукт «Традиционное финансирование» представлен рамочным договором займа, в рамках которого предприниматель имеет право направлять
                            заявки на предоставление займа под финансирование расходов на реализацию проекта в соответствии с согласованным бизнес-планом.</td>
                    </tr>
                    <tr>
                        <td><strong>Цель финансирования</strong></td>
                        <td>
                            <p>Строительство коммерческой недвижимости, приобретение и/или ремонт коммерческой недвижимости, приобретение и модернизация оборудования,
                                транспортных средств, инвестиции в прочие основные средства;</p>
                            <p>Пополнение оборотных средств;</p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Сумма займа</strong></td>
                        <td>до 6 млн рублей</td>
                    </tr>
                    <tr>
                        <td><strong>Срок финансирования</strong></td>
                        <td>до 4 лет</td>
                    </tr>
                    <tr>
                        <td><strong>Процентная ставка</strong></td>
                        <td>11% годовых</td>
                    </tr>
                    <tr>
                        <td><strong>Валюта займа</strong></td>
                        <td>Рубли РФ</td>
                    </tr>
                    <tr>
                        <td><strong>Комиссия за выдачу займа</strong></td>
                        <td>Отсутствует</td>
                    </tr>
                    <tr>
                        <td><strong>Комиссия за досрочное погашение займа</strong></td>
                        <td>Отсутствует</td>
                    </tr>
                    <tr>
                        <td><strong>Льготный период (отсрочка по основному долгу и процентам)</strong></td>
                        <td>
                            <p>до 12 месяцев начиная с даты предоставления кредитного продукта:</p>
                            <ul>
                                <li>не более 3 месяцев - при сроке кредитования до 12 месяцев включительно,</li>
                                <li>не более 6 месяцев - при сроке финансирования 13—24 месяца включительно,</li>
                                <li>не более 9 месяцев - при сроке финансирования 25-36 месяцев,</li>
                                <li>не более 12 месяцев - при сроке финансирования свыше 36 месяцев.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Обеспечение</strong></td>
                        <td>
                            <p>Гибкий подход к обеспечению займа. Обеспечением может служить практически <strong>любое имущество</strong>,
                                принадлежащее потенциальному залогодателю на праве собственности. Возможные виды обеспечения для получения займа:</p>
                            <ul>
                                <li>транспортные средства;</li>
                                <li>оборудование;</li>
                                <li>товарно-материальные ценности;</li>
                                <li>объекты недвижимости;</li>
                                <li>доля предприятия;</li>
                                <li>поручительство собственников бизнеса;</li>
                                <li>поручительство Фондов поддержки малого бизнеса;</li>
                                <li>сельскохозяйственные животные;</li>
                                <li>банковские гарантии.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Страхование</strong></td>
                        <td>Залоговое имущество подлежит обязательному страхованию.</td>
                    </tr>
                    <tr>
                        <td><strong>Неустойка за несвоевременное перечисление платежа в погашение займа или уплату процентов</strong></td>
                        <td>0,15% от суммы просроченной задолженности. Начисляется на сумму просроченного платежа за каждый день просрочки платежа.</td>
                    </tr>
                    <tr>
                        <td><strong>Порядок предоставления займа</strong></td>
                        <td>Перечисляется на счет предприятия в рамках не возобновляемой кредитной линии с лимитом выдачи, установленным рамочным договором.</td>
                    </tr>
                    <tr>
                        <td><strong>Порядок погашения займа</strong></td>
                        <td>По графику, с учетом бизнес-плана клиента.</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Примечание</h3>
        </div>
        <div class="col-lg-12">
            <p>Итоговые условия финансирования устанавливаются индивидуально и зависят от финансового состояния предпринимателя,
                его кредитной истории, срока и суммы финансирования, а также предоставляемого обеспечения. Подробную информацию о
                продуктах финансирования Фонда, условиях и документах, необходимых для получения финансирования, Вы можете получить в офисе Фонда.</p>
        </div>
    </div>


    <?php require_once('footer.php'); ?>



