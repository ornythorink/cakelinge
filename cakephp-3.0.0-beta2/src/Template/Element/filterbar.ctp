
<div id="sidebar-left" class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin:0;" >
    <form>
    <ul id="menu2" class="affix">
        <li class="active"> <a href="#">Marques<span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
            <?php foreach($marques as $marque):  ?>
                <li><span><a href="#"><input  type="checkbox"   name="marque" multiple value="<?php echo $marque; ?>" /> <?php echo $marque; ?></a></span></a></li>
            <?php endforeach; ?>
            </ul>
        </li>
        <li> <a href="#">Boutiques<span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul>
                <?php foreach($boutiques as $boutique):  ?>
                <li><span><a href="#"><input type="checkbox"  name="boutique" value="<?php echo $boutique; ?>" /> <?php echo $boutique; ?></a></span></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
    </form>
</div>