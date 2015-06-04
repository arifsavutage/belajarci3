<div class="konten">
	<h1>Mengubah Berita</h1>
	
	<?php
		require_once "tinymce.php";
	?>
	
	<?php echo validation_errors();?>
	<form name="form1" method="post" action="<?php echo base_url();?>admin/berita/edit" class="myform">
	<p>
		<label for="judul">Judul berita</label>
		<input name="judul" type="text" id="judul" value="<?php echo $detail['judul'];?>" size="70">
		</p>
		<p>
		<label for="ringkasan">Ringkasan berita</label>
		<textarea name="ringkasan" id="ringkasan" cols="45" rows="5"><?php echo $detail['ringkasan'];?></textarea>
		</p>
		<p>
		<label for="isi">Isi berita</label>
		<textarea name="isi" id="isi" cols="45" rows="5"><?php echo $detail['isi'];?></textarea>
		</p>
		<p>
		<label for="status_berita">Status berita</label>
		<select name="status_berita" id="status_berita">
			<option value="Publish" <?php if($detail['status_berita']=='Publish') echo 'selected';?>>Publikasikan</option>
			<option value="Draft" <?php if($detail['status_berita']=='Draft') echo 'selected';?>>Simpan sebagai draft</option>
		</select>
		<input name="id_user" type="hidden" id="id_user" value="1">
		<input name="id_berita" type="hidden" id="id_berita" value="<?php echo $detail['id_berita'] ?>">
		</p>
		<p>
		<input type="submit" name="submit" id="submit" value="Edit">
		<input type="reset" name="submit2" id="submit2" value="Reset">
		</p>
	</form>
	<p>&nbsp;</p>
</div>