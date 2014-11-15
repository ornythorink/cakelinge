<?php echo $this->element('header') ?>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="main">
	<div class="container">

        <div class="row">
            <div class="col-md-4 poster" >
                <img src="<?php echo $assetImg; ?>soutien-gorge.jpg"  />
            </div>
            <div class="col-md-4 poster" >
                <img src="<?php echo $assetImg; ?>pyjama-femme2.jpg"  />
            </div>
            <div class="col-md-4 poster" >
                <img src="<?php echo $assetImg; ?>collant.jpg"  />
            </div>
        </div>
        <div class="row">
        <!-- Carousel
        ================================================== -->
            <div class="carousel" data-mixed>
                <a class="prev" data-prev></a>
                <ul>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/1.jpg" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/2.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/3.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/4.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/5.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/6.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                    <li>
                        <div class="wrap"><figure><img data-src="<?php echo $assetImg; ?>slides/thumbnails/7.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /></figure></div>
                    </li>
                </ul>
                <a class="next" data-next></a>
                <a class="badge"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 poster" >
                <img src="<?php echo $assetImg; ?>collant.jpg"  />
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="<?php echo $assetJs; ?>carrousel.js"></script>

<script type="text/javascript">
    $('.carousel[data-mixed] ul').anoSlide(
            {
                items: 5,
                speed: 500,
                prev: 'a.prev[data-prev]',
                next: 'a.next[data-next]',
                lazy: true,
                delay: 100
            })
</script>