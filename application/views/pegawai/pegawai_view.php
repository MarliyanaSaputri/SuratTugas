<div id="page-wrapper">
  <div class="col-lg-12">
	<section class="content-header">
        <h1>Pegawai
        </h1>
        <ol class="breadcrumb">
        	<li><a href=""><i class="fa fa-group"></i></a></li>
        	<li class="active">Data Pegawai</li>
        </ol>
	</section>
		<br>
		<div class="box-body table-responsive">
           <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
			<thead>
			<tr class="center">
				<th width="5%">No</th>
				<th width="30%">NIP</th>
				<th width="30%">Nama</th>
				<th width="30%">Bidang</th>
			</tr>
			</thead>
			<tbody>
			<?php 
			$no  = 1;
			foreach ($daftarpegawai as $data) :
			?>
			<tr>
				<td align="left"><?php echo $no++;?></td>
				<td align="left"><?php echo $data['NIP']; ?></td>
				<td align="left"><?php echo $data['nama']; ?></td>
				<td align="left"><?php echo $data['nama_bidang']; ?></td>
						
				
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


        
    


