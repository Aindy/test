<?php

$newCompany = new Company();
$business = $newCompany->getCompany();

if(!empty($business)){

    $form = new Form();
    $validation = new Valid($form);

    if($form->isPost('name')){
        $validation->expected = array(
            'name',
            'address',
            'phone',
            'email',
            'website'
        );

        $validation->required = array(
            'name',
            'address',
            'phone',
            'email'
        );

        $validation->spec_field = array(
            'email' => 'email'
        );

        $fields = $form->getPostArray($validation->expected);

        if($validation->isValid()){
            if($newCompany->updateCompany($fields)){
                Check::redirect(URL::getURL(array('action', 'id')).'&action=update-success');
            } else {
                Check::redirect(URL::getURL(array('action', 'id')).'&action=update-failed');
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
                    <h1 class="page-header">Обновление компании</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Название</label>
                                    <?php echo $validation->validate('name'); ?>
                                    <input id="name" name="name" type="text" value="<?php echo $form->textField('name', $business['name']); ?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="address">Адрес</label>
                                    <?php echo $validation->validate('address'); ?>
                                    <textarea id="address" name="address" cols="" rows="4" class="form-control input-md"><?php echo $form->textField('address', $business['address']); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Телефон</label>
                                    <?php echo $validation->validate('phone'); ?>
                                    <input id="phone" name="phone" type="text" value="<?php echo $form->textField('phone', $business['phone']); ?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <?php echo $validation->validate('email'); ?>
                                    <input id="email" name="email" type="text" value="<?php echo $form->textField('email', $business['email']); ?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="website">Вебсайт</label>
                                    <?php echo $validation->validate('website'); ?>
                                    <input id="website" name="website" type="text" value="<?php echo $form->textField('website', $business['website']); ?>" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Сохранить</button>
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
?>
