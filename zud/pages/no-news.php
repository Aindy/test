<?php
require_once('header.php');
require_once('nav.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Новости</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li class="active">Новости</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-8">
            <h3>На данный момент новостей нет.</h3>
            <p>Посетите этот раздел позже.</p>
        </div>

        <!-- News Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- News Categories Well -->
            <div class="well">
                <h4>Категории</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled">
                            <?php
                            if (!empty($cats)){
                                foreach ($cats as $cat) {
                                    echo '<li><a href="?page=newsbycat&amp;cat=' . $cat['id'] . '"';
                                    echo Check::getActive(array('cat' => $cat['id']));
                                    echo '>';
                                    echo Check::encodeHTML($cat['name']);
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
