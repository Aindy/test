<?php

$ind = URL::getParameter('cat');

$objProject = new Project();

$project = $objProject->getAllProject();
$industry = $objProject->getIndustry($ind);

if(empty($project)){
    require_once('no-projects.php');
} 
else {

    $paging = new Paging($project, 5);
    $project = $paging->getRecords();

    require_once('header.php');
    require_once('nav.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Профинансированные проекты</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li class="active">Проекты</li>
            </ol>
        </div>
    
    <!-- /.row -->
            <!-- Project Sidebar Widgets Column -->

        <div class="col-md-12">
            <!-- Project Categories Well -->
            <div class="well">
                <h4>Отрасли</h4>
                    <ul class="list-unstyled">

                        <?php
                        /*ip - ip-адрес сервера с установленной базой данных.
                         login - логин для соединения с базой данных.
                        password - пароль для соединения с базой данных.
                        name_db - имя базы данных.
                        name_table - имя таблицы.
                        column_name - имя столбца таблицы.*/

                        /*Соединяеся с базой и делаем выборку из таблицы*/

                            mysql_connect("localhost", "root", "");

                            mysql_select_db("z");

                            $sql = "SELECT * FROM industries";

                            $result_select = mysql_query($sql);

                            /*Выпадающий список*/

                            ?>
                            <select onchange="document.location=this.options[this.selectedIndex].value">
                                <option>Выберите отрасль</option>
                            <?php
                                while($object = mysql_fetch_assoc($result_select))
                                {
                                echo "<option value ='?page=projectbycat&ind=" . $object['id'] . "'>";
                                echo $object['name'] . "</option>";
                                }
                            ?>
                             <option value="?page=projects"> Все отрасли</option>
                            </select>

                        </ul>
                    </div>
                </div>
            </div>
        <div class="row">

            <!-- /.well -->
        <div class="col-md-8">
            <?php
            foreach($project as $aProject){
                $image = !empty($aProject['image']) ? $objProject->path.$aProject['image'] : null;
            ?>
                <h3>
                    <a href="?page=project-item&amp;id=<?php echo $aProject['id']; ?>">
                        <?php echo Check::encodeHTML($aProject['title'], 1); ?>
                    </a>
                </h3>
                <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($aProject['date'])); ?></p>
                <a href="?page=project-item&amp;id=<?php echo $project['id']; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $image; ?>">
                </a>
                <?php
                if(!empty($image)){
                    echo "<hr>";
                }
                ?>
                <p><?php echo Check::shortenString(Check::encodeHTML($aProject['content'])); ?></p>
                <a class="btn btn-success" href="?page=project-item&amp;id=<?php echo $aProject['id']; ?>">
                    Читать далее <i class="fa fa-angle-right"></i>
                </a>
                <hr>
            <?php
            }
                // Pager
                echo $paging->getPaging();
            ?>
                </div>
                    <div class="col-md-4">
                           <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
    <!-- /.row -->

    <?php
    require_once('footer.php');
    }
    ?>
