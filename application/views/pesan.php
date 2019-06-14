<?php foreach ($pesans as $key => $pesan) : ?>
	
	<a href="<?php echo site_url('index/delete/'.$pesan['id']); ?>" 
       onclick = "return confirm('Hi Programmer Handal, Yakin Mau Hapus ?')"> Hapus</a><br>
 
	<?php echo $pesan['nama']; ?><br>
	<?php echo $pesan['email']; ?><br>
	<?php echo $pesan['nohp']; ?><br>
	<?php echo $pesan['pesan']; ?><br><br><br>
<?php endforeach; ?>