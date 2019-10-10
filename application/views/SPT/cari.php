<!doctype html>
<html>
    <head>
        <title>Pencarian data dengan lookup modal bootstrap</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.acchoblues.blogspot.com"> Hakko Blog's</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.acchoblues.blogspot.com">Tutorial</a></li>
            <li><a href="http://www.acchoblues.blogspot.com">Pemrograman</a></li>
            <li><a href="http://www.acchoblues.blogspot.com">Template</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="container"><br/><br/><br/>
	<div class="panel panel-success">
	<div class="panel-heading">
    <h3 class="panel-title">Data Mahasiswa</h3>
  </div>
  <div class="panel-body">
        <form action="action" onsubmit="dummy();
                return false">
            <div class="form-group">
                <label for="varchar">Nomor Induk Mahasiswa</label>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="NIP" id="NIP" placeholder="Nomor Induk Mahasiswa" readonly="" /><br/>
						<input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" required/><br/>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><b>Cari</b> <span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>
            </div>

            <input type="submit" value="Simpan" class="btn btn-warning" />
        </form>
		</div>
		</div>
</div>
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
                                    <th>NIP</th>
                                    <th>Nama</th>
									
                                </tr>
                            </thead>
                            <tbody>
                                            <?php
            $no  = 1;
            foreach ($datapegawai as $data) :
            ?>
                                    <tr class="pilih" data-NIP="<?php echo $data['NIP']; ?>">
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
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var NIP = document.getElementById("NIP").value;
                alert('Nomor Induk Mahasiswa ' + NIP + ' berhasil tersimpan');
				
				var ket = document.getElementById("ket").value;
                alert('Keterangan ' + ket + ' berhasil tersimpan');
            }
        </script>
    </body>
</html>
