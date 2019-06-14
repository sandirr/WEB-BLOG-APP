<?php $this->load->view('partials/header'); ?>

<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Edit Artikel</h1>
      
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
						<input class="form-control" type="text" name="title" value="<?php echo $blog['title']; ?>" required>
					</div>
					<div class="form-group">
						<label>Content</label>
						<textarea class="form-control" cols="30" rows="10" name="content" id='editor2' required>
							<?php echo $blog['content']; ?>
						</textarea>
						<script>
						    CKEDITOR.replace( 'editor2' );
						</script>
					</div>
					<div class="form-group">
						<label>Contents blog</label>
						<textarea class="form-control" cols="30" rows="10" name="contents" required>
							<?php echo $blog['contents']; ?>
						</textarea>
					</div>
					<div class="form-group">
						<label>Url</label>
						<input class="form-control" type="text" name="url" value="<?php echo $blog['url']; ?>" required>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input class="form-control" type="text" name="kategori" value="<?php echo $blog['kategori']; ?>" required>
					</div>

					<div class="form-group">
						<label>Ubah Gambar</label>
						<input class="form-control" type="file" name="cover" value="<?php echo $blog['cover']; ?>" >
						<?php $cover = base_url().'uploads/'.$blog['cover']; ?>
						<img src="<?php echo $cover; ?>">
					</div>

							<input  class="btn btn-primary" type="submit" name="submit">
							
				</form>
			</div>
		</div>
	</div>
<?php $this->load->view('partials/footer'); ?>