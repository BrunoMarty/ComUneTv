
         <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-body">

                     <?php
                                       echo form_open('modifaccount');
                        ?>
                        <div class="form-group">
                        <h5> register </h5>
                        </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Nom','fullname');
                           echo form_input('fullname',$_SESSION['user']['nom_US'],'class="form-control" id="fullname"')
                           ?>
                     </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Prenom','prenom');
                           echo form_input('prenom',$_SESSION['user']['prenom_US'],'class="form-control" id="prenom" placeholder="Prenom"')
                           ?>
                     </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Pseudo','pseudo');
                           echo form_input('pseudo',$_SESSION['user']['pseudo_US'],'class="form-control" id="pseudo" placeholder="Pseudo"')
                           ?>
                     </div>

                    <div class="form-group">
                         <?php
                            echo form_label('Email','mail');
                            echo form_input('mail',$_SESSION['user']['mail_US'],'class="form-control" id="mail" placeholder="Adresse Email"')
                            ?>
                    </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Password','password');
                           echo form_password('password','','class="form-control" id="password" placeholder="Password"')
                           ?>
                     </div>

                     <?php echo form_submit('register', 'register', 'class="btn btn-primary"') ?>

                     <?php echo form_close()?>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-4"></div>
         </div>
      </div>
   </body>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="<? echo base_url('assets/js/jquery.min.js')?>"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="<? echo base_url('assets/js/bootstrap.min.js')?>"></script>
</html>
