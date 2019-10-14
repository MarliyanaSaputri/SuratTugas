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
          <h3 class="box-title">Data Bidang</h3>
			<!-- <a style="margin-bottom:10px" href="<?php echo base_url() ?>datamaster/datamaster/insertmerk/" 
			class="btn btn-default pull-right"><span class='glyphicon glyphicon-plus'></span>  Tambah Data</a> -->
        </div>
	</section>
<section class="content">
	 <div class="col-xs-12">
		<div class="box">
		<div class="box-header">
			<h3 class="box-title text-center">Data Bidang</h3>
		<div class="col-lg-23">
			<!-- <a href="<?=site_url('bidang/add')?>" class="btn btn-primary btn-flat">
				<i class="glyphicon glyphicon-plus"></i> Create
			</a> -->
		</div>
		</div>
		
		<br>
		<div class="box-body table-responsive">
           <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
			<thead>
			<tr class="center">
				<th class="text-center">No</th>
				<th class="text-center">Kode Bidang</th>
				<th class="text-center">Nama Bidang</th>
				<!-- <th class="text-center">Pilihan</th> -->
			</tr>
			</thead>
			<tbody>
			<?php 
			$no  = 1;
			foreach ($daftarbidang as $data) :
			?>
			<tr>
				<td align="left"><?php echo $no++;?></td>
				<td align="left"><?php echo $data['kd_bid']; ?></td>
				<td align="left"><?php echo $data['nama_bidang']; ?></td>
			<!-- 	<td class="text-center" width="160px">	 -->		
				<!-- <a href="" class="btn btn-danger btn-xs btn-flat" >
					<i class="glyphicon glyphicon-trash"></i> Delete
				</a> -->
				</td>
			</tr>
			<?php
			endforeach;
			?>
		</tbody>
		</table>
	</div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
    </div>
    </section>
    <!-- /.content -->
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


        
    


