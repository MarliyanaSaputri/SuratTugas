<div id="page-wrapper">
  <div class="col-lg-12">
	<section class="content-header">
        <h1>Dinas Luar
        </h1>
        <ol class="breadcrumb">
        	<li><a href=""><i class="fa fa-plane"></i></a></li>
        	<li class="active">Data Dinas Luar</li>
        </ol>
	</section>

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
							$tgl_pelaksanaan= $data['tgl_pelaksanaan'];
							$tgl_pelaksanaan =  date("d/m/Y",strtotime($tgl_pelaksanaan));

							$tgl_akhir= $data['tgl_akhir'];
							$tgl_akhir =  date("d/m/Y",strtotime($tgl_akhir));

						?>
						<tr>
							<td align="left"><?php echo $no++;?></td>
							<td align="left"><?php echo $data['no_st']; ?></td>
							<td align="left"><?php echo $data['NIP']; ?></td>
							<td align="left"><?php echo $tgl_pelaksanaan. " s/d " .$tgl_akhir; ?></td>			
							<td align="left"><?php echo $data['daerah_tujuan']; ?></td>	
							<td align="left"><?php echo $data['maksud_tujuan']; ?></td>
							<td align="left">
								<a title = "Cetak DL" class="btn btn-danger" href="<?php echo base_url() ?>DinasLuar/cetak/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-file"></span></a>
								<a title = "Edit DL" class="btn btn-danger " href="<?php echo base_url() ?>DinasLuar/update/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-edit"></span></a>
								<a title = "Delete DL" class="btn btn-danger btn-xs btn-flat" onclick="return confirmDialog()"  href="<?php echo base_url() ?>DinasLuar/delete/<?php echo $data['id_dl'];?>"><span class="glyphicon glyphicon-trash"></span></a>
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