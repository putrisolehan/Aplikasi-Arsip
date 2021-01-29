<form action="<?php echo site_url('Welcome/UpdateDataWNA'); ?>" method="post">
<table>
		<h4>Update data</h4>
	<tr>
		<td>Niora</td>
		<td>:</td>
		<td>
			<input type="hidden" name="niora" value="<?php echo $detail['niora']; ?>">
			<input type="text" name="niora" value="<?php echo $detail['niora']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tanggal Arsip</td>
		<td>:</td>
		<td>
			<input type="text" name="tgl_masuk" value="<?php echo $detail['tgl_masuk']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nomor Kotak</td>
		<td>:</td>
		<td>
			<input type="text" name="no_kotak" value="<?php echo $detail['no_kotak']; ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>:</td>
		<td>
			<input type="text" name="ttl" value="<?php echo $detail['ttl']; ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
		</td>
	</tr>
	<tr>
		<td>Kewarganegaraan</td>
		<td>:</td>
		<td>
			<input type="text" name="kewarganegaraan" value="<?php echo $detail['kewarganegaraan']; ?>">
		</td>
	</tr>
	<tr>
		<td>Sponsor</td>
		<td>:</td>
		<td>
			<input type="text" name="sponsor" value="<?php echo $detail['sponsor']; ?>">
		</td>
	</tr>

	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
