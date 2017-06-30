

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">

					  <div class="form-group">
                          <?php
                          echo form_open('login');
                          echo form_label('Email','mail');
                          echo form_input('mail','','class="form-control" id="mail" placeholder="Adresse Email"')

                          ?>
					  </div>
                      <div class="form-group">
                            <?php
                            echo form_label('Password','password');
                            echo form_input('password','','class="form-control" id="password" placeholder="Password"')
                            ?>
                      </div>
                            <?php echo form_submit('login', 'Login', 'class="btn btn-primary"') ?>
					  <a href="<?php echo site_url('register') ?>" class="btn btn-link">S'inscrire </a>
                      <?php echo form_close()?>
					</form>

				</div>
			</div>
		</div>
	<div class="col-md-4"></div>
	</div>
	</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<? echo base_url('assets/js/jquery.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<? echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
