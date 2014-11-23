<?php echo $this->element('header') ?>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="main">
    <div class="container">

        <div class="row">
            <figure>
                <div class="col-md-4 poster" >
                    <img src="<?php echo $assetImg; ?>soutien-gorge.jpg"  />
                    <figcaption>First example caption</figcaption>
                </div>
            </figure>

            <figure>
                <div class="col-md-4 poster" >
                    <img src="<?php echo $assetImg; ?>pyjama-femme2.jpg"  />
                    <figcaption>First example caption</figcaption>
                </div>
            </figure>

            <figure>
                <div class="col-md-4 poster" >
                    <img src="<?php echo $assetImg; ?>collant.jpg"  />
                    <figcaption>
                        <h3>Ne laissez pas filer  l'occasion</h3>
                        Toutes les promos sur les lots de collants
                    </figcaption>
                </div>
            </figure>
        </div>
        <div class="row">
            <!-- Carousel
            ================================================== -->
            <div class="responsive">
                <?php foreach( $offres as $key => $item): ?>
                <div><img src="<?php echo $item->imagecache; ?>" /></div>
                <?php endforeach; ?>
            </div>



        </div>
        <div class="row">
            <figure>
                <div class="col-md-4 poster" >
                    <img src="<?php echo $assetImg; ?>collant.jpg"  />
                    <figcaption>First example caption</figcaption>
                </div>
            </figure>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $assetJs; ?>slick.min.js"></script>
<script type="text/javascript">
    $('.responsive').slick({
        autoplay:true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        centerMode: true,
        variableWidth: true,
        adaptiveHeight: true
    });
</script>