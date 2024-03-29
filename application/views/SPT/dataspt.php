<div id="page-wrapper">
  <div class="col-lg-12">
	<section class="content-header">
        <h1>Surat Perintah Tugas
        </h1>
        <ol class="breadcrumb">
        	<li><a href=""><i class="fa fa-list-ol"></i></a></li>
        	<li class="active">Surat Perintah Tugas</li>
        </ol>
	</section>

<section class="content">
	<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title text-center">Data Surat Perintah Tugas</h3>
			<div class="pull-right">
				<?php if($this->fungsi->user_login()->level == 1) { ?>
				<a href="<?php echo base_url();?>surattugas/formtambahspt"" class="btn btn-primary btn-flat">
					<i class="glyphicon glyphicon-plus"></i> Create
				</a>
				  <?php } ?>
			</div>
		</div>
		<br>
		<div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
			<thead>
			<tr>
				<th width="5%" >No</th>
				<th width="20%">No ST</th>
				<th width="30%">NIP</th>
				
				<th width="20%">Nama Tugas</th>	
				<th width="40%">Pilihan</th>	
			</tr>
			</thead>
			</center>								 
			<tbody>
			<?php
			$no  = 1;
			foreach ($daftarst as $data) :
			?>
			<tr>
				<td align="left"><?php echo $no++;?></td>
				<td align="left"><?php echo $data['no_st']; ?></td>
				<td align="left"><?php echo $data['NIP']; ?></td>	
			
				<td align="left"><?php echo $data['nama_tugas']; ?></td>	
				<td align="left"> 

					<a title = "Cetak SPT" class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url()?>surattugas/cetak_spt/<?php echo $data['id_st'];?>"> 
					<span class="glyphicon glyphicon-file"></span></a>

					<a title = "Update ST" class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url() ?>surattugas/update_st/<?php echo $data['id_st'];?>">
					<span class="glyphicon glyphicon-edit"></span></a> 
					
					<a title = "hapus" class="btn btn-danger btn-xs btn-flat" onclick="return confirmDialog()" href="<?php echo base_url()?>surattugas/delete/<?php echo $data['id_st'];?>"> 
					<span class="glyphicon glyphicon-trash"></span></a>
					</td>
			<?php
			endforeach;
			?>
			</tbody>
		</table>
	</div>
    </div>
    </div>
    </section>
</div>

<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>


        
    




	


