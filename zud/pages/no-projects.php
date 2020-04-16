<?php

require_once('header.php');

require_once('nav.php');

?>



<!-- Page Content -->

<div class="container">



    <!-- Page Heading/Breadcrumbs -->

    <div class="row">

        <div class="col-lg-12">

            <h1 class="page-header">Проекты</h1>

            <ol class="breadcrumb">

                <li><a href="index.php">Главная</a></li>

                <li class="active">Проекты</li>

            </ol>

        </div>

    </div>

    <!-- /.row -->



    <div class="row">

        <div class="col-md-8">

            <h3>На данный нет добавленных проектов.</h3>

            <p>Посетите этот раздел позже.</p>

        </div>



        <!-- News Sidebar Widgets Column -->

        <div class="col-md-4">



            <!-- News Categories Well -->

            <div class="well">

                <h4>Отрасли</h4>

                <div class="row">

                    <div class="col-lg-12">

                        <ul class="list-unstyled">

                            <?php

                            if (!empty($inds)){

                                foreach ($inds as $ind) {

                                    echo '<li><a href="?page=projectbycat&amp;ind=' . $ind['id'] . '"';

                                    echo Check::getActive(array('ind' => $ind['id']));

                                    echo '>';

                                    echo Check::encodeHTML($ind['name']);

                                    echo '</a></li>';

                                }

                            }

                            ?>

                        </ul>

                    </div>

                </div>

            </div>

            <!-- /.well -->

        </div>



    </div>

    <!-- /.row -->





    <?php require_once('footer.php'); ?>

