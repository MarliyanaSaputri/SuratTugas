<div id="page-wrapper">
  <div class="col-lg-12">
	<section class="content-header">
        <h1>Bidang
        </h1>
        <ol class="breadcrumb">
        	<li><a href=""><i class="fa fa-group"></i></a></li>
        	<li class="active">Data Bidang</li>
        </ol>
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


        
    


