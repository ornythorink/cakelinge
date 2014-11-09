<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">MegaMenu</a> -->
    </div>

    <div class="collapse navbar-collapse js-navbar-collapse">
        <?php $i=1; ?>
        <?php foreach($categoriesParent as $parent) : ?>
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent->name_categorie ?>
                    <span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu<?php echo $i; $i++; ?> row">
                    <?php foreach($categoriesChild as $child): ?>
                    <?php if($child->id_parent == $parent->id_categorie){ ?>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a hraf="
                                                                <?php
                                                                echo $this->Url->build(
                                                                [
                                                                'controller' => 'categorie',
                                                                'action' => 'index',
                                                                '?' => ['term' => $child->tag, 'offset' => 0, 'id' => $child->id_categorie],
                                                                ]
                                                                );
                                                                ?>"
                                    ><?php echo $child->name_categorie ?></a></li>
                            <?php foreach( $categoriesSub as $sub) :?>
                            <?php if($child->id_categorie == $sub->id_parent) : ?>
                            <li><a href="
                                                                        <?php
                                                                        echo $this->Url->build(
                                                                        [
                                                                        'controller' => 'categorie',
                                                                        'action' => 'index',
                                                                        '?' => ['term' => $sub->tag, 'offset' => 0, 'id' => $sub->id_categorie],
                                                                        ]
                                                                        );
                                                                        ?>"
                                    ><?php echo $sub->name_categorie ?></a></li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <li class="divider"></li>
                        </ul>
                        <?php } ?>
                        <?php endforeach; ?>





                </ul>
            </li>
        </ul>
        <?php endforeach;?>
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lingerie de nuit                    <span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu2 row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a hraf="
                                                                /index.php/categorie?term=lingerie-nuit-femme&amp;offset=0&amp;id=6">Femme</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=nuisette&amp;offset=0&amp;id=7">Nuisette</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=chemise-de-nuit-femme&amp;offset=0&amp;id=27">Chemise de nuit</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=pyjama-femme&amp;offset=0&amp;id=28">Pyjama</a></li>
                            <li class="divider"></li>
                        </ul>

                    </li></ul>
            </li></ul>
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lingerie de nuit                    <span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu2 row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a hraf="
                                                                /index.php/categorie?term=lingerie-nuit-femme&amp;offset=0&amp;id=6">Femme</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=nuisette&amp;offset=0&amp;id=7">Nuisette</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=chemise-de-nuit-femme&amp;offset=0&amp;id=27">Chemise de nuit</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=pyjama-femme&amp;offset=0&amp;id=28">Pyjama</a></li>
                            <li class="divider"></li>
                        </ul>

                    </li></ul>
            </li></ul>
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lingerie de nuit                    <span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu2 row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a hraf="
                                                                /index.php/categorie?term=lingerie-nuit-femme&amp;offset=0&amp;id=6">Femme</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=nuisette&amp;offset=0&amp;id=7">Nuisette</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=chemise-de-nuit-femme&amp;offset=0&amp;id=27">Chemise de nuit</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=pyjama-femme&amp;offset=0&amp;id=28">Pyjama</a></li>
                            <li class="divider"></li>
                        </ul>

                    </li></ul>
            </li></ul>
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lingerie de nuit                    <span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu mega-dropdown-menu2 row">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"><a hraf="
                                                                /index.php/categorie?term=lingerie-nuit-femme&amp;offset=0&amp;id=6">Femme</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=nuisette&amp;offset=0&amp;id=7">Nuisette</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=chemise-de-nuit-femme&amp;offset=0&amp;id=27">Chemise de nuit</a></li>
                            <li><a href="
                                                                        /index.php/categorie?term=pyjama-femme&amp;offset=0&amp;id=28">Pyjama</a></li>
                            <li class="divider"></li>
                        </ul>

                    </li></ul>
            </li></ul>

                </li></ul>
        </li>
    </div><!-- /.nav-collapse -->
</nav>
