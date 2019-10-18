
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DISKOMINFO</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="<?php echo base_url();?>home"><i class="fa fa-bullseye"></i> Dashboard</a></li>
					 <?php if($this->fungsi->user_login()->level == 1) { ?>
                    <li><a href="<?php echo base_url();?>pegawai"><i class="fa fa-book"></i> Data Pegawai</a></li>
                     <?php } ?>
					<?php if($this->fungsi->user_login()->level == 1) { ?>
                    <li><a href="<?php echo base_url();?>Bidang"><i class="fa fa-group"></i> Data Bidang</a></li>
					  <?php } ?>
					
					  <?php if($this->fungsi->user_login()->level == 1) { ?>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ol"></i> Surat perintah<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>surattugas"><i class="fa fa-file"></i> Data Surat Perintah Tugas</a></li>
                            <li><a href="<?php echo base_url();?>surattugas/formtambahspt"><i class="fa fa-plus"></i> Tambah Surat Perintah Tugas</a></li>
                        </ul>
                    </li>
					  <?php } ?>
					
					
                         <?php if($this->fungsi->user_login()->level == 2) { ?>
                       <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ol"></i> Surat perintah<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>surattugas"><i class="fa fa-file"></i> Data Surat Perintah Tugas</a></li>
                        </ul>
                    </li>
                    <?php } ?>
					
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plane"></i> Dinas Luar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>DinasLuar"><i class="fa fa-file"></i> Data Dinas Luar</a></li>
                            <li><a href="<?php echo base_url(); ?>DinasLuar/tambahdl"><i class="fa fa-plus"></i> Tambah Data Dinas Luar</a></li>
                            <li><a href="<?php echo base_url();?>Nota/nota"><i class="fa fa-check"></i> Nota Dinas Luar </a></li>
                        </ul>
                    </li>
                   
                     <?php if($this->fungsi->user_login()->level == 1) { ?>
                    <li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> User</a></li>
                     <?php } ?>

                </ul>
                 
                <ul class="nav navbar-nav navbar-right navbar-user">
       
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=ucfirst
                        ($this->fungsi->user_login()->username)?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          
                            <li><a href="<?=site_url('auth/logout')?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
