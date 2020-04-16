<?php

$id = URL::getParameter('id');



if (!empty($id)) {



    $project = new Project();

    $aProject = $project->getOneProject($id);



    if (!empty($aProject)) {



        $yes = URL::getURL().'&amp;remove=1';

        $no = 'javascript:history.go(-1)';



        $remove = URL::getParameter('remove');



        if (!empty($remove)) {

            $project->removeProject($id);

            Check::redirect(URL::getURL(array('action', 'id', 'remove', 'srch', Paging::$paging)));

        }



        require_once('template/header.php');

        require_once('template/nav.php');

        require_once('template/sidebar.php');

        ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="page-header">Удаление проекты</h1>

                    </div>

                </div>

                <p class="text-danger">Вы уверены что хотите удалить этот проект?</p>

                    <br><br>

                <p>

                    <a href="<?php echo $yes; ?>">ДА</a> | <a href="<?php echo $no; ?>">НЕТ</a>

                </p>

            </div>

        </div>



        <?php

        require_once('template/footer.php');

    }

}

?>