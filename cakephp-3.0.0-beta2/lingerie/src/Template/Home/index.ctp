<?php echo $this->element('header') ?>

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