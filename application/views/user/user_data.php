<div id="page-wrapper">
            
                   
<div class="row">
	
	<section class="content-header">
		
                <h1>User
                </h1>
                <ol class="breadcrumb">
                	<li><a href=""><i class="fa fa-user"></i></a></li>
                	<li class="active">User</li>
                </ol>

	</section>


        <!--main Content-->

        <section class="content">
        
         <div class="col-xs-12">
        <div class="box">
                <div class="box-header">
                        <h3 class="box-title text-center">Data User</h3>
                        <div class="pull-right">
                                <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                                        <i class="fa fa-plus"></i> Create
                                </a>

                        </div>
                </div>
                
                
                <br>
                                        <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped table-paginate " cellspacing="" width="100%">
                                <thead>
                                        <tr class="center">
                                                <th class="text-center">No</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Nama</th>
                                                 <th class="text-center">Level</th>
                                                <th class="text-center">Pilihan</th>
                                        </tr>
                                </thead>
                                <tbody>

                                <?php $no = 1;
                           
                                foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                                <td class="text-center"><?=$no++?>.</td>
                                                <td class="text-center"><?=$data->username?></td>
                                                <td class="text-center"><?=$data->nama?></td>
                                                <td class="text-center"><?=$data->level == 1 ? "Administrator" : "User"?></td>
                                                <td  class="text-center" width="250px">

                                                 <form action="<?=site_url('user/del')?>" method="post">

                                             <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-sm" >
                                                        <i class="glyphicon glyphicon-pencil"></i> Update
                                                </a> 
                                                        
                                                  <input type="hidden" name="user_id" value="<?=$data->user_id?>">

                                               <button onclick="return confirm ('Apakah Anda Yakin ?')"  class="btn btn-danger btn-sm" >
                                                        <i class="glyphicon glyphicon-trash"></i> Delete
                                                </button> 
                                              </form>
                                        </td>
                                </tr>
                                <?php
                        } ?>

                                </tbody>
                </table>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
     
      <!-- /.row -->
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

