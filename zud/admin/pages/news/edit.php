<?php

$id = URL::getParameter('id');
if(!empty($id)) {

    $objNews = new News();
    $news = $objNews->getOneNews($id);

    if(!empty($news)) {

        $categories = $objNews->getCategories();
        $form = new Form();
        $validation = new Valid($form);


        if ($form->isPost('title')) {

            $validation->expected = array(
                'title',
                'content',
                'category',
                'image'
            );

            $validation->required = array(
                'title',
                'content',
                'category'
            );

            if ($validation->isValid()) {

                if ($objNews->updateNews($validation->post, $id)) {
                    $upload = new Upload();

                    if ($upload->upload(NEWS_FOLDER)) {
                        // removing the old image if the new one is uploaded
                        if(is_file(NEWS_FOLDER.DIR_SEP.$news['image'])){
                            unlink(NEWS_FOLDER.DIR_SEP.$news['image']);
                        }

                        $objNews->updateNews(array('image' => $upload->names[0]), $id);
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
                        <h1 class="page-header">Редактирование новости</h1>
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
                                               value="<?php echo $form->textField('title', $news['title']); ?>" placeholder="Заголовок"
                                               class="form-control input-md" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="content">Текст новости</label>
                                        <?php echo $validation->validate('content'); ?>
                                        <textarea class="form-control" id="content" name="content"
                                                  placeholder="Новости..."
                                                  cols="" rows="5"><?php echo $form->textField('content', $news['content']); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category">Категория</label>
                                        <?php echo $validation->validate('category'); ?>
                                        <select id="category" name="category" class="form-control">
                                            <option value="">Выберите категорию</option>
                                            <?php if ( ! empty($categories)) { ?>
                                                <?php foreach ($categories as $cat) { ?>
                                                    <option value="<?php echo $cat['id']; ?>"
                                                        <?php echo $form->selectField('category', $cat['id'], $news['category']); ?>>
                                                        <?php echo Check::encodeHTML($cat['name']); ?>
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



