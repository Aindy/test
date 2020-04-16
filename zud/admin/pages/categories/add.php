<?php
$form = new Form();
$validation = new Valid($form);


if($form->isPost('name')) {

    $validation->expected = array('name');
    $validation->required = array('name');

    $objNews = new News();

    if($objNews->sameCategory($form->getPost('name'))){
        $validation->addErrors('category_exists');
    }

    if($validation->isValid()) {

        if($objNews->addCategory($form->getPost('name'))) {
            Check::redirect(URL::getURL(array('action', 'id')).'&action=add-success');
        } else {
            Check::redirect(URL::getURL(array('action', 'id')).'&action=add-failed');
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
                <h1 class="page-header">Добавление категории</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="name">Категория</label>
                                <?php echo $validation->validate('name'); ?>
                                <?php echo $validation->validate('category_exists'); ?>
                                <input id="name" name="name" type="text" value="<?php echo $form->textField('name'); ?>" class="form-control input-md" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Добавить</button>
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

<?php require_once('template/footer.php'); ?>



