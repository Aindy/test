<?php



$objProject = new Project();

$industries = $objProject->getIndustries();



$paging = new Paging($industries, 30);

$rows = $paging->getRecords();

$records = count($industries);



require_once('template/header.php');

require_once('template/nav.php');

require_once('template/sidebar.php');

?>



<!-- Page Content -->

<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="page-header">Отрасли</h1>

            </div>

        </div>



        <?php if (!empty($rows)){ ?>

        <div class="row">

            <div class="col-lg-12">

                <a class="btn btn-success" type="button" href="?page=industries&amp;action=add">

                    <i class="glyphicon glyphicon-plus"></i> Добавить отрасль

                </a>

                <br><br>

                <div class="panel panel-default">

                    <div class="panel-heading">

                        Всего отраслей: <?php echo $records; ?>

                    </div>

                    <!-- /.panel-heading -->

                    <div class="panel-body">

                        <table width="100%" class="table table-striped table-bordered table-hover">

                            <thead>

                                <tr>

                                    <th>Отрасль</th>

                                    <th></th>

                                </tr>

                            </thead>

                            <tbody>

                            <?php foreach($rows as $industry) { ?>

                                <tr>

                                    <td><?php echo Check::encodeHTML($industry['name']); ?></td>

                                    <td class="text-center">

                                        <a type="button" class="btn btn-info" href="?page=industries&amp;action=edit&amp;id=<?php echo $industry['id']; ?>">

                                            <i class="glyphicon glyphicon-pencil"></i>

                                        </a>

                                        <a type="button" class="btn btn-danger" href="?page=industries&amp;action=remove&amp;id=<?php echo $industry['id']; ?>">

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

            echo '<p>На данный момент нет никаких отраслей</p>';

        }

        ?>



    </div>

</div>



</div>

<!-- /#wrapper -->





<?php require_once('template/footer.php'); ?>

