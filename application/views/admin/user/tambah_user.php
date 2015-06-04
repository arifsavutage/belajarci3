<div class="konten">
	<h1>Menambah User</h1>
	<?php echo validation_errors();?>
	<form name="form1" method="post" action="<?php echo base_url();?>admin/user/tambah" class="myform">
	<p>
		<label for="nama">Nama Lengkap</label>
		<input name="nama" type="text" id="nama" size="70">
		</p>
		<p>
		<label for="email">E-mail Aktif</label>
		<input name="email" type="text" id="email" size="70">
		</p>
		<p>
		<label for="uname">User Name</label>
		<input name="uname" type="text" id="uname" size="70">
		</p>
		<p>
		<label for="pass">Password</label>
		<input name="pass" type="password" id="pass" size="70">
		</p>
		<p>
		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="submit2" id="submit2" value="Reset">
		</p>
	</form>
	<p>&nbsp;</p>
</div>