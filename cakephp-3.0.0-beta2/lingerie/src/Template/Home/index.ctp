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
                        <?php foreach($categoriesParent as $parent) :?>
                            <ul class="nav navbar-nav">
                                <li class="dropdown mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent->name_categorie ?> <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                                    <ul class="dropdown-menu mega-dropdown-menu<?php echo $i; $i++; ?> row">
                                        <?php foreach($categoriesChild as $child): ?>
                                        <?php if($child->id_parent == $parent->id_categorie){ ?>
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header"><?php echo $child->name_categorie ?></li>
                                                    <?php foreach( $categoriesSub as $sub) :?>
                                                        <?php if($child->id_categorie == $sub->id_parent) : ?>
                                                            <li><a href="#"><?php echo $sub->name_categorie ?></a></li>
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
                        </div><!-- /.nav-collapse -->
                    </nav>
				</div>
            </div>
        </div>
	</header>

<div id="main">
	<div class="container">

        <div class="row">
            <div class="col-md-4 poster" >
                <img src="/webroot/img/soutien-gorge.jpg"  />
            </div>
            <div class="col-md-4 poster" >
                <img src="/webroot/img/pyjama-femme2.jpg"  />
            </div>
            <div class="col-md-4 poster" >
                <img src="/webroot/img/collant.jpg"  />
            </div>
        </div>
        <div class="row">
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="jcarousel">
                <ul>
                    <?php foreach($offres as $key => $value) : ?>
                        <li><img src="<?php echo $value->longimage; ?>" /></li>
                    <?php endforeach; ?>
                </ul>
                     </div>
                </div><!-- /.carousel -->
        </div>
        <div class="row">
            <div class="col-md-4 poster" >
                <img src="/webroot/img/collant.jpg"  />
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="/webroot/js/carrousel.js"></script>

    <script>
        $(function() {
            $('.jcarousel')
                    .jcarousel({
                        // Core configuration goes here
                    })
                    .jcarouselAutoscroll({
                        interval: 1000,
                        target: '+=1',
                        autostart: true,
                        wrap: 'circular'
                    })
            ;
        });
    </script>