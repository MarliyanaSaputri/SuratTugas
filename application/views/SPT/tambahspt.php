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
                      <h3 class="box-title">Data SPT</h3>
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Surat Perintah Tugas</h3>
                            </div>
                            <div class="panel-body">
                            <!-- Main content -->
                            <section class="content">
                              <div class="row">
                                <div class="col-md-12">
                                <form class="form-horizontal" method="post" id="frm_pembelian" action="<?php echo base_url() ?>surattugas/prosestambah" >
                                <div class="box-body">
                                    <div class="form-group">
                                    <label for="firstname" class="col-md-3">
                                        Nama Tugas/Perjalanan Dinas 
                                    </label>
                                    <div class="col-sm-5">
                                    <select width="10" class="form-control" name="kd_tugas" onchange="price()"  id="kd_tugas">
                                            <?php foreach($datatugas as $data):?>
                                        <option value="<?php echo $data['kd_tugas']?>"><?php echo $data['nama_tugas']?></option>
                                            <?php endforeach;?>
                                    </select>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="firstname" class="col-md-3">
                                        No.ST
                                        </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="no_st" id="no_st" placeholder="">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                       <label for="firstname" class="col-md-3">
                                            NIP 
                                        </label>
                                      <div class="col-sm-5">								  
									     <div class="input-group control-group after-add-more">
										  <div class="input-group-btn"> 
											<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tmabah</button>
										  </div>
										</div>                                 
                                      </div>
                                    </div>  

                                   
                                                 
                                    <div class="form-group">
                                    <label for="firstname" class="col-md-3">
                                        Tanggal Pembuatan
                                    </label>                 
                                    <div class="col-sm-5">                                    
                                       <input placeholder="  " type="text" class="form-control datepicker" name="tgl_pembuatan">
                                   </div>
                                    </div>                                
                                    <div class="form-group">
                                      <label for="firstname" class="col-md-3">
                                        Nama Tugas
                                    </label>
                                    <div class="col-sm-5">
                                    <textarea type="text" name = "nama_tugas" id="nama_tugas" class="form-control" placeholder=""></textarea>
                                    </div>
                                    </div>                                                      
                                <div class="box-footer">
                                    <div class="col-sm-8">
                               
          <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Lookup Mahasiswa</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nim</th>
                                    <th>Nama</th>
								
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                            $no  = 1;
                            foreach ($datapegawai as $data) :
                            ?>
                              <tr class="pilih" data-nip="<?php echo $data['NIP']; ?>"
                                data-nama="<?php echo $data['nama']; ?>"
                                    data-pangkat="<?php echo $data['pangkat']; ?>"
                                        data-golongan="<?php echo $data['golongan']; ?>"
                                        data-jabatan="<?php echo $data['jabatan']; ?>">
                                <td><?php echo $data['NIP']; ?>  </td>
                                <td><?php echo $data['nama']; ?></td>                                 
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
		
		

        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="addmore[]" id="NIP" class="form-control" placeholder="Enter Name Here">
            <div class="input-group-btn"> 
 <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                            <span class="glyphicon glyphicon-search"></span>
                                            </button> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Data Pegawai</h4>
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
						
                            foreach ($query as $data) :
                            ?>
                              <tr class="pilih" data-nip="<?php echo $data['NIP']; ?>">
                             
                                <td><?php echo $data['NIP']; ?></td>
                                <td><?php echo $data['nama']; ?></td>                                 
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
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
<script type="text/javascript">
//            jika dipilih, NIP akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("NIP").value = $(this).attr('data-nip');
              
             
                $('#myModal').modal('hide');
            });
//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
            }
        </script>
		
        <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("NIP").value = $(this).attr('data-nip');
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var nim = document.getElementById("nim").value;
                alert('Nomor Induk Mahasiswa ' + nim + ' berhasil tersimpan');
				
				var ket = document.getElementById("ket").value;
                alert('Keterangan ' + ket + ' berhasil tersimpan');
            }
        </script>
