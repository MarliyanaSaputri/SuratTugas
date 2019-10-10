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
                         <div class="panel panel-warning">
                            <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Form Tambah Dinas Luar</h3>
                            </div>
                            <div class="panel-body">
						    <!-- Main content -->
						    <section class="content">
						      <div class="row">
								<div class="col-md-12">
            					<!-- form start -->
            					<?php foreach($daftarst as $st): ?>
					            <form class="form-horizontal" method="post" id="formtmb" action="<?php echo base_url()?>DinasLuar/prosestambah/<?php echo $st['id_st'] ;?>">

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
										 <input type="text" class="form-control" value="<?php echo $st['no_st']; ?>" name="no_st" placeholder="" readonly=""/>
										</div>
									</div>

									<div class="form-group">	 
							            <label for="firstname" class="col-md-3">
	                                        NIP 
	                                    </label>
	                                     <div class="col-md-5">
	                                    	<input type="text" class="form-control" value="<?php echo $st['NIP']; ?>" name="NIP" placeholder="" readonly="" />
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
					                  <div class="col-sm-3">
					                    <input type="date" class="form-control datepicker"  name="tgl_pelaksanaan">
					                  </div>
					                  <div class="col-sm-2">
					                    <input type="date" class="form-control datepicker" name="tgl_akhir">
					                  </div>
					                </div>

									<div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                Peserta yang Hadir 
							            </label>
					                  <div class="col-sm-5">
					                  	<input type="text" class="form-control" name="peserta_hadir" placeholder="1. ">
					                  	<!-- <input id="hadir" value="1" type="hidden" />
									    <button type="button" onclick="tambahPeserta(); return false;"><span class="glyphicon glyphicon-plus"></span></button>
									    <div id="divPeserta"></div> -->
					                  </div>
					                </div>

					                <div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                
							            </label>
					                  <div class="col-sm-5">
					                  	<input type="text" class="form-control" name="hadir2" placeholder="2. ">
					                  </div>
					                </div>

					                <div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                
							            </label>
					                  <div class="col-sm-5">
					                  	 <input type="text" class="form-control" name="hadir3" placeholder="3. ">
					                  </div>
					                </div>

					                <div class="form-group">
					                   <label for="firstname" class="col-md-3">
							                
							            </label>
					                  <div class="col-sm-5">
					                  	 <input type="text" class="form-control" name="hadir4" placeholder="4. ">
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
					                    <input type="date" class="form-control datepicker" name="tgl_pembuatan" id="datepicker" placeholder="">
					                  </div>
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

<!-- 
							<script language="javascript">
							   function tambahPeserta() {
							     var hadir = document.getElementById("hadir").value;
							     var stre;
							     var jumlah = parseInt($("#divPeserta").val()); // Ambil jumlah data form pada textbox jumlah-form
								 var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

							     stre="<table" +
							        "<tr>" +
								    nextform + 
							        "<td><input type='text' size='50' name='peserta_hadir' placeholder=' Nama Peserta' required></td><a href='#' style=\"color:#3399FD;\" " +
							        "</tr>" +
							        "</table>" +
							        "<br><br>";
							     /*<p id='srow" + hadir + "'><input type='text' size='45' name='peserta_hadir' placeholder='Nama Peserta' /><a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + hadir + "\"); return false;'>Hapus</a></p>";*/

							     $("#divPeserta").append(stre);

							     hadir = (nextform);
							     document.getElementById("hadir").value = hadir;
							   }

							</script>


							<script type="text/javascript">
						     $(function(){
						      $(".datepicker").datepicker({
						          format: 'dd-mm-yyyy',
						          autoclose: true,
						          todayHighlight: true,
						      });
						     });
						    </script>
 -->

							 
				       </div>				            
				    </div>
				</div>
			</div>
		</div>