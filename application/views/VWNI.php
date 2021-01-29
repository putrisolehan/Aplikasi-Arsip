<h3 class="box-title">Arsip WNI</h3>

              <a href="<?php echo site_url('Welcome/VFormAddWNI'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>NIK</th> 
		<th>Tanggal Arsip</th>
		<th>Nama</th>
		<th>Tempat, Tanggal Lahir</th>
		<th>Nomor Kotak</th>
		<th>Alamat</th>
	</tr>
	<?php
	if(!empty($DataWNI))
	{
		foreach($DataWNI as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nik; ?></td>
		<td><?php echo $ReadDS->tgl_masuk; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->ttl; ?></td>
		<td><?php echo $ReadDS->no_kotak; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataWNI/'.$ReadDS->nik.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataWNI/'.$ReadDS->nik) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
