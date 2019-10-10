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
          <h3 class="box-title">Data Surat Perintah Tugas</h3>
			
        </div>


	</section>
	<section class="content">
		<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title text-center">Data Surat Perintah Tugas</h3>
			</div>
			<br>
				<div class="box-body table-responsive">
	              <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th width="12%">No ST</th>
							<th width="17%">NIP</th>
							<th width="10%">Kode Bidang</th>
							<th width="20%">Nama Tugas</th>
							<th width="10%">Tanggal Pembuatan</th>
							<th width="7%">Pilihan</th>	
						</tr>
					</thead>								 
					<tbody>
						<?php
						$no  = 1;
						foreach ($tambahdl as $data) :
						?>
						<tr>
							<td align="left"><?php echo $no++;?></td>
							<td align="left"><?php echo $data['no_st']; ?></td>
							<td align="left"><?php echo $data['NIP']; ?></td>
							<td align="left"><?php echo $data['kd_bid']; ?></td>					
							<td align="left"><?php echo $data['nama_tugas']; ?></td>
							<td align="left"><?php echo $data['tgl_pembuatan']; ?></td>
							<td align="left"> 
								<a title = "Tambah DL" class="btn btn-warning btn-xs btn-flat" href="<?php echo base_url() ?>DinasLuar/formtambah/<?php echo $data['id_st'];?>"><span class="glyphicon glyphicon-edit"></span></a>
							</td>
						</tr>

						<?php
						endforeach;
						?>
					</tbody>
					
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