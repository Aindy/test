<?php

$cat = URL::getParameter('cat');

if (empty($cat)) {
    require_once('error.php');
} else {
    $objNews2 = new News();
    $category = $objNews2->getCategory($cat);

    if (empty($category)){
        require_once('error.php');
    } else {
        $rows = $objNews2->getNewsByCategory($cat);

        $paging = new Paging($rows, 3);
        $rows = $paging->getRecords();

        require_once('header.php');
        require_once('nav.php');
?>
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Новости <small><?php echo $category['name']; ?></small></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Главная</a></li>
                        <li class="active">Новости</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-8">
                    <?php
                    if(!empty($rows)){
                        foreach ($rows as $row){
                            $image = !empty($row['image']) ? $objNews2->path.$row['image'] : null;
                    ?>
                            <h3>
                                <a href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>">
                                    <?php echo Check::encodeHTML($row['title'], 1); ?>
                                </a>
                            </h3>
                            <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($row['date'])); ?></p>
                            <a href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>">
                                <img class="img-responsive img-hover" src="<?php echo $image; ?>">
                            </a>
                            <?php
                                if(!empty($image)){
                                    echo "<hr>";
                                }
                            ?>
                            <p><?php echo Check::shortenString(Check::encodeHTML($row['content'])); ?></p>
                            <a class="btn btn-success" href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>">
                                Читать далее <i class="fa fa-angle-right"></i>
                            </a>
                            <hr>
                    <?php
                        }
                        // Pager
                        echo $paging->getPaging();

                    } else {
                        ?>
                        <h4>В этой категории пока нет новостей. Вы можете выбрать другую категорию.</h4>
                        <?php
                    }
                     ?>
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
    }
}


