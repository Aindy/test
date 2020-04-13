<?php

if (Login::loggedIn(Login::$admin_login)){
    Check::redirect(Login::$dashboard_admin);
}

$form = new Form();
$validation = new Valid($form);

// Login form
if($form->isPost('email')){ // if email has been posted
    $admin = new Admin();
    if($admin->isUser(
        $form->getPost('email'),
        $form->getPost('password')
    )
    ){
        Login::adminLogin($admin->admin_id, URL::getRedirectURL());
    } else {
        $validation->addErrors('login');
    }
}

// Creating a password for the admin
//echo Login::encrypt('edil');

require_once('template/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Вход в Admin Panel</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <?php echo $validation->validate('login'); ?>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Пароль" name="password" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Войти</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('template/footer.php'); ?>
