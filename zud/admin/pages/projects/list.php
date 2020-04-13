<?php



$objProject = new Project();

$srch = URL::getParameter('srch');



if(!empty($srch)){

    $project = $objProject->getProjectBySearch($srch);

    $empty = 'Извините, мы не смогли найти то что вы искали.';

} else {

    $project = $objProject->getAllProject();

    $empty = 'На данный момент нет добавленных проектов.';

}

$paging = new Paging($project, 20);

$rows = $paging->getRecords();

$records = count($project);



require_once('template/header.php');

require_once('template/nav.php');

require_once('template/sidebar.php');

?>



<!-- Page Content -->

<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="page-header">Проекты</h1>

            </div>

        </div>



        <?php if (!empty($rows)){ ?>

        <div class="row">

            <div class="col-lg-12">

                <a class="btn btn-success" type="button" href="?page=projects&amp;action=add">

                    <i class="glyphicon glyphicon-plus"></i> Добавить Проект

                </a>

                <br><br>

                <div class="panel panel-default">

                    <div class="panel-heading">

                        Всего проектов: <?php echo $records; ?>

                    </div>

                    <!-- /.panel-heading -->

                    <div class="panel-body">

                        <table width="100%" class="table table-striped table-bordered table-hover">

                            <thead>

                                <tr>

                                    <th>#</th>

                                    <th>Заголовок</th>

                                    <th>Дата</th>

                                    <th>Отрасль</th>

                                    <th></th>

                                </tr>

                            </thead>

                            <tbody>

                            <?php foreach($rows as $project) { ?>

                                <tr>

                                    <td><?php echo $project['id']; ?></td>

                                    <td><?php echo Check::encodeHTML($project['title']); ?></td>

                                    <td><?php echo $project['date']; ?></td>

                                    <td><?php

                                        $industry = $objProject->getIndustry($project['industry']);

                                        echo $industry['name'];

                                        ?></td>

                                    <td class="text-center">

                                        <a type="button" class="btn btn-info" href="?page=projects&amp;action=edit&amp;id=<?php echo $project['id']; ?>">

                                            <i class="glyphicon glyphicon-pencil"></i>

                                        </a>

                                        <a type="button" class="btn btn-danger" href="?page=projects&amp;action=remove&amp;id=<?php echo $project['id']; ?>">

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

