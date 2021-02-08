<?php 
//notifikasi
if($this->session->flashdata('sukses')){
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
 }
 ?>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>NAMA</th>
 			<th>ALAMAT</th>
 			<th>TELEPHON</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no=1; foreach ($tengkulak as $tengkulak) { ?>
 		<tr>
 			<td><?php echo $no++ ?></td>
 			<td><?php echo $tengkulak->nama_tengkulak ?></td>
 			<td><?php echo $tengkulak->alamat ?></td>
 			<td><?php echo $tengkulak->telephon ?></td>
 		</tr>
 	<?php } ?>
 	</tbody>
 </table>
