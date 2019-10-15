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
                                        Bidang 
                                    </label>
                                    <div class="col-sm-5">
                                        <select width="10" class="form-control"onchange="price()" name="kd_bid" id="kd_bid">
                                        <?php foreach($databd as $data):?>
                                        <option value="<?php echo $data['kd_bid']?>"><?php echo $data['nama_bidang']?></option>
                                        <?php endforeach ;?>
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
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="NIP" id="NIP" placeholder="" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="firstname" class="col-md-3">
                                    Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly="" class="form-control" name="nama" id="nama" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="firstname" class="col-md-3">
                                       Pangkat / Gol
                                    </label>
                                    <div class="col-sm-5">
                                    <input type="text" readonly="" class="form-control" id="pangkat" name="pangkat" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname" class="col-md-3">
                                        Jabatan
                                        </label>
                                    <div class="col-sm-5">
                                    <textarea type="text"readonly="" class="form-control" id="jabatan" name="jabatan" placeholder=""></textarea>
                                    </div>
                                    </div>               
                                    <div class="form-group">
                                    <label for="firstname" class="col-md-3">
                                        Tanggal Pembuatan
                                    </label>                 
                                    <div class="col-sm-5">                                    
                                       <input placeholder="Masukkan tanggal " type="text" class="form-control datepicker" name="tgl_pembuatan">
                                   </div>
                                    </div>                                
                                    <div class="form-group">
                                      <label for="firstname" class="col-md-3">
                                        Nama Tugas
                                    </label>
                                    <div class="col-sm-5">
                                    <textarea type="text" name = "nama_tugas" id="nama_tugas" class="form-control" placeholder=" Click to input here"></textarea>
                                    </div>
                                    </div>                                                      
                                <div class="box-footer">
                                    <div class="col-sm-8">
                                <button type="submit" class="btn btn-default">Cancel</button>

                                <button type="submit" name="simpan" class="btn btn-info pull-right">Tambah</button>
                            </div>
                                </div>
                              </div>
        <!-- Modal -->
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
                            foreach ($datapegawai as $data) :
                            ?>
                              <tr class="pilih" data-NIP="<?php echo $data['NIP']; ?>"
                                data-nama="<?php echo $data['nama']; ?>"
                                    data-pangkat="<?php echo $data['pangkat']; ?>"
                                        data-golongan="<?php echo $data['golongan']; ?>"
                                        data-jabatan="<?php echo $data['jabatan']; ?>">
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
//            jika dipilih, NIP akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("NIP").value = $(this).attr('data-nip');
                document.getElementById("nama").value = $(this).attr('data-nama');
                document.getElementById("pangkat").value = $(this).attr('data-pangkat') + ' '+ $(this).attr('data-golongan')  ;
                document.getElementById("golongan").value = $(this).attr('data-golongan');
                document.getElementById("jabatan").value = $(this).attr('data-jabatan');
                $('#myModal').modal('hide');
            });
//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
            }
        </script>
        <script type="text/javascript">
        function price() {
        var th = <?php echo date('Y')?>;
        var tes = document.getElementById("kd_tugas").value + "/" ;
        var kd = document.getElementById("kd_bid").value;
        document.getElementById("no_st").value=tes + "  " + "/" + kd + "/"+ th ;
        }
</script>