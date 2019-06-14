<?php $this->load->view('partials/header'); ?>

<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/read.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Tambah Artikel</h1>
      
            </div>
          </div>
        </div>
      </div>
    </header>


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul</label>
						<input class="form-control" type="text" name="title" required>
					</div>
					<div class="form-group">	
						<label>Content</label>
						<textarea class="form-control" cols="30" rows="10" name="content" id='editor1' required>
						    
						</textarea>
						<script>
						    CKEDITOR.replace( 'editor1' );
						</script>
					</div>
					<div class="form-group">	
						<label>Contents blog</label>
						<textarea class="form-control" cols="30" rows="10" name="contents" required></textarea>
					</div>
					<div class="form-group">
						<label>Url</label>
						<input class="form-control" type="text" name="url" required>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input class="form-control" type="text" name="kategori" required>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input class="form-control" type="file" name="cover" required>
					</div>
	
						<input  class="btn btn-primary" type="submit" name="submit">
				
				</form>
			</div>
		</div>
	</div>
<?php $this->load->view('partials/footer'); ?>