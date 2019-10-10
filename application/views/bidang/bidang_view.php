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
			<a style="margin-bottom:10px" href="<?php echo base_url() ?>datamaster/datamaster/insertmerk/" 
			class="btn btn-default pull-right"><span class='glyphicon glyphicon-plus'></span>  Tambah Data</a>
        </div>

      <div id="collapse2-One" class="accordion-body collapse in">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div id="collapse2-One" class="accordion-body collapse in">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="display" cellspacing="0" width="100%">
					<center> 
					<thead>
						<tr>
							<th width="5%" >No</th>
							<th width="20%">Kode Bidang</th>
							<th width="40%">Nama Bidang</th>
							<th>Pilihan</th>	
						</tr>
					</thead>
					</center>								 
					<tbody>
				<?php
						$no  = 1;
						foreach ($daftarbidang as $data) :
						?>
						<tr>
							<td align="left"><?php echo $no++;?></td>
							<td align="left"><?php echo $data['kd_bid']; ?></td>
							<td align="left"><?php echo $data['nama_bidang']; ?></td>
						<td align="left"> 
					
						 
							<span class="glyphicon glyphicon-trash"></span></a></td>
								
						</td>
						<?php
						endforeach;
						?>
					</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
		</div>

						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
	</div>	
	</div><!--/.main-->

	


