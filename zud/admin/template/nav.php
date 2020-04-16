<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Admin Panel</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <?php
                // if user logged in
                if(Login::loggedIn(Login::$admin_login)){
                    echo '<li><a href="#"><i class="fa fa-user fa-fw"></i> Admin</a></li>
                          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a></li>
                          <li class="divider"></li>';
                    echo '<li><a href="?page=logout"><i class="fa fa-sign-out fa-fw"></i> Выйти</a></li>';
                } else{
                    echo '<li><a href="?page=index"><i class="fa fa-sign-in fa-fw"></i> Войти</a></li>';
					}
                ?>

            </ul>
        </li>
    </ul>

