<?php

$objNews = new News();
$categories = $objNews->getCategories();

$paging = new Paging($categories, 30);
$rows = $paging->getRecords();
$records = count($categories);

require_once('template/header.php');
require_once('template/nav.php');
require_once('template/sidebar.php');
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Категории</h1>
            </div>
        </div>

        <?php if (!empty($rows)){ ?>
        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" type="button" href="?page=categories&amp;action=add">
                    <i class="glyphicon glyphicon-plus"></i> Добавить категорию
                </a>
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Всего категорий: <?php echo $records; ?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Категория</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($rows as $category) { ?>
                                <tr>
                                    <td><?php echo Check::encodeHTML($category['name']); ?></td>
                                    <td class="text-center">
                                        <a type="button" class="btn btn-info" href="?page=categories&amp;action=edit&amp;id=<?php echo $category['id']; ?>">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-danger" href="?page=categories&amp;action=remove&amp;id=<?php echo $category['id']; ?>">
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
            echo '<p>На данный момент нет никаких категорий</p>';
        }
        ?>

    </div>
</div>

</div>
<!-- /#wrapper -->


<?php require_once('template/footer.php'); ?>
