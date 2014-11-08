<div>
    <header id="top">
        <div id="header1">
            <div class="container">
                <div class="row">
                    <div id="logo" class="col-xs-2 col-sm-3">
                        <a href="/"><div class="logotypo"></div></a>
                    </div>
                    <div id="menu-top" class="col-xs-8 col-sm-5">
                        <ul class="nav nav-pills">
                            <li class="active"> <a href="/" class="login-box">Connexion</a> </li>
                            <li ><a href="tout-voir">Tout voir</a></li>
                        </ul>
                    </div>
                    <div id="menu-user" class="col-xs-1 col-sm-4">
                        <ul>
                            <li id="langues">
                                <span>fr</span>
                                <ul><li><a href="?lang=fr">fr</a></li><li><a href="?lang=en">en</a></li>
                                    <li><a href="?lang=de">de</a></li><li><a href="?lang=pt">pt</a>
                                    </li><li><a href="?lang=es">es</a></li></ul>							</li>
                            <li  id="avatar-top">
                                <a href="#">
									<span class="avatar login-box">
										<img src="core/img/avatar_grand.png" alt="" />
									</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="header2" class="container">
            <div class="row">
                <div id="info-top" class="col-xs-12 col-sm-7">
                    <div class="avatar pull-left">
                        <img src="/webroot/img/logo.png" alt="" />
                    </div>
                    <h1>Vanille-Fraise</h1>
                    <h2>
                        <span class="links"><a href="/">Comparateur de lingerie dédié aux femmes</a></span>
                    </h2>
                </div>
                <div id="partage-top" class="col-xs-0 col-sm-2 hidden-xs ">

                </div>
                <div id="social-top" class="col-xs-12 col-sm-3">
                    <div>
                        <div class="social-item">
                            <a href="/neeed/followers"><strong>10k</strong><span>Abonnés</span></a>
                        </div>
                        <div class="and">&</div>
                        <div class="social-item">
                            <a href="/neeed/following"><strong>334</strong><span>Abonnements</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="header3">
            <div class="container">
                <div id="header3-top" class="row">
                    <!-- <img src="/webroot/img/bandeau.png" /> -->
                    <?php echo $this->element('menu') ?>
                </div>
            </div>
        </div>
    </header>