<h3 class="box-title">Arsip WNA</h3>

              <a href="<?php echo site_url('Welcome/VFormAddWNA'); ?>">Add</a>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" border="1px">
	<tr>
		<th>Niora</th>
		<th>Tanggal Arsip</th>
		<th>Nomor Kotak</th>
		<th>Nama</th>
		<th>Tempat, Tanggal Lahir</th>
		<th>Alamat</th> 
		<th>Kewarganegaraan</th>
		<th>Sponsor</th>
	</tr>
	<?php
	if(!empty($DataWNA))
	{ 
		foreach($DataWNA as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->niora; ?></td>
		<td><?php echo $ReadDS->tgl_masuk; ?></td>
		<td><?php echo $ReadDS->no_kotak; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->ttl; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td><?php echo $ReadDS->kewarganegaraan; ?></td>
		<td><?php echo $ReadDS->sponsor; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataWNA/'.$ReadDS->niora.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataWNA/'.$ReadDS->niora) ?>">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>
