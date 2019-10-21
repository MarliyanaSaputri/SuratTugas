<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
          <h1>DISKOMINFO</h1>
    <!-- Main content -->
  <section class="content">
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Dinas Luar</h3>
			
        </div>


	</section>
	<section class="content">
		<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title text-center">Data Dinas Luar</h3>
			</div>
			<br>
				<div class="box-body table-responsive">
	              <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
					<thead>
						<tr>
							<th width="3%">No</th>
							<th width="15%">No ST</th>
							<th width="17%">NIP</th>
							<th width="20%">Tanggal Pelaksanaan</th>
							<th width="10%">Daerah Tujuan</th>
							<th width="15%">Maksud dan Tujuan</th>
							<th width="15%">Pilihan</th>	
						</tr>
					</thead>
					</center>								 
					<tbody>
						<?php
						$no  = 1;
						foreach ($daftardl as $data) :
						?>
						<tr>
							<td align="left"><?php echo $no++;?></td>
							<td align="left"><?php echo $data['no_st']; ?></td>
							<td align="left"><?php echo $data['NIP']; ?></td>
							<td align="left"><?php echo $data['tgl_pelaksanaan']. " s/d " .$data['tgl_akhir']; ?></td>			
							<td align="left"><?php echo $data['daerah_tujuan']; ?></td>	
							<td align="left"><?php echo $data['maksud_tujuan']; ?></td>
							<td align="left">
								<a title = "Cetak DL" class="btn btn-danger" href="<?php echo base_url() ?>DinasLuar/cetak/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-file"></span></a>
								<a title = "Edit DL" class="btn btn-danger " href="<?php echo base_url() ?>DinasLuar/update/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-edit"></span></a>
								<a title = "Delete DL" class="btn btn-danger btn-xs btn-flat" href="<?php echo base_url() ?>DinasLuar/delete/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>

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