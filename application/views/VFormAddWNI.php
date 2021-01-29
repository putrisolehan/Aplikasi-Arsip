<form action="<?php echo site_url('Welcome/AddDataWNI'); ?>" method="post">
	<table>
		<h4>Tambahkan data!</h4>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="text" name="nik">
		</td>
	</tr>
	<tr>
		<td>Tanggal Arsip</td>
		<td>:</td>
		<td>
			<input type="text" name="tgl_masuk">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input type="text" name="nama">
		</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>:</td>
		<td>
			<input type="text" name="ttl">
		</td>
	</tr>
	<tr>
		<td>Nomor Kotak</td>
		<td>:</td>
		<td>
			<input type="text" name="no_kotak">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>


