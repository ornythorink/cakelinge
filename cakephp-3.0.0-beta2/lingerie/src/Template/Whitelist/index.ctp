<?php

?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only" data-replace-tmp-key="6c7195551da0802a39b5e2bc7187df54"><os-p key="6c7195551da0802a39b5e2bc7187df54">Basculer la navigation</os-p></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" data-replace-tmp-key="7adea0d9c77aabccd8bb67ae0a832d59"><os-p key="7adea0d9c77aabccd8bb67ae0a832d59">Nom du projet</os-p></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-replace-tmp-key="2938c7f7e560ed972f8a4f68e80ff834"><os-p key="2938c7f7e560ed972f8a4f68e80ff834">Dashboard</os-p></a></li>
            <li><a href="#" data-replace-tmp-key="f4f70727dc34561dfde1a3c529b6205c"><os-p key="f4f70727dc34561dfde1a3c529b6205c">Settings</os-p></a></li>
            <li><a href="#" data-replace-tmp-key="cce99c598cfdb9773ab041d54c3d973a"><os-p key="cce99c598cfdb9773ab041d54c3d973a">Profil</os-p></a></li>
            <li><a href="#" data-replace-tmp-key="6a26f548831e6a8c26bfbbd9f6ec61e0"><os-p key="6a26f548831e6a8c26bfbbd9f6ec61e0">Aide</os-p></a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="{{__2a37324bb4c331c859044121df3f576b__}}" data-translatable-string="Search..." data-translatable-key="2a37324bb4c331c859044121df3f576b">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        
        <!-- begin sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#" data-replace-tmp-key="3b878279a04dc47d60932cb294d96259"><os-p key="3b878279a04dc47d60932cb294d96259">Overview</os-p></a></li>
            <li><a href="#" data-replace-tmp-key="c91c7b93c28cd18741b71f727ee81ee3"><os-p key="c91c7b93c28cd18741b71f727ee81ee3">Reports</os-p></a></li>
            <li><a href="#" data-replace-tmp-key="a768caa988605a2846599cf7e2d0c26a"><os-p key="a768caa988605a2846599cf7e2d0c26a">Analytics</os-p></a></li>
          </ul>
        </div>
        <!-- end sidebar -->
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" data-replace-tmp-key="2938c7f7e560ed972f8a4f68e80ff834"><os-p key="2938c7f7e560ed972f8a4f68e80ff834">Dashboard</os-p></h1>

          <h2 class="sub-header" data-replace-tmp-key="7b058d2a2bc435374b0243f59844e3b1"><os-p key="7b058d2a2bc435374b0243f59844e3b1">Section title</os-p></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th data-replace-tmp-key="bf50d5e661106d0abe925af3c2e6f7e7"><os-p key="bf50d5e661106d0abe925af3c2e6f7e7">Affilié</os-p></th>
                  <th data-replace-tmp-key="bf50d5e661106d0abe925af3c2e6f7e7"><os-p key="bf50d5e661106d0abe925af3c2e6f7e7">Catégorie</os-p></th>
                  <th data-replace-tmp-key="bf50d5e661106d0abe925af3c2e6f7e7"><os-p key="bf50d5e661106d0abe925af3c2e6f7e7">Action</os-p></th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($produits as $key => $value):?>             
                <tr>
                  <td><?php echo $value->boutique; ?></td>
                  <td data-replace-tmp-key="db6ff2ffe2df7b8cfc0d9542bdce27dc"><os-p key="db6ff2ffe2df7b8cfc0d9542bdce27dc"><?php echo $value->categorie_marchand; ?></os-p></td>
                  <td data-replace-tmp-key="e78f5438b48b39bcbdea61b73679449d"><os-p key="e78f5438b48b39bcbdea61b73679449d"><a id="whiteliste-<?php echo $value->id_produit; ?>-<?php $value->source; ?>-<?php $value->boutique; ?>" class="whiteliste"  >Whitelister</a></os-p></td>
                </tr>
               <?php endforeach; ?> 
              </tbody>
            </table>         

            <ul class="pagination pagination-lg pager" id="myPager">                
            <?php 
            
                // the 'first' page button
                echo $this->Paginator->first("First");
                 
                // 'prev' page button,
                // we can check using the paginator hasPrev() method if there's a previous page
                // save with the 'next' page button
                if($this->Paginator->hasPrev()){
                    echo $this->Paginator->prev("Prev");
                }
                 
                // the 'number' page buttons
                echo $this->Paginator->numbers(array('modulus' => 10));
                 
                // for the 'next' button
                if($this->Paginator->hasNext()){
                    echo $this->Paginator->next("Next");
                }
                 
                // the 'last' page button
                echo $this->Paginator->last("Last");
            ?> 
            </ul>   
        
            ?>              
          </div>
        </div>
      </div>   
    </div>
    

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script class="os-tdn" type="text/javascript" src="//s3.amazonaws.com/oneskyapp.static/in-context/loader.min.js"></script><script type="text/javascript">OneSkyClientConfig = {apiKey: "U9aDnPz49ouz8J2CjMcAz74GppvQBGym",project: 19540,translate: true,locale: "fr",xdReceiver: "http://www.oneskyapp.com/docs/xd_receiver.html"};</script>

    