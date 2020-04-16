<?php
$cat = URL::getParameter('cat');

$objNews = new News();

$news = $objNews->getAllNews();
$category = $objNews->getCategory($cat);

if(empty($news)){
    require_once('no-news.php');
} else {

    $paging = new Paging($news, 5);
    $news = $paging->getRecords();

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
            <?php
            foreach($news as $aNews){
                $image = !empty($aNews['image']) ? $objNews->path.$aNews['image'] : null;
            ?>
                <h3>
                    <a href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $aNews['id']; ?>">
                        <?php echo Check::encodeHTML($aNews['title'], 1); ?>
                    </a>
                </h3>
                <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($aNews['date'])); ?></p>
                <a href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $aNews['id']; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $image; ?>">
                </a>
                <?php
                if(!empty($image)){
                    echo "<hr>";
                }
                ?>
                <p><?php echo Check::shortenString(Check::encodeHTML($aNews['content'])); ?></p>
                <a class="btn btn-success" href="?page=news-item&amp;cat=<?php echo $category['id']; ?>&amp;id=<?php echo $aNews['id']; ?>">
                    Читать далее <i class="fa fa-angle-right"></i>
                </a>
                <hr>
            <?php
            }
                // Pager
                echo $paging->getPaging();
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
                            if ( ! empty($cats)) {
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

    <?php
    require_once('footer.php');
    }
    ?>
