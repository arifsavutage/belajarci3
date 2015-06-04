<div class="konten">
	<h1>Manajemen User</h1>
	
	<div align="right">
		<a href="<?php echo base_url();?>/admin/user/tambah" class="tambah">Tambah User</a>
	</div>
	
	<p>Daftar User</p>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="myform">
		<tr>
			<td>No.</td>
			<td>Nama User</td>
			<td>E-mail</td>
			<td>&nbsp;</td>
		</tr>
	<?php
	$x=1;
	foreach ($user as $list){
		echo "<tr>
			<td>$x</td>
			<td>$list[nama]</td>
			<td>$list[email]</td>
			<td>
				<a href='".base_url()."admin/user/edit'>Edit</a> |
				<a href='".base_url()."admin/user/delete'>Delete</a>
			</td>
		</tr>";
		
		$x++;
	}
	?>
	</table>
</div>