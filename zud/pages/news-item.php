<?php

$id = URL::getParameter('id');

if(!empty($id)){
    $objNews = new News();
    $aNews = $objNews->getOneNews($id);

    if(!empty($aNews)){
        $category = $objNews->getCategory($aNews['category']);

        require_once('header.php');
        require_once('nav.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><?php echo $aNews['title']; ?></h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li><a href="?page=news">Новости</a></li>
                <li class="active"><?php echo $aNews['title']; ?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-8">
            <?php
                $image = !empty($aNews['image']) ? $objNews->path.$aNews['image'] : null;
            ?>
            <img class="img-responsive" src="<?php echo $image; ?>" alt="">
            <br>
            <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($aNews['date'])); ?></p>
            <hr>
            <p><?php echo Check::encodeHTML($aNews['content']); ?></p>
            <hr>

            <!-- Comments
            <div class="well">
                <h4>Комментарий:</h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>
            <hr>

            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Ислам Дудаев
                        <small>August 25, 2017 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>


            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Мухаммад Али
                        <small>August 23, 2017 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Ответ другому чуваку
                                <small>August 29, 2017 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                </div>
            </div>
            -->

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- News Categories Well -->
            <div class="well">
                <h4>Категории</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled">
                            <?php
                            if (!empty($cats)){
                                foreach ($cats as $cat){
                                    echo '<li><a href="?page=newsbycat&amp;cat=' .$cat['id']. '"';
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

<?php
    require_once('footer.php');
    } else {
        require_once('error.php');
    }
} else {
    require_once('error.php');
}
?>