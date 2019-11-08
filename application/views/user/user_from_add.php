<style>

div.absolute {
    position: absolute;
    
    right: 14px;
    bottom: 16px;
  
}
div.back {
     position: absolute;
    
    right: 150px;
   top: 50px;


}
</style>


    <div class="page-wrapper">
         <div class="col-lg-12">
  
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
                        <h3 class="box-title text-center">Tambah User</h3>
                        <div class="pull-right">
                                <div class="back"><a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                                        <i class="fa fa-undo"></i> Back
                                </a></div>

                        </div>
                </div>
                
                
                <br>
                                        <div class="box-body">

<div class="row">
<div class="col-md-4 col-md-offset-4">
<?php //echo validation_errors(); ?> 
<form action="" method="post">

<div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
	<label>Nama *</label>
	<input type="text" value="<?=set_value('fullname')?>" name="fullname" class="form-control">
	<?=form_error('fullname')?>
</div>
<div class="form-group <?=form_error('username') ? 'has-error' : null?>">
	<label>Username *</label>
	<input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
	<?=form_error('username')?>
</div>
<div class="form-group <?=form_error('password') ? 'has-error' : null?>">
	<label>Password *</label>
	<input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
	<?=form_error('password')?>
</div>
<div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
	<label>Password Confirmation *</label>
	<input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
	<?=form_error('passconf')?>
</div>
<div class="form-group <?=form_error('level') ? 'has-error' : null?>">
	<label>Level *</label>
	<select name="level" class="form-control">
		<option value="">-- Pilih --</option>
		<option value="1" <?=set_value('level') == 1 ? "selected" : null ?>> Admin</option>
		<option value="2" <?=set_value('level') == 2  ? "selected" : null ?>> User</option>
</select>
<?=form_error('level')?>
</div>
<div class="form-group">
	<button type="submit" class="btn btn-success btn-flat"><i class="fa fa-play"></i> Save</button>
	<div class="absolute"><button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Reset</button></div>
</div>


</div>

</form>


</div>

</div>


              
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

</div>
