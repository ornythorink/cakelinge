    <?php echo $this->element('navbar') ?>
    
    <div class="container-fluid">
      <div class="row">
        
        <?php echo $this->element('sidebar') ?>
        
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
                <tr id="ligne-<?php echo $value->id_produit; ?>" >
                  <td><?php echo $value->boutique; ?></td>
                  <td data-replace-tmp-key="db6ff2ffe2df7b8cfc0d9542bdce27dc"><os-p key="db6ff2ffe2df7b8cfc0d9542bdce27dc"><?php echo $value->categorie_marchand; ?></os-p></td>
                  <td data-replace-tmp-key="e78f5438b48b39bcbdea61b73679449d"><os-p key="e78f5438b48b39bcbdea61b73679449d"><a id="whiteliste-<?php echo $value->id_produit; ?>-<?php echo $value->source; ?>-<?php echo $value->boutique; ?>" class="whiteliste"  >Whitelister</a></os-p></td>
                </tr>
               <?php endforeach; ?> 
              </tbody>
            </table>
            <?php echo $this->element('pagination') ?>
          </div>
        </div>
      </div>   
    </div>    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php $uri3 = $this->Url->build(array("controller" => "whitelist","action" => "updatecategories")); ?>
    <script>
        uri3 = <?php echo "'" . $uri3 . "'"  ?>;
    
        $(document).ready(function() {
          $(".whiteliste").click(function() {  
              var target = $(this).attr('id');
              var brokenstring = target.split('-');           
               
                $.post(uri3, { id:  brokenstring[1], source:  brokenstring[2], boutique: brokenstring[3] },
                   function(data) {
                      
                   });
               $("#ligne-" + brokenstring[1] ).remove(); 
          });
     });    
        
        
    </script>    
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script class="os-tdn" type="text/javascript" src="//s3.amazonaws.com/oneskyapp.static/in-context/loader.min.js"></script><script type="text/javascript">OneSkyClientConfig = {apiKey: "U9aDnPz49ouz8J2CjMcAz74GppvQBGym",project: 19540,translate: true,locale: "fr",xdReceiver: "http://www.oneskyapp.com/docs/xd_receiver.html"};</script>
    
        