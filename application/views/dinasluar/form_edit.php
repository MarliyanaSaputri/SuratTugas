<div id="page-wrapper">
     <div class="row">
       <div class="col-lg-12">
            <h1>DISKOMINFO</h1>
            <!-- Main content -->
            <section class="content">
            <div class="row">
                <div class="col-xs-12">
                  <div class="box">                    
                     <div class="row">
                        <div class="col-lg-12">
                         <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Form Edit Dinas Luar</h3>
                            </div>
                            <div class="panel-body">
						    <!-- Main content -->
						    <section class="content">
						      <div class="row">
								<div class="col-md-12">
            					<!-- form start -->
            					<?php foreach($daftardl as $dl): ?>
					            <form class="form-horizontal" method="post" id="formedit" action="<?php echo base_url()?>DinasLuar/proses_edit/<?php echo $dl['id_dl'] ;?>">
					           	<div class="box-body">
								
					           		<div class="form-group">
										<label for="firstname" class="col-md-3">
						                	No. ST : 
						            	</label>
										<div class="col-sm-5">
										 <input type="text" class="form-control" value ="<?php echo $dl['no_st']; ?>" name="no_st" id="no_st" placeholder="" readonly="" />
										</div>
									</div>

									<div class="form-group">	 
							            <label for="firstname" class="col-md-3">
	                                        NIP 
	                                    </label>
	                                     <div class="col-md-5">
	                                     	<!-- Penggunaan Fungsi explode () -->
											<?php 
												$tag = explode(",", $dl['NIP']);
							                  	foreach($tag as $t):
											?>
											
						                  	<input type="text" class="form-control" value="<?php echo $t ?>" name="NIP" id="NIP">
	                                    	<!-- <input type="text" class="form-control" value="<?php echo $st['NIP']; ?>" name="NIP" placeholder="" readonly="" /> -->
	                                    	<?php endforeach; ?>
										</div>
									</div>

									<div class="form-group">
					                    <label for="firstname" class="col-md-3">
							                Maksud dan Tujuan
							            </label>
					                  <div class="col-sm-5">
					                    <textarea type="text" class="form-control" name="maksud_tujuan" id="maksud_tujuan" placeholder=""><?php echo $dl['maksud_tujuan']; ?></textarea>
					                  </div>
					                </div>

									<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Tanggal Pelaksanaan 
							            </label>
					                  <div class="col-sm-5">
					                     <input type="text" class="form-control" value ="<?php echo date("d/m/Y",strtotime($dl['tgl_pelaksanaan'])).'-'. date("d/m/Y",strtotime($dl['tgl_akhir']))?>" id="range_tgl" name="tgl_pelaksanaan">
					                  </div>
					                  
					                </div>

									<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Peserta yang Hadir 
							            </label>
					                  <div class="col-sm-5">

										<!-- Penggunaan Fungsi explode () -->
										<?php 
											$tag = explode(",", $dl['peserta_hadir']);
						                  	foreach($tag as $t):
										?>
										
					                  	<input type="text" class="form-control" value="<?php echo $t ?>" name="peserta_hadir[]" id="hadir">
					                  	<!-- <a href='#' color="#3399FD" onclick='hapusElemen(\"#srow" + hadir + "\"); return false;'>Hapus</a> -->
					                  	<?php endforeach; ?>

					                  	<input id="hadir" value="1" type="hidden" />
									    <button type="button" onclick="tambahPeserta(); return false;" class="btn btn-success"><span class="glyphicon glyphicon-plus">Tambah</span></button>
									    <div id="divPeserta"></div> 
									
					                  </div>
					                </div>


				                	<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Daerah Tujuan 
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control" value ="<?php echo $dl['daerah_tujuan']; ?>" name="daerah_tujuan" id="daerah_tujuan" placeholder="">
					                  </div>
					                </div>

				                	<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Bahasan 
							            </label>
					                  <div class="col-sm-5">
					                    <textarea type="text" class="form-control" name="bahasan" id="bahasan" placeholder=""><?php echo $dl['bahasan']; ?></textarea>
					                  </div>
					                </div>

					                <div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Lain - Lain 
							            </label>
					                  <div class="col-sm-5">
					                    <textarea type="text" class="form-control" name="lain-lain" id="lain-lain" placeholder=""><?php echo $dl['lain-lain']; ?></textarea>
					                  </div>
					                </div>
								
									<div class="form-group">
					                    <label for="firstname" class="col-md-3">
							                Tanggal Pembuatan
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control datepicker" value="<?php echo date("d-m-Y",strtotime($dl['tgl_pembuatan']))?>" name="tgl_pembuatan" placeholder="">
					                  </div>
					                </div>

							
					                <div class="box-footer">
						                <button type="submit" name="simpan" class="btn btn-info pull-right">Simpan</button>
					              	</div>
				              	</div>
				              </form>
				           
	                        <?php
	                        endforeach;
	                        ?>
							 </div>
				           </div> 



				           <script src="<?php echo base_url();?>asset/js/moment.js"></script>
						    <!-- js untuk daterangepicker -->
						    <script src="<?php echo base_url();?>asset/js/daterangepicker.js"></script>

						    <script type="text/javascript">
						        $(document).ready(function(){
						            $('.range-dtp i').click(function() {
						              $(this).parent().find('input').click();
						            });

						             $('#range_tgl').daterangepicker({
						                autoUpdateInput: false,
						                format : 'DD/MM/YYYY',
						                useCurrent : false,
						                "showDropdowns": true,
						                "autoApply": true,
						             }, function(start, end, label) {
						                $('#range_tgl').val(start.format('DD/MM/YYYY')+"-"+end.format('DD/MM/YYYY'))
						            });

						        });
						    </script>

							<script language="javascript">
							   function tambahPeserta() {
							     var hadir = document.getElementById("hadir").value;
							     var stre;
							     stre="<p id='srow" + hadir + "'><input type='text' name='peserta_hadir[]' class='form-control' placeholder=' Nama Peserta '><button type='btn' class='btn btn-danger' style=\"color:#FFFFFF;\" onclick='hapusElemen(\"#srow" + hadir + "\"); return false;'><span class='glyphicon glyphicon-minus'>Hapus</span></button></p>";
							     $("#divPeserta").append(stre);
							     hadir = (hadir-1) + 2;
							     document.getElementById("hadir").value = hadir;  
							   }
							   function hapusElemen(hadir) {
							     $(hadir).remove();
							   }
							</script>



						</div>				            
				    </div>
				</div>
			</div>
		</div>