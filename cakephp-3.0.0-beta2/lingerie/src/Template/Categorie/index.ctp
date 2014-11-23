

<?php echo $this->element('header') ?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="main">

    <div class="container">


        <div class="row">

            <?php echo $this->element('filterbar') ?>


            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <?php $i=0; ?>
                <?php foreach($offres as $key => $item): ?>
                <div itemscope itemtype="http://schema.org/Product" class="prod  col-xs-6 col-sm-3 product " id="<?php echo $item->id_produit;  ?>"  data-product="?php echo $item->id_produit;  ?>">
                    <a class="prod-img" href="<?php echo $item->url;  ?>" target="_blank" >
                        <div class="imgsizer">
                            <img itemprop="image" src="<?php echo $item->imagecache  ?>" alt="REDValentino | Sac à main en cuir Snow White ©Disney | NET-A-PORTER.COM" />
                            <div class="overlay"><?php echo $item->long_description; ?></div>
                        </div>
                    </a>
                    <div class="price login-box"  ><span><?php echo $item->prix;  ?><span class="euro">€</span></span>
                        <a itemprop="brand" href="http://net-a-porter.com" target="_blank" class="url"><?php echo $item->store; ?></a>
                    </div>
                    <span><?php echo $item->nom; ?></span>
                </div>
                <?php $i++; ?>
                <?php
                if (($i % 4) == 0){
                    echo "<hr>";
                }
                ?>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script class="os-tdn" type="text/javascript" src="//s3.amazonaws.com/oneskyapp.static/in-context/loader.min.js"></script>
    <script src="<?php echo $assetJs; ?>metisMenu.js"></script>
    <script>
        $(function () {
            $('#menu2').metisMenu({
                toggle: false
            });
        });
    </script>