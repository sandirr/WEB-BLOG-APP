<?php $this->load->view('partials/header'); ?>


    <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/secure2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Login Admin</h1>
      
            </div>
          </div>
        </div>
      </div>
    </header>

<?php echo $this->session->flashdata('message'); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">

				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="username" >
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password" >
					</div>
					<div class="form-group">
						<input  type="checkbox" name="remember" >
						<label>Ingat Saya</label>
					</div>
	

							<input  class="btn btn-primary" type="submit" name="submit" style='border-radius: 10px;'>
							
				</form>
			</div>
		</div>
	</div>
<?php $this->load->view('partials/footer'); ?>