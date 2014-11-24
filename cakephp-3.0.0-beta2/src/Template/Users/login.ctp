    <!-- Custom styles for this template -->
    <?= $this->Html->css('login.css') ?>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
									<?= $this->Flash->render('auth') ?>
									<?= $this->Form->create() ?>
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
								        <?= $this->Form->input('username', array('label' => '', 'class' => 'form-control' , 'placeholder' => 'Username'  , 'id' => 'username') ) ?>
								        <?= $this->Form->input('password', array('label' => '', 'class' => 'form-control' , 'placeholder' => 'Password'  , 'id' => 'password') ) ?>
                                        <br></br>
									<?= $this->Form->button(__('Se Connecter') , array( 'label' => '', 'class' => 'btn btn-lg btn-success btn-block', 'id' => 'login')); ?>
									<?= $this->Form->end() ?>
                                   </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
