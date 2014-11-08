

<?php echo $this->element('header') ?>

<div id="main">
    <div class="container">

        <div class="row">
<?php

        foreach($offres as $key => $value): ?>

            <img src="
             <?php
             if($value->imagecache){
                echo $value->imagecache;
             } else {
                echo $value->petiteimage;
             }
             ?>
             "
            />
<?php
        echo $value->id_produit;
        endforeach;

?>
        </div>

    </div>
</div>