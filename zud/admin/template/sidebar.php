<?php if(Login::loggedIn(Login::$admin_login)) { ?>

    <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <li class="sidebar-search">

                    <form action="" method="get">

                        <?php echo URL::getSearchParams(array('srch', Paging::$paging)); ?>

                        <div class="input-group custom-search-form">

                            <input type="text" name="srch" id="srch" value="<?php echo stripcslashes($srch); ?>" class="form-control" placeholder="Поиск...">

                            <span class="input-group-btn">

                                <button class="btn btn-default" type="submit">

                                    <i class="fa fa-search"></i>

                                </button>

                            </span>

                        </div>

                    </form>

                </li>

                <li>

                    <a href="?page=news" <?php echo Check::bootstrapActive(array('page' => 'news')); ?>><i class="fa fa-table fa-fw"></i> Новости</a>

                </li>

                 <li>

                    <a href="?page=projects" <?php echo Check::bootstrapActive(array('page' => 'projects')); ?>><i class="fa fa-table fa-fw"></i> Проекты</a>

                </li>

                <li>

                    <a href="?page=categories" <?php echo Check::bootstrapActive(array('page' => 'categories')); ?>><i class="fa fa-edit fa-fw"></i> Категории</a>

                </li>

                <li>

                    <a href="?page=industries" <?php echo Check::bootstrapActive(array('page' => 'industries')); ?>><i class="fa fa-edit fa-fw"></i> Отрасли</a>

                </li>

                <li>

                    <a href="?page=business" <?php echo Check::bootstrapActive(array('page' => 'business')); ?>><i class="fa fa-briefcase fa-fw"></i> Компания</a>

                </li>

            </ul>

        </div>

        <!-- /.sidebar-collapse -->

    </div>

<?php } else {?>

    &nbsp;

<?php } ?>



<!-- /.navbar-static-side -->

</nav>

