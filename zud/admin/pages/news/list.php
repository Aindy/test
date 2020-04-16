<?php

$objNews = new News();
$srch = URL::getParameter('srch');

if(!empty($srch)){
    $news = $objNews->getNewsBySearch($srch);
    $empty = 'Извините, мы не смогли найти то что вы искали.';
} else {
    $news = $objNews->getAllNews();
    $empty = 'На данный момент нет никаких новостей.';
}
$paging = new Paging($news, 20);
$rows = $paging->getRecords();
$records = count($news);

require_once('template/header.php');
require_once('template/nav.php');
require_once('template/sidebar.php');
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Новости</h1>
            </div>
        </div>

        <?php if (!empty($rows)){ ?>
        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" type="button" href="?page=news&amp;action=add">
                    <i class="glyphicon glyphicon-plus"></i> Добавить новость
                </a>
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Всего новостей: <?php echo $records; ?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Заголовок</th>
                                    <th>Дата</th>
                                    <th>Категория</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($rows as $news) { ?>
                                <tr>
                                    <td><?php echo $news['id']; ?></td>
                                    <td><?php echo Check::encodeHTML($news['title']); ?></td>
                                    <td><?php echo $news['date']; ?></td>
                                    <td><?php
                                        $category = $objNews->getCategory($news['category']);
                                        echo $category['name'];
                                        ?></td>
                                    <td class="text-center">
                                        <a type="button" class="btn btn-info" href="?page=news&amp;action=edit&amp;id=<?php echo $news['id']; ?>">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-danger" href="?page=news&amp;action=remove&amp;id=<?php echo $news['id']; ?>">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>

            <?php
                echo $paging->getPaging();
        } else{
            echo '<p>'.$empty.'</p>';
        }
        ?>

    </div>
</div>

</div>
<!-- /#wrapper -->


<?php require_once('template/footer.php'); ?>
