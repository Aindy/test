<?php

$id = URL::getParameter('id');

if(!empty($id)){
    $objProject = new Project();
    $aProject = $objProject->getOneProject($id);

    if(!empty($aProject)){
        $industry = $objProject->getIndustry($aProject['industry']);

        require_once('header.php');
        require_once('nav.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><?php echo $aProject['title']; ?></h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li><a href="?page=projects">Проекты</a></li>
                <li class="active"><?php echo $aProject['title']; ?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-8">
            <?php
                $image = !empty($aProject['image']) ? $objProject->path.$aProject['image'] : null;
            ?>
            <img class="img-responsive" src="<?php echo $image; ?>" alt="">
            <br>
            <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($aProject['date'])); ?></p>
            <hr>
            <p><?php echo Check::encodeHTML($aProject['content']); ?></p>
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
        <?php

         mysql_connect("localhost", "root", "");

            mysql_select_db("z");

            $sql = "SELECT * FROM project WHERE id = $id";

            $result_select = mysql_query($sql);

            $object = mysql_fetch_assoc($result_select);
        ?>
        <div class="col-md-4">
            <h4><?php echo $object['adress']; ?></h4>
            <div id="map" style="height: 400px;"></div>
        </div>

        <!-- Blog Sidebar Widgets Column -->
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