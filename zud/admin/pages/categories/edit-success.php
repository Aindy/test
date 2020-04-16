<?php

$url = URL::getURL(array('action', 'id'));

require_once('template/header.php');
require_once('template/nav.php');
require_once('template/sidebar.php');

?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Успешное редактирование категории</h1>
                </div>
            </div>
            <p class="text-success">Категория была успешна изменена.</p>
            <p><a href="<?php echo $url; ?>">Назад к списку категорий</a></p>
        </div>
    </div>

<?php require_once('template/footer.php'); ?>