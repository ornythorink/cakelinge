

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
                <div class="prod  col-xs-6 col-sm-3 product " id="<?php echo $item->id_produit;  ?>"  data-product="<?php echo $item->id_produit;  ?>">
                    <a class="prod-img" href="<?php echo $item->url;  ?>" target="_blank" >
                        <div class="imgsizer">
                            <img  src="<?php echo $item->imagecache  ?>" alt="" />
                            <div class="overlay"><?php echo $item->long_description; ?></div>
                        </div>
                    </a>
                    <div class="price login-box"  ><span><?php echo $item->prix;  ?><span class="euro">€</span></span>
                        <a  href="http://net-a-porter.com" target="_blank" class="url"><?php echo $item->store; ?></a>
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
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?php echo $assetJs; ?>taffy-min.js"></script>
    <script>
        $(function () {
            $('#menu2').metisMenu({
                toggle: false
            });
        });
    </script>
    <script src="<?php echo $assetJs; ?>metisMenu.js"></script>
    <script>
        var json = <?php echo $json; ?>;
        var products = TAFFY(json);

        /*var countChecked = function() {
           var n =  $( "input[type=checkbox][name='marque']:checked" ).val();
       };

        $( "input[type=checkbox][name='marque']" ).on( "click", countChecked );*/

        $(window).load(function(){
            (function( $ ){
                $.fn.valList = function(){
                    return $.map( this, function (elem) {
                        return elem.value || "";
                    }).join( "," );
                };
            })( jQuery );

            $( "input[type=checkbox][name='marque']" ).click(function(){
                //alert($( "input[type=checkbox][name='marque']:checked" ).valList());
                $( "div[]").remove();
            });
        });

    </script>