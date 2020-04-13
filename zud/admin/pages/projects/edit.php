<?php



$id = URL::getParameter('id');

if(!empty($id)) {



    $objProject = new Project();

    $project = $objProject->getOneProject($id);



    if(!empty($project)) {

        $industries = $objProject->getIndustries();

        $form = new Form();

        $validation = new Valid($form);





        if ($form->isPost('title')) {



            $validation->expected = array(

                'title',

                'content',

                'industry',

                'image'

            );



            $validation->required = array(

                'title',

                'content',

                'industry'

            );



            if ($validation->isValid()) {



                if ($objProject->updateProject($validation->post, $id)) {

                    $upload = new Upload();



                    if ($upload->upload(PROJECT_FOLDER)) {

                        // removing the old image if the new one is uploaded

                        if(is_file(PROJECT_FOLDER.DIR_SEP.$project['image'])){

                            unlink(PROJECT_FOLDER.DIR_SEP.$project['image']);

                        }



                        $objProject->updateProject(array('image' => $upload->names[0]), $id);

                        Check::redirect(URL::getURL(array('action', 'id')) . '&action=edit-success');

                    } else {

                        Check::redirect(URL::getURL(array('action', 'id')) . '&action=edit-no-image');

                    }

                } else {

                    Check::redirect(URL::getURL(array('action', 'id')) . '&action=edit-failed');

                }

            }



        }



        require_once('template/header.php');

        require_once('template/nav.php');

        require_once('template/sidebar.php');

        ?>



        <!-- Page Content -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="page-header">Редактирование проекта</h1>

                    </div>

                </div>



                <div class="row">

                    <div class="col-lg-12">

                        <form action="" method="post" enctype="multipart/form-data">



                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label" for="title">Заголовок</label>

                                        <?php echo $validation->validate('title'); ?>

                                        <input id="title" name="title" type="text"

                                               value="<?php echo $form->textField('title', $project['title']); ?>" placeholder="Заголовок"

                                               class="form-control input-md" required>

                                    </div>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label" for="content">Описание проекта</label>

                                        <?php echo $validation->validate('content'); ?>

                                        <textarea class="form-control" id="content" name="content"

                                                  placeholder="Новости..."

                                                  cols="" rows="5"><?php echo $form->textField('content', $project['content']); ?></textarea>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label" for="industry">Отрасль</label>

                                        <?php echo $validation->validate('industry'); ?>

                                        <select id="industry" name="industry" class="form-control">

                                            <option value="">Выберите отрасль</option>

                                            <?php if ( ! empty($industries)) { ?>

                                                <?php foreach ($industries as $ind) { ?>

                                                    <option value="<?php echo $ind['id']; ?>"

                                                        <?php echo $form->selectField('industry', $ind['id'], $project['industry']); ?>>

                                                        <?php echo Check::encodeHTML($ind['name']); ?>

                                                    </option>

                                                <?php } ?>

                                            <?php } ?>

                                        </select>

                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label" for="image">Картинка</label>

                                        <input id="image" name="image" type="file" class="form-control input-md"

                                               size="30">

                                    </div>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <button type="submit" class="btn btn-success">Редактировать</button>

                                    </div>

                                </div>

                            </div>



                        </form>

                    </div>

                </div>





            </div>

        </div>



        </div>

        <!-- /#wrapper -->



        <?php



        require_once('template/footer.php');

    }

}

?>







