<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINAS KOMUNIKASI DAN INFORMATIKA</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/local.css" />

<link href="<?php echo base_url();?>asset/css/datepicker3.css" rel="stylesheet">
<!--Icons-->
 <script src="<?php echo base_url();?>asset/js/lumino.glyphs.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
  <!--   <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/datepicker3.css">
   <script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
    
        <script src="<?php echo base_url();?>/asset/lib/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>/asset/lib/datatables/3/dataTables.bootstrap.js"></script>
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
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
        <script type="text/javascript">
//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("NIP").value = $(this).attr('data-nip');
                document.getElementById("nama").value = $(this).attr('data-nama');
                document.getElementById("pangkat").value = $(this).attr('data-pangkat') ;
               document.getElementById("jabatan").value = $(this).attr('data-jabatan') ;
                $('#myModal').modal('hide');
            });
//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });
            function dummy() {
                var nip = document.getElementById("NIP").value;
                alert('NIP ' + nip + ' berhasil tersimpan');
            }
        </script>
</head>
<body>