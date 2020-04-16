<?php



$ind = URL::getParameter('ind');

// setcookie('id', $ind);


if (empty($ind)) {

    require_once('error.php');

} else {

    $objProject2 = new Project();

    $industry = $objProject2->getIndustry($ind);



    if (empty($industry)){

        require_once('error.php');

    } else {

        $rows = $objProject2->getProjectsByIndustry($ind);



        $paging = new Paging($rows, 3);

        $rows = $paging->getRecords();



        require_once('header.php');

        require_once('nav.php');

?>

        <div class="container">

            <!-- Page Heading/Breadcrumbs -->

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Проекты <small><?php echo $industry['name']; ?></small></h1>

                    <ol class="breadcrumb">

                        <li><a href="index.php">Главная</a></li>

                        <li class="active">Проекты</li>

                    </ol>

                </div>

            <!-- /.row -->
 
        
    </div>

                <!-- News Sidebar Widgets Column -->
                <div class="row">

                <div class="col-md-12">

                    <!-- News Categories Well -->

                    <div class="well">

                        <h4>Отрасли</h4>

                        
                             <!-- Соединяеся с базой и делаем выборку из таблицы*/-->
                            <?php

                            mysql_connect("localhost", "root", "");

                            mysql_select_db("z");

                            $sql = "SELECT * FROM industries";

                            $result_select = mysql_query($sql);
                            ?>
                            <!-- Выпадающий список -->
                            <select onchange="document.location=this.options[this.selectedIndex].value">
                            <option> Выберите отрасль</option>

                            <?php
                                while($object = mysql_fetch_assoc($result_select))
                                {
                                echo "<option value ='?page=projectbycat&ind=" . $object['id'] . "'>";
                                echo $object['name'] . "</option>";
                                }
                            ?>
                            <option value="?page=projects"> Все отрасли</option>

                            </select>

                                <ul class="list-unstyled">

                                    <?php

                                    if (!empty($inds)){

                                        foreach ($inds as $ind){

                                            echo '<li><a href="?page=projectbycat&amp;ind=' .$ind['id']. '"';

                                            echo Check::getActive(array('ind' => $ind['id']));

                                            echo '>';

                                            echo Check::encodeHTML($ind['name']);

                                            echo '</a></li>';

                                        }

                                    }

                                    ?>

                                </ul>

                            </div>


                        </div>

                    </div>

                    <!-- /.well -->

            <div clas="row">
                    <div class="col-md-8">

                    <?php

                    if(!empty($rows)){

                        foreach ($rows as $row){

                            $image = !empty($row['image']) ? $objProject2->path.$row['image'] : null;

                    ?>

                            <h3>

                                <a href="?page=project-item&amp;ind=<?php echo $industry['id']; ?>&amp;id=<?php echo $row['id']; ?>">

                                    <?php echo Check::encodeHTML($row['title'], 1); ?>

                                </a>

                            </h3>

                            <p class="grey"><i class="fa fa-clock-o"></i> Опубликовано <?php echo Check::setDate(3, Check::encodeHTML($row['date'])); ?></p>

                            <a href="?page=project-item&amp;ind=<?php echo $industry['id']; ?>&amp;id=<?php echo $row['id']; ?>">

                                <img class="img-responsive img-hover" src="<?php echo $image; ?>">

                            </a>

                            <?php

                                if(!empty($image)){

                                    echo "<hr>";

                                }

                            ?>

                            <p><?php echo Check::shortenString(Check::encodeHTML($row['content'])); ?></p>

                            <a class="btn btn-success" href="?page=project-item&amp;ind=<?php echo $industry['id']; ?>&amp;id=<?php echo $row['id']; ?>">

                                Читать далее <i class="fa fa-angle-right"></i>

                            </a>

                            <hr>

                    <?php
                        }
                        // Pager

                        echo $paging->getPaging();
                    } else {
                        ?>
                        <h4>В этой отрасли нет пока проектов. Вы можете выбрать другую отрасль.</h4>
                        <?php
                    }
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

}