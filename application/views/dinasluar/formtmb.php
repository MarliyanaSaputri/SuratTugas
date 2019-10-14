
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/daterangepicker.css" type="text/css">  
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
			         <div class="row">
			            <div class="col-lg-12">
			             <div class="panel panel-primary">
			                <div class="panel-heading">
			                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Form Tambah DL</h3>
			                </div>

			                <div class="panel-body">
						    <!-- Main content -->
						    <section class="content">
						      <div class="row">
								<div class="col-md-12">
            					<!-- form start -->
            					<?php foreach($daftarst as $st): ?>
					            <form class="form-horizontal" method="post" id="formtmb" action="<?php echo base_url()?>DinasLuar/prosestambah/">
					           	<div class="box-body">
								
					           		<div class="form-group">
					                    <label for="firstname" class="col-md-3">
							                ID Dinas Luar : 
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control" name="id_dl" placeholder="" readonly="" />
					                  </div>
					                </div>

					           		<div class="form-group">
										<label for="firstname" class="col-md-3">
						                	No. ST : 
						            	</label>
										<div class="col-sm-5">
										 <input type="text" class="form-control" value="<?php echo $st['no_st']; ?>" name="no_st" placeholder="" />
										</div>
									</div>

									<div class="form-group">	 
							            <label for="firstname" class="col-md-3">
	                                        NIP 
	                                    </label>
	                                     <div class="col-md-5">
	                                    	<input type="text" class="form-control" value="<?php echo $st['NIP']; ?>" name="nip" placeholder="" readonly="" />
										</div>
									</div>

									<div class="form-group">
					                    <label for="firstname" class="col-md-3">
							                Maksud dan Tujuan
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control" name="maksud_tujuan" placeholder="">
					                  </div>
					                </div>

									<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Tanggal Pelaksanaan 
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" id="range-tanggal" class="form-control" placeholder="dd/mm/yyyy - dd/mm/yyyy">
            									
					                  </div>
					                  
					                </div>
					               
									


					

									<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Peserta yang Hadir 
							            </label>
					                  <div class="col-sm-5">
					                  	<input id="hadir" value="1" type="hidden" />
									    <button type="button" onclick="tambahPeserta(); return false;"><span class="glyphicon glyphicon-plus"></span></button>
									    <div id="divHobi"></div>
					                  </div>
					                </div>

				                	<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Daerah Tujuan 
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control" name="daerah_tujuan" placeholder="">
					                  </div>
					                </div>

				                	<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Bahasan 
							            </label>
					                  <div class="col-sm-5">
					                    <textarea type="text" class="form-control" name="bahasan" placeholder=""></textarea>
					                  </div>
					                </div>

					                <div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Lain - Lain 
							            </label>
					                  <div class="col-sm-5">
					                    <textarea type="text" class="form-control" name="lain-lain" placeholder=""></textarea>
					                  </div>
					                </div>
								
									<div class="form-group">
					                    <label for="firstname" class="col-md-3">
							                Tanggal Pembuatan
							            </label>
					                  <div class="col-sm-5">
					                    <input type="text" class="form-control datepicker" name="tgl_pembuatan" placeholder="">
					                  </div>
					                </div>

									<!-- <div class="form-group">
		                                <label for="firstname" class="col-md-3">
		                                 Penanggungjawab</label>
		                                <div class="col-sm-5">
		                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="">
		                                </div>
		                            </div>

					                <div class="form-group">	 
							            <label for="firstname" class="col-md-3">
	                                        NIP 
	                                    </label>
	                                     <div class="col-md-5">
	                                    <input type="text" class="form-control" name="nip" id="nip" placeholder="" readonly="" />
										</div>
										<div class="col-md-2">
		                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
		                                        <span class="glyphicon glyphicon-search"></span>
		                                    </button>
		                                </div>
									</div> -->
	</div>
									
									<div id="insert-form"></div>
					                <div class="box-footer">
						                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
					              	</div>
				              	</div>
				              </form>
							<?php
	                            endforeach;
	                            ?>
							 </div>
				           </div> 

					                            
				           <!-- Modal -->
							<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					            <div class="modal-dialog" style="width:800px">
					                <div class="modal-content">
					                    <div class="modal-header">
					                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					                        <h4 class="modal-title" id="myModalLabel">Lookup Pegawai</h4>
					                    </div>
					                    <div class="modal-body">
					                        <table id="lookup" class="table table-bordered table-hover table-striped">
					                            <thead>
					                            <tr>
					                                <th>NIP</th>
					                                <th>Nama</th>                
					                            </tr>
					                            </thead>
					                            <tbody>
					                            <?php
					                            $no  = 1;
					                            foreach ($daftarpegawai as $peg) :
					                            ?>
					                            <tr class="pilih" 
					                            data-nip="<?php echo $peg['nip']; ?>"
					                            data-nama="<?php echo $peg['nama']; ?>">
					                           <td><?php echo $peg['nip']; ?></td>
					                            <td><?php echo $peg['nama']; ?></td>                                    
					                            </tr>
					                            <?php
					                            endforeach;
					                            ?>
					                               
					                            </tbody>
					                        </table>  
					                    </div>
					                </div>
					            </div>
					        </div>   
					        <script type="text/javascript">
					//            jika dipilih, NIP akan masuk ke input dan modal di tutup
					            $(document).on('click', '.pilih', function (e) {
					                document.getElementById("NIP").value = $(this).attr('data-nip');
					                document.getElementById("nama").value = $(this).attr('data-nama');
					                $('#myModal').modal('hide');
					            });
					//            tabel lookup mahasiswa
					            $(function () {
					                $("#lookup").dataTable();
					            });
					            // function dummy() {
					            //     var NIP = document.getElementById("NIP").value;
					            //     alert('Nomor Induk Mahasiswa ' + NIP + ' berhasil tersimpan');
					                
					            //     var ket = document.getElementById("ket").value;

					            //     alert('Keterangan ' + ket + ' berhasil tersimpan');
					           // }
					        </script> -->

 <script src="<?php echo base_url();?>asset/js/moment.js"></script>
    <!-- js untuk daterangepicker -->
    <script src="<?php echo base_url();?>asset/js/daterangepicker.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.range-dtp i').click(function() {
              $(this).parent().find('input').click();
            });

             $('#range-tanggal').daterangepicker({
                autoUpdateInput: false,
                format : 'DD/MM/YYYY',
                useCurrent : false,
                "showDropdowns": true,
                "autoApply": true,
             }, function(start, end, label) {
                $('#range-tanggal').val(start.format('DD/MM/YYYY')+" - "+end.format('DD/MM/YYYY'))
            });

        });
    </script>
							<script language="javascript">
							   function tambahPeserta() {
							     var hadir = document.getElementById("hadir").value;
							     var stre;
							     stre="<p id='srow" + hadir + "'><input type='text' size='45' name='peserta_hadir' placeholder='Nama Peserta' /> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + hadir + "\"); return false;'>Hapus</a></p>";
							     $("#divHobi").append(stre);
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