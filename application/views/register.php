<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Register</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   </head>

   <body>
      <div class="container" style="margin-top:100px;">
         <div class="row">
            <div class="col-md-4" "page-header">
                <h2> S'enregistrer </h2>
             </div>
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-body">

                     <?php
                                       echo form_open('login');
                        ?>
                     <div class="form-group">
                        <?php
                           echo form_label('Nom','fullname');
                           echo form_input('fullname','','class="form-control" id="fullname" placeholder="Nom"')
                           ?>
                     </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Prenom','prenom');
                           echo form_input('prenom','','class="form-control" id="prenom" placeholder="Prenom"')
                           ?>
                     </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Username','username');
                           echo form_input('username','','class="form-control" id="username" placeholder="Pseudo"')
                           ?>
                     </div>

                    <div class="form-group">
                         <?php
                            echo form_label('Email','mail');
                            echo form_input('mail','','class="form-control" id="mail" placeholder="Adresse Email"')
                            ?>
                    </div>
                     <div class="form-group">
                        <?php
                           echo form_label('Password','password');
                           echo form_password('password','','class="form-control" id="password" placeholder="Password"')
                           ?>
                     </div>
            
                     <div class="form-group">
                        <?php
                           echo form_label('Description','description');
                           echo form_textarea('description','','class="form-control" id="desc" placeholder="Description"')
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
